<?php

/**
 * Title: Hidden No Results Content
 * Slug: wcktm2023-fse-workshop/hidden-no-results-content
 * Inserter: no
 */
?>
<!-- wp:paragraph -->
<p>
    <?php echo esc_html_x('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'Message explaining that there are no results returned from a search', 'wcktm2023-fse-workshop'); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_html_x('Search', 'label', 'wcktm2023-fse-workshop'); ?>","placeholder":"<?php echo esc_attr_x('Search...', 'placeholder for search field', 'wcktm2023-fse-workshop'); ?>","showLabel":false,"buttonText":"<?php esc_attr_e('Search', 'wcktm2023-fse-workshop'); ?>","buttonUseIcon":true} /-->