jQuery(document).ready(function ($) {
    // Attach click event to the dismiss button
    $(document).on('click', '.notice[data-notice="get-start"] button.notice-dismiss', function () {
        // Dismiss the notice via AJAX
        $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: {
                action: 'import_export_company_dismissed_notice',
            },
            success: function () {
                // Remove the notice on success
                $('.notice[data-notice="example"]').remove();
            }
        });
    });
});

// Plugin – AI Content Writer plugin activation
document.addEventListener('DOMContentLoaded', function () {
    const import_export_company_button = document.getElementById('install-activate-button');

    if (!import_export_company_button) return;

    import_export_company_button.addEventListener('click', function (e) {
        e.preventDefault();

        const import_export_company_redirectUrl = import_export_company_button.getAttribute('data-redirect');

        // Step 1: Check if plugin is already active
        const import_export_company_checkData = new FormData();
        import_export_company_checkData.append('action', 'check_plugin_activation');

        fetch(installPluginData.ajaxurl, {
            method: 'POST',
            body: import_export_company_checkData,
        })
        .then(res => res.json())
        .then(res => {
            if (res.success && res.data.active) {
                // Plugin is already active → just redirect
                window.location.href = import_export_company_redirectUrl;
            } else {
                // Not active → proceed with install + activate
                import_export_company_button.textContent = 'Installing & Activating...';

                const import_export_company_installData = new FormData();
                import_export_company_installData.append('action', 'install_and_activate_required_plugin');
                import_export_company_installData.append('_ajax_nonce', installPluginData.nonce);

                fetch(installPluginData.ajaxurl, {
                    method: 'POST',
                    body: import_export_company_installData,
                })
                .then(res => res.json())
                .then(res => {
                    if (res.success) {
                        window.location.href = import_export_company_redirectUrl;
                    } else {
                        alert('Activation error: ' + (res.data?.message || 'Unknown error'));
                        import_export_company_button.textContent = 'Try Again';
                    }
                })
                .catch(error => {
                    alert('Request failed: ' + error.message);
                    import_export_company_button.textContent = 'Try Again';
                });
            }
        })
        .catch(error => {
            alert('Check request failed: ' + error.message);
        });
    });
});
