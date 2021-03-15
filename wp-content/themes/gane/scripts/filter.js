function getCatPosts(value, excluded, changed) {
    jQuery(document).ready(function ($) {
        if (!changed) {
            jQuery.ajax({
                url: filter_data.ajax_url,
                type: 'POST',
                data: {
                    action: 'filter_function',
                    category: value,
                    excluded: excluded,
                },
                success: function (data) {
                    $('.all-news .container .row:first-child').append(data);
                    $('#paginate').insertAfter($('.all-news .container .row:first'));
                },
            });
            return false;

        } else {
            if (location.href.indexOf('?') > 0) {
                $full_current_url = location.href.substr(0, location.href.indexOf('?'));
            } else {
                $full_current_url = location.href.substr(0, location.href.length - 1);
            }
            $rewrite_base_url = $full_current_url.substr(0, $full_current_url.lastIndexOf("/") + 1);
            $slug = ($('#filter select').find('option:selected').attr('rel'));
            if ($slug && parseInt($rewrite_base_url.indexOf('category')) === -1 && parseInt(value) !== -1) {
                if (parseInt($rewrite_base_url.indexOf('blog')) !== -1) {
                    window.location.href = $rewrite_base_url + '/category/' + $slug + '/';
                }
                else {
                    window.location.href = $rewrite_base_url + '/blog/category/' + $slug + '/';
                }
            } else if ($slug && parseInt(value) !== -1) {
                window.location.href = $rewrite_base_url + $slug + '/';

            } else if (parseInt(value) === -1) {
                $rewrite_base = $rewrite_base_url.substr(0, $rewrite_base_url.length - 1);
                $rewrite_base = $rewrite_base.substr(0, $rewrite_base.lastIndexOf("/") + 1);
                if (parseInt($rewrite_base.indexOf('category')) !== -1) {
                    $rewrite_base = $rewrite_base.substr(0, $rewrite_base.lastIndexOf("category") - 1);
                }
                window.location.href = $rewrite_base + '/';
            }
        }
    });
}