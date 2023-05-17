<?php

namespace ZMT\Theme\Config\Theme;

class textstrings {

  /**
    * -- Connects translation strings to app folder without textdomain --
    *    1. Because "app" is a git Submodule
    *    2. it's not possible to change TextDomain in submodule for each Theme
    *    based on ZM-Theme-Framework and keeping submodules up-to-date
    */

    public $DownloadZMPlugin;
    public $Toenablethemesettings;
    
    public $Skiptocontent;
    public $WarningVersionsare;

    public $Loadmoreposts;
    public $Loading;
    
    public $AuthorLink_label;
    
    public $CommentsCounter_label;
    public $nocomments;
    public $n_comment;
    public $n_comments;
    
    public $Comments;
    public $says;
    public $s_at_s;
    public $Yourcommentisawaitin;
    public $Yourcommentisawaitin_long;
    
    public $Edit;
    
    public $CommentsPagination_label;
    
    public $Pagination_label;
    
    public $Previous;
    public $Next;
    
    public $Date_label;
    
    public $PageNotFound;
    public $PageNotFound_long;
    public $Home;
    
    public $LinkPages_label;
    public $ContinueReading;
    public $Previouspage;
    public $Nextpage;
    
    public $LastNextArticleLink_label;
    
    public $Menu_default_label;
    
    public $Search_label;
    public $Search_label_close;
    
    public $NavToggle_label;
    
    public $OffcanvasContainer_label_close;
    
    public $ReadMore;
    
    public $Blog;
    public $SearchResultsfor_n;

    function __construct(){

      //Init.php
      $this->DownloadZMPlugin = __( 'Download ZMPlugin', 'zmt-modular' );
      $this->Toenablethemesettings = __( 'To enable theme settings in Dashboard and Customizer you need ZMPlugin. ZMPlugin is a free WordPress extension to manage theme options and customizer settings of ZM-Theme-Framework based WordPress Themes.', 'zmt-modular' );

      //Theme.php
      $this->Skiptocontent =      __( 'Skip to content', 'zmt-modular' );
      $this->WarningVersionsare = __( 'Warning: Versions are not consistent!', 'zmt-modular' );

      //Render.php
      $this->Loadmoreposts =      __( 'Load more posts', 'zmt-modular' );
      $this->Loading =      __( 'Loading...', 'zmt-modular' );

      //modAuthorLink
      $this->AuthorLink_label =  __( 'Author: ', 'zmt-modular' );

      //modCommentsCounter
      $this->CommentsCounter_label =  __( 'Number of comments: ', 'zmt-modular' );
      $this->nocomments =      __( 'no comments', 'zmt-modular' );
      $this->n_comment =       __( '%s comment', 'zmt-modular' );
      $this->n_comments =      __( '%s comments', 'zmt-modular' );

      //modCommentsList
      $this->Comments =                  __( 'Comments', 'zmt-modular' );
      $this->says =                      __( 'says', 'zmt-modular' );
      $this->s_at_s =                    __( '%1$s at %2$s', 'zmt-modular' );
      $this->Yourcommentisawaitin =      __( 'Your comment is awaiting moderation.', 'zmt-modular' );
      $this->Yourcommentisawaitin_long = __( 'Your comment is awaiting moderation. This is a preview, your comment will be visible after it has been approved.', 'zmt-modular' );

      //modCommentsList
      //modEditlink
      $this->Edit =       __( 'Edit', 'zmt-modular' );

      //modCommentsPagination
      $this->CommentsPagination_label = __( 'Comments navigation', 'zmt-modular' );
      //modPagination
      $this->Pagination_label = __( 'Posts navigation', 'zmt-modular' );

      //modCommentsPagination
      //modPagination
      $this->Previous = __( 'Previous', 'zmt-modular' );
      $this->Next =     __( 'Next', 'zmt-modular' );

      //modDate
      $this->Date_label =  __( 'Post date: ', 'zmt-modular' );

      //modErrorPage
      $this->PageNotFound =      __( '404 - Page Not Found', 'zmt-modular' );
      $this->PageNotFound_long = __( 'The page you were looking for could not be found. It might have been removed, renamed, or does not exist anymore. Start again from %s or use the searchform to find what you are looking for.', 'zmt-modular' );
      $this->Home = __( 'home', 'zmt-modular' );

      //modLinkPages
      $this->LinkPages_label =  __( 'Post navigation: ', 'zmt-modular' );
      $this->ContinueReading =  __( 'Continue Reading: ', 'zmt-modular' );
      $this->Previouspage =     __( 'Previous page', 'zmt-modular' );
      $this->Nextpage =         __( 'Next page', 'zmt-modular' );

      //modLastNextArticleLink
      $this->LastNextArticleLink_label =      __( 'Posts navigation', 'zmt-modular' );

      //modMenu
      $this->Menu_default_label = __( 'Main Menu', 'zmt-modular' );

      //modSearch
      $this->Search_label =      __( 'Search', 'zmt-modular' );
      $this->Search_label_close =      __( 'Close search form', 'zmt-modular' );

      //modNavToggle
      $this->NavToggle_label =      __( 'Open Menu', 'zmt-modular' );

      //modOffcanvasContainer
      $this->OffcanvasContainer_label_close =      __( 'Close Menu', 'zmt-modular' );

      //configReadMore
      $this->ReadMore =    __( 'Read More', 'zmt-modular' );

      //modArchiveTitle
      $this->Blog =               __( 'Blog', 'zmt-modular' );
      $this->SearchResultsfor_n = __( 'Search Results for "%s"', 'zmt-modular' );


    }

}
