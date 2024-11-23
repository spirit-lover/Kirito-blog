if (wps_js.isset(wps_js.global, 'request_params', 'page') && wps_js.global.request_params.page === "referrals") {
    // Add Income Visitor Chart

    if (document.getElementById('incomeVisitorChart')) {
        const parentElement = jQuery('#incomeVisitorChart').parent();
        const placeholder = wps_js.rectangle_placeholder();
        parentElement.append(placeholder);

        const searchData = Wp_Statistics_Referrals_Object.search_engine_chart_data;

        if (!searchData?.data?.datasets || searchData.data.datasets.length === 0) {
            parentElement.html(wps_js.no_results());
            jQuery('.wps-ph-item').remove();

        } else {
            jQuery('.wps-ph-item').remove();
            jQuery('.wps-postbox-chart--data').removeClass('c-chart__wps-skeleton--legend');
            parentElement.removeClass('c-chart__wps-skeleton');
            wps_js.new_line_chart(searchData, 'incomeVisitorChart', null)
        }
    }

    // TickBox
    jQuery(document).on('click', "div#referral-filter", function (e) {
        e.preventDefault();

        // Show
        tb_show('', '#TB_inline?&width=430&height=193&inlineId=referral-filter-popup');

        // Add Content
        setTimeout(function () {

            var tickBox_DIV = "#wps-referral-filter-div";
            if (!wps_js.exist_tag(tickBox_DIV + " input[type=submit]")) {

                // Set PlaceHolder
                jQuery(tickBox_DIV).html('<div style="height: 50px;"></div>' + wps_js.line_placeholder(1));
                wps_show_referrals_filter(tickBox_DIV);

            }
        }, 500);

    });

    // submit and disable empty value
    var FORM_ID = '#wps-referrals-filter-form';
    jQuery(document).on('submit', FORM_ID, function () {
        // Remove Empty Parameter
        let forms = {
            'select': ['referrer']
        };
        Object.keys(forms).forEach(function (type) {
            forms[type].forEach((name) => {
                let input = jQuery(FORM_ID + " " + type + "[name=" + name + "]");
                if (input.val().length < 1) {
                    input.prop('disabled', true);
                }
            });
        });

        // Show Loading
        jQuery("span.filter-loading").html(wps_js._('please_wait'));
        // return true;
    });

    // Show Filter form
    function wps_show_referrals_filter(tickBox_DIV) {

        // Create Table
        let html = '<table class="o-table wps-referrals-filter">';

        // Show List Select

        html += `<tr><td class="wps-referrals-filter-title">${wps_js._('search_by_referrer')}</td></tr>`;
        html += `<tr><td><select name="referrer" class="wps-select2   wps-width-100">`;
        html += `<option value=''>${wps_js._('all')}</option>`;
        html += `<option value='test'>test</option>`;
        let current_value = wps_js.getLinkParams('referrer');
        if (current_value != null) {
            html += `<option value='${current_value}'  selected>${current_value}</option>`;
        }

        html += `</select></td></tr>`;
        // Submit Button
        html += `<tr><td></td></tr>`;
        html += `<tr><td><input type="submit" value="${wps_js._('filter')}" class="button-primary"> &nbsp; <span class="filter-loading"></span></td></tr>`;
        html += `</table>`;
        jQuery(tickBox_DIV).html(html);
        jQuery('.wps-select2').select2({
            ajax: {
                delay: 500,
                url: wps_js.global.ajax_url,
                dataType: 'json',
                data: function (params) {
                    const query = {
                        wps_nonce: wps_js.global.rest_api_nonce,
                        search: params.term,
                        action: 'wp_statistics_search_referrers',
                        paged: params.page || 1
                    };

                    if (wps_js.isset(wps_js.global, 'request_params')) {
                        const requestParams = wps_js.global.request_params;
                        if (requestParams.page) query.page = requestParams.page;
                    }
                    return query;
                },
                error: function (xhr, status, error) {
                    console.error('AJAX request error:', status, error);
                }
            }
        });
    }
}
