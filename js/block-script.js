wp.data.dispatch( 'core/edit-post').removeEditorPanel( 'post-status' ) ;
// wp.data.dispatch( 'core/edit-post').removeEditorPanel( 'taxonomy-panel-category' ) ; // category
// wp.data.dispatch( 'core/edit-post').removeEditorPanel( 'taxonomy-panel-TAXONOMY-NAME' ) ; // custom taxonomy
wp.data.dispatch( 'core/edit-post').removeEditorPanel( 'taxonomy-panel-post_tag' ); // tags
// wp.data.dispatch( 'core/edit-post').removeEditorPanel( 'featured-image' ); // featured image
wp.data.dispatch( 'core/edit-post').removeEditorPanel( 'post-link' ); // permalink
wp.data.dispatch( 'core/edit-post').removeEditorPanel( 'page-attributes' ); // page attributes
// wp.data.dispatch( 'core/edit-post').removeEditorPanel( 'post-excerpt' ); // Excerpt
wp.data.dispatch( 'core/edit-post').removeEditorPanel( 'discussion-panel' ); // Discussion
wp.data.dispatch( 'core/edit-post').removeEditorPanel( 'template' ); // Template

// jQuery(document).ready(function($){
//   $("aria-expanded").attr("false");
// });
// document.querySelector(".components-panel__body-toggle").setAttribute("aria-expanded", "false");

wp.domReady(function () {
  const allowedEmbedBlocks = [
    'vimeo',
    'youtube',
  ];
  wp.blocks.getBlockVariations('core/embed').forEach(function (blockVariation) {
    if (-1 === allowedEmbedBlocks.indexOf(blockVariation.name)) {
      wp.blocks.unregisterBlockVariation('core/embed', blockVariation.name);
    }
  });
});