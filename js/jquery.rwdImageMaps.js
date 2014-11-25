


<!DOCTYPE html>
<html>
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# githubog: http://ogp.me/ns/fb/githubog#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>jQuery-rwdImageMaps/jquery.rwdImageMaps.js at master · stowball/jQuery-rwdImageMaps · GitHub</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub" />
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png" />
    <link rel="logo" type="image/svg" href="https://github-media-downloads.s3.amazonaws.com/github-logo.svg" />
    <meta property="og:image" content="https://github.global.ssl.fastly.net/images/modules/logos_page/Octocat.png">
    <meta name="hostname" content="github-fe109-cp1-prd.iad.github.net">
    <meta name="ruby" content="ruby 1.9.3p194-tcs-github-tcmalloc (2012-05-25, TCS patched 2012-05-27, GitHub v1.0.36) [x86_64-linux]">
    <link rel="assets" href="https://github.global.ssl.fastly.net/">
    <link rel="conduit-xhr" href="https://ghconduit.com:25035/">
    <link rel="xhr-socket" href="/_sockets" />
    


    <meta name="msapplication-TileImage" content="/windows-tile.png" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="selected-link" value="repo_source" data-pjax-transient />
    <meta content="collector.githubapp.com" name="octolytics-host" /><meta content="github" name="octolytics-app-id" /><meta content="6EAFE89E:3B8F:183DEB52:525F424C" name="octolytics-dimension-request_id" />
    

    
    
    <link rel="icon" type="image/x-icon" href="/favicon.ico" />

    <meta content="authenticity_token" name="csrf-param" />
<meta content="5iZosSv0MICE5OCUQ+V5uceumFG1V/FERuGJKSc/pWU=" name="csrf-token" />

    <link href="https://github.global.ssl.fastly.net/assets/github-e9b0f1f75d080a74dd281912ef4cbb3aa51e6957.css" media="all" rel="stylesheet" type="text/css" />
    <link href="https://github.global.ssl.fastly.net/assets/github2-ebc981e499faa002b029a97084129b1c987eea09.css" media="all" rel="stylesheet" type="text/css" />
    

    

      <script src="https://github.global.ssl.fastly.net/assets/frameworks-8a61e23841d9e5ecc084748ec552e548cd05c977.js" type="text/javascript"></script>
      <script src="https://github.global.ssl.fastly.net/assets/github-f9213889d8ad7b2bef010721f415be3e61f7f69c.js" type="text/javascript"></script>
      
      <meta http-equiv="x-pjax-version" content="a1d58ef68c2c6ea914598db49afcdd94">

        <link data-pjax-transient rel='permalink' href='/stowball/jQuery-rwdImageMaps/blob/7549e352d4b1f5def007b7daf807e114f2be645b/jquery.rwdImageMaps.js'>
  <meta property="og:title" content="jQuery-rwdImageMaps"/>
  <meta property="og:type" content="githubog:gitrepository"/>
  <meta property="og:url" content="https://github.com/stowball/jQuery-rwdImageMaps"/>
  <meta property="og:image" content="https://github.global.ssl.fastly.net/images/gravatars/gravatar-user-420.png"/>
  <meta property="og:site_name" content="GitHub"/>
  <meta property="og:description" content="jQuery-rwdImageMaps - Responsive Image Maps jQuery Plugin"/>

  <meta name="description" content="jQuery-rwdImageMaps - Responsive Image Maps jQuery Plugin" />

  <meta content="853552" name="octolytics-dimension-user_id" /><meta content="stowball" name="octolytics-dimension-user_login" /><meta content="4030134" name="octolytics-dimension-repository_id" /><meta content="stowball/jQuery-rwdImageMaps" name="octolytics-dimension-repository_nwo" /><meta content="true" name="octolytics-dimension-repository_public" /><meta content="false" name="octolytics-dimension-repository_is_fork" /><meta content="4030134" name="octolytics-dimension-repository_network_root_id" /><meta content="stowball/jQuery-rwdImageMaps" name="octolytics-dimension-repository_network_root_nwo" />
  <link href="https://github.com/stowball/jQuery-rwdImageMaps/commits/master.atom" rel="alternate" title="Recent Commits to jQuery-rwdImageMaps:master" type="application/atom+xml" />

  </head>


  <body class="logged_out  env-production windows vis-public  page-blob">
    <div class="wrapper">
      
      
      


      
      <div class="header header-logged-out">
  <div class="container clearfix">

    <a class="header-logo-wordmark" href="https://github.com/">
      <span class="mega-octicon octicon-logo-github"></span>
    </a>

    <div class="header-actions">
        <a class="button primary" href="/signup">Sign up</a>
      <a class="button signin" href="/login?return_to=%2Fstowball%2FjQuery-rwdImageMaps%2Fblob%2Fmaster%2Fjquery.rwdImageMaps.js">Sign in</a>
    </div>

    <div class="command-bar js-command-bar  in-repository">

      <ul class="top-nav">
          <li class="explore"><a href="/explore">Explore</a></li>
        <li class="features"><a href="/features">Features</a></li>
          <li class="enterprise"><a href="https://enterprise.github.com/">Enterprise</a></li>
          <li class="blog"><a href="/blog">Blog</a></li>
      </ul>
        <form accept-charset="UTF-8" action="/search" class="command-bar-form" id="top_search_form" method="get">

<input type="text" data-hotkey="/ s" name="q" id="js-command-bar-field" placeholder="Search or type a command" tabindex="1" autocapitalize="off"
    
    
      data-repo="stowball/jQuery-rwdImageMaps"
      data-branch="master"
      data-sha="1bba070fb179ff82ef405b745992410205ba9d98"
  >

    <input type="hidden" name="nwo" value="stowball/jQuery-rwdImageMaps" />

    <div class="select-menu js-menu-container js-select-menu search-context-select-menu">
      <span class="minibutton select-menu-button js-menu-target">
        <span class="js-select-button">This repository</span>
      </span>

      <div class="select-menu-modal-holder js-menu-content js-navigation-container">
        <div class="select-menu-modal">

          <div class="select-menu-item js-navigation-item js-this-repository-navigation-item selected">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" class="js-search-this-repository" name="search_target" value="repository" checked="checked" />
            <div class="select-menu-item-text js-select-button-text">This repository</div>
          </div> <!-- /.select-menu-item -->

          <div class="select-menu-item js-navigation-item js-all-repositories-navigation-item">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" name="search_target" value="global" />
            <div class="select-menu-item-text js-select-button-text">All repositories</div>
          </div> <!-- /.select-menu-item -->

        </div>
      </div>
    </div>

  <span class="octicon help tooltipped downwards" title="Show command bar help">
    <span class="octicon octicon-question"></span>
  </span>


  <input type="hidden" name="ref" value="cmdform">

</form>
    </div>

  </div>
</div>


      


          <div class="site" itemscope itemtype="http://schema.org/WebPage">
    
    <div class="pagehead repohead instapaper_ignore readability-menu">
      <div class="container">
        

<ul class="pagehead-actions">


  <li>
  <a href="/login?return_to=%2Fstowball%2FjQuery-rwdImageMaps"
  class="minibutton with-count js-toggler-target star-button entice tooltipped upwards"
  title="You must be signed in to use this feature" rel="nofollow">
  <span class="octicon octicon-star"></span>Star
</a>
<a class="social-count js-social-count" href="/stowball/jQuery-rwdImageMaps/stargazers">
  280
</a>

  </li>

    <li>
      <a href="/login?return_to=%2Fstowball%2FjQuery-rwdImageMaps"
        class="minibutton with-count js-toggler-target fork-button entice tooltipped upwards"
        title="You must be signed in to fork a repository" rel="nofollow">
        <span class="octicon octicon-git-branch"></span>Fork
      </a>
      <a href="/stowball/jQuery-rwdImageMaps/network" class="social-count">
        98
      </a>
    </li>
</ul>

        <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public">
          <span class="repo-label"><span>public</span></span>
          <span class="mega-octicon octicon-repo"></span>
          <span class="author">
            <a href="/stowball" class="url fn" itemprop="url" rel="author"><span itemprop="title">stowball</span></a>
          </span>
          <span class="repohead-name-divider">/</span>
          <strong><a href="/stowball/jQuery-rwdImageMaps" class="js-current-repository js-repo-home-link">jQuery-rwdImageMaps</a></strong>

          <span class="page-context-loader">
            <img alt="Octocat-spinner-32" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
          </span>

        </h1>
      </div><!-- /.container -->
    </div><!-- /.repohead -->

    <div class="container">

      <div class="repository-with-sidebar repo-container ">

        <div class="repository-sidebar">
            

<div class="repo-nav repo-nav-full js-repository-container-pjax js-octicon-loaders">
  <div class="repo-nav-contents">
    <ul class="repo-menu">
      <li class="tooltipped leftwards" title="Code">
        <a href="/stowball/jQuery-rwdImageMaps" aria-label="Code" class="js-selected-navigation-item selected" data-gotokey="c" data-pjax="true" data-selected-links="repo_source repo_downloads repo_commits repo_tags repo_branches /stowball/jQuery-rwdImageMaps">
          <span class="octicon octicon-code"></span> <span class="full-word">Code</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

        <li class="tooltipped leftwards" title="Issues">
          <a href="/stowball/jQuery-rwdImageMaps/issues" aria-label="Issues" class="js-selected-navigation-item js-disable-pjax" data-gotokey="i" data-selected-links="repo_issues /stowball/jQuery-rwdImageMaps/issues">
            <span class="octicon octicon-issue-opened"></span> <span class="full-word">Issues</span>
            <span class='counter'>4</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>        </li>

      <li class="tooltipped leftwards" title="Pull Requests"><a href="/stowball/jQuery-rwdImageMaps/pulls" aria-label="Pull Requests" class="js-selected-navigation-item js-disable-pjax" data-gotokey="p" data-selected-links="repo_pulls /stowball/jQuery-rwdImageMaps/pulls">
            <span class="octicon octicon-git-pull-request"></span> <span class="full-word">Pull Requests</span>
            <span class='counter'>1</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>


    </ul>
    <div class="repo-menu-separator"></div>
    <ul class="repo-menu">

      <li class="tooltipped leftwards" title="Pulse">
        <a href="/stowball/jQuery-rwdImageMaps/pulse" aria-label="Pulse" class="js-selected-navigation-item " data-pjax="true" data-selected-links="pulse /stowball/jQuery-rwdImageMaps/pulse">
          <span class="octicon octicon-pulse"></span> <span class="full-word">Pulse</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped leftwards" title="Graphs">
        <a href="/stowball/jQuery-rwdImageMaps/graphs" aria-label="Graphs" class="js-selected-navigation-item " data-pjax="true" data-selected-links="repo_graphs repo_contributors /stowball/jQuery-rwdImageMaps/graphs">
          <span class="octicon octicon-graph"></span> <span class="full-word">Graphs</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped leftwards" title="Network">
        <a href="/stowball/jQuery-rwdImageMaps/network" aria-label="Network" class="js-selected-navigation-item js-disable-pjax" data-selected-links="repo_network /stowball/jQuery-rwdImageMaps/network">
          <span class="octicon octicon-git-branch"></span> <span class="full-word">Network</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>
    </ul>


  </div>
</div>

            <div class="only-with-full-nav">
              

  

<div class="clone-url open"
  data-protocol-type="http"
  data-url="/users/set_protocol?protocol_selector=http&amp;protocol_type=clone">
  <h3><strong>HTTPS</strong> clone URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="https://github.com/stowball/jQuery-rwdImageMaps.git" readonly="readonly">

    <span class="js-zeroclipboard url-box-clippy minibutton zeroclipboard-button" data-clipboard-text="https://github.com/stowball/jQuery-rwdImageMaps.git" data-copied-hint="copied!" title="copy to clipboard"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>

  

<div class="clone-url "
  data-protocol-type="subversion"
  data-url="/users/set_protocol?protocol_selector=subversion&amp;protocol_type=clone">
  <h3><strong>Subversion</strong> checkout URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="https://github.com/stowball/jQuery-rwdImageMaps" readonly="readonly">

    <span class="js-zeroclipboard url-box-clippy minibutton zeroclipboard-button" data-clipboard-text="https://github.com/stowball/jQuery-rwdImageMaps" data-copied-hint="copied!" title="copy to clipboard"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>


<p class="clone-options">You can clone with
      <a href="#" class="js-clone-selector" data-protocol="http">HTTPS</a>,
      or <a href="#" class="js-clone-selector" data-protocol="subversion">Subversion</a>.
  <span class="octicon help tooltipped upwards" title="Get help on which URL is right for you.">
    <a href="https://help.github.com/articles/which-remote-url-should-i-use">
    <span class="octicon octicon-question"></span>
    </a>
  </span>
</p>


  <a href="http://windows.github.com" class="minibutton sidebar-button">
    <span class="octicon octicon-device-desktop"></span>
    Clone in Desktop
  </a>

              <a href="/stowball/jQuery-rwdImageMaps/archive/master.zip"
                 class="minibutton sidebar-button"
                 title="Download this repository as a zip file"
                 rel="nofollow">
                <span class="octicon octicon-cloud-download"></span>
                Download ZIP
              </a>
            </div>
        </div><!-- /.repository-sidebar -->

        <div id="js-repo-pjax-container" class="repository-content context-loader-container" data-pjax-container>
          


<!-- blob contrib key: blob_contributors:v21:4ea4cda417207d3df35868b8a66285e8 -->

<p title="This is a placeholder element" class="js-history-link-replace hidden"></p>

<a href="/stowball/jQuery-rwdImageMaps/find/master" data-pjax data-hotkey="t" class="js-show-file-finder" style="display:none">Show File Finder</a>

<div class="file-navigation">
  
  

<div class="select-menu js-menu-container js-select-menu" >
  <span class="minibutton select-menu-button js-menu-target" data-hotkey="w"
    data-master-branch="master"
    data-ref="master"
    role="button" aria-label="Switch branches or tags" tabindex="0">
    <span class="octicon octicon-git-branch"></span>
    <i>branch:</i>
    <span class="js-select-button">master</span>
  </span>

  <div class="select-menu-modal-holder js-menu-content js-navigation-container" data-pjax>

    <div class="select-menu-modal">
      <div class="select-menu-header">
        <span class="select-menu-title">Switch branches/tags</span>
        <span class="octicon octicon-remove-close js-menu-close"></span>
      </div> <!-- /.select-menu-header -->

      <div class="select-menu-filters">
        <div class="select-menu-text-filter">
          <input type="text" aria-label="Filter branches/tags" id="context-commitish-filter-field" class="js-filterable-field js-navigation-enable" placeholder="Filter branches/tags">
        </div>
        <div class="select-menu-tabs">
          <ul>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="branches" class="js-select-menu-tab">Branches</a>
            </li>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="tags" class="js-select-menu-tab">Tags</a>
            </li>
          </ul>
        </div><!-- /.select-menu-tabs -->
      </div><!-- /.select-menu-filters -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="branches">

        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item selected">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/stowball/jQuery-rwdImageMaps/blob/master/jquery.rwdImageMaps.js"
                 data-name="master"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="master">master</a>
            </div> <!-- /.select-menu-item -->
        </div>

          <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">
        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


        </div>

        <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

    </div> <!-- /.select-menu-modal -->
  </div> <!-- /.select-menu-modal-holder -->
</div> <!-- /.select-menu -->

  <div class="breadcrumb">
    <span class='repo-root js-repo-root'><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/stowball/jQuery-rwdImageMaps" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">jQuery-rwdImageMaps</span></a></span></span><span class="separator"> / </span><strong class="final-path">jquery.rwdImageMaps.js</strong> <span class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="jquery.rwdImageMaps.js" data-copied-hint="copied!" title="copy to clipboard"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>



  <div class="commit file-history-tease">
    <img class="main-avatar" height="24" src="https://1.gravatar.com/avatar/c4f3a04a13a69b7f7a9e52ca116724a3?d=https%3A%2F%2Fidenticons.github.com%2Fd7b29c29cd5922c4278d739319caf0e2.png&amp;s=140" width="24" />
    <span class="author"><a href="/stowball" rel="author">stowball</a></span>
    <time class="js-relative-date" datetime="2013-08-05T15:56:05-07:00" title="2013-08-05 15:56:05">August 05, 2013</time>
    <div class="commit-title">
        <a href="/stowball/jQuery-rwdImageMaps/commit/7dcf4d7e82935d1a4ed0da9eec345cff25e9dfac" class="message" data-pjax="true" title="Dropped support for jQuery &lt; 1.6. Caused issues since 1.10 &amp; 2.0. Thanks...

... @tobaiasjl">Dropped support for jQuery &lt; 1.6. Caused issues since 1.10 &amp; 2.0. Tha…</a>
    </div>

    <div class="participation">
      <p class="quickstat"><a href="#blob_contributors_box" rel="facebox"><strong>2</strong> contributors</a></p>
          <a class="avatar tooltipped downwards" title="stowball" href="/stowball/jQuery-rwdImageMaps/commits/master/jquery.rwdImageMaps.js?author=stowball"><img height="20" src="https://1.gravatar.com/avatar/c4f3a04a13a69b7f7a9e52ca116724a3?d=https%3A%2F%2Fidenticons.github.com%2Fd7b29c29cd5922c4278d739319caf0e2.png&amp;s=140" width="20" /></a>
    <a class="avatar tooltipped downwards" title="mathiasbynens" href="/stowball/jQuery-rwdImageMaps/commits/master/jquery.rwdImageMaps.js?author=mathiasbynens"><img height="20" src="https://1.gravatar.com/avatar/24e08a9ea84deb17ae121074d0f17125?d=https%3A%2F%2Fidenticons.github.com%2F40b157a07054152a85010ad58a585833.png&amp;s=140" width="20" /></a>


    </div>
    <div id="blob_contributors_box" style="display:none">
      <h2 class="facebox-header">Users who have contributed to this file</h2>
      <ul class="facebox-user-list">
        <li class="facebox-user-list-item">
          <img height="24" src="https://1.gravatar.com/avatar/c4f3a04a13a69b7f7a9e52ca116724a3?d=https%3A%2F%2Fidenticons.github.com%2Fd7b29c29cd5922c4278d739319caf0e2.png&amp;s=140" width="24" />
          <a href="/stowball">stowball</a>
        </li>
        <li class="facebox-user-list-item">
          <img height="24" src="https://1.gravatar.com/avatar/24e08a9ea84deb17ae121074d0f17125?d=https%3A%2F%2Fidenticons.github.com%2F40b157a07054152a85010ad58a585833.png&amp;s=140" width="24" />
          <a href="/mathiasbynens">mathiasbynens</a>
        </li>
      </ul>
    </div>
  </div>

<div id="files" class="bubble">
  <div class="file">
    <div class="meta">
      <div class="info">
        <span class="icon"><b class="octicon octicon-file-text"></b></span>
        <span class="mode" title="File Mode">file</span>
          <span>67 lines (58 sloc)</span>
        <span>1.926 kb</span>
      </div>
      <div class="actions">
        <div class="button-group">
            <a class="minibutton tooltipped leftwards"
               href="http://windows.github.com" title="Open this file in GitHub for Windows">
                <span class="octicon octicon-device-desktop"></span> Open
            </a>
              <a class="minibutton disabled js-entice" href=""
                 data-entice="You must be signed in to make or propose changes">Edit</a>
          <a href="/stowball/jQuery-rwdImageMaps/raw/master/jquery.rwdImageMaps.js" class="button minibutton " id="raw-url">Raw</a>
            <a href="/stowball/jQuery-rwdImageMaps/blame/master/jquery.rwdImageMaps.js" class="button minibutton ">Blame</a>
          <a href="/stowball/jQuery-rwdImageMaps/commits/master/jquery.rwdImageMaps.js" class="button minibutton " rel="nofollow">History</a>
        </div><!-- /.button-group -->
          <a class="minibutton danger empty-icon js-entice" href=""
             data-entice="You must be signed in and on a branch to make or propose changes">
          Delete
        </a>
      </div><!-- /.actions -->

    </div>
        <div class="blob-wrapper data type-javascript js-blob-data">
        <table class="file-code file-diff">
          <tr class="file-code-line">
            <td class="blob-line-nums">
              <span id="L1" rel="#L1">1</span>
<span id="L2" rel="#L2">2</span>
<span id="L3" rel="#L3">3</span>
<span id="L4" rel="#L4">4</span>
<span id="L5" rel="#L5">5</span>
<span id="L6" rel="#L6">6</span>
<span id="L7" rel="#L7">7</span>
<span id="L8" rel="#L8">8</span>
<span id="L9" rel="#L9">9</span>
<span id="L10" rel="#L10">10</span>
<span id="L11" rel="#L11">11</span>
<span id="L12" rel="#L12">12</span>
<span id="L13" rel="#L13">13</span>
<span id="L14" rel="#L14">14</span>
<span id="L15" rel="#L15">15</span>
<span id="L16" rel="#L16">16</span>
<span id="L17" rel="#L17">17</span>
<span id="L18" rel="#L18">18</span>
<span id="L19" rel="#L19">19</span>
<span id="L20" rel="#L20">20</span>
<span id="L21" rel="#L21">21</span>
<span id="L22" rel="#L22">22</span>
<span id="L23" rel="#L23">23</span>
<span id="L24" rel="#L24">24</span>
<span id="L25" rel="#L25">25</span>
<span id="L26" rel="#L26">26</span>
<span id="L27" rel="#L27">27</span>
<span id="L28" rel="#L28">28</span>
<span id="L29" rel="#L29">29</span>
<span id="L30" rel="#L30">30</span>
<span id="L31" rel="#L31">31</span>
<span id="L32" rel="#L32">32</span>
<span id="L33" rel="#L33">33</span>
<span id="L34" rel="#L34">34</span>
<span id="L35" rel="#L35">35</span>
<span id="L36" rel="#L36">36</span>
<span id="L37" rel="#L37">37</span>
<span id="L38" rel="#L38">38</span>
<span id="L39" rel="#L39">39</span>
<span id="L40" rel="#L40">40</span>
<span id="L41" rel="#L41">41</span>
<span id="L42" rel="#L42">42</span>
<span id="L43" rel="#L43">43</span>
<span id="L44" rel="#L44">44</span>
<span id="L45" rel="#L45">45</span>
<span id="L46" rel="#L46">46</span>
<span id="L47" rel="#L47">47</span>
<span id="L48" rel="#L48">48</span>
<span id="L49" rel="#L49">49</span>
<span id="L50" rel="#L50">50</span>
<span id="L51" rel="#L51">51</span>
<span id="L52" rel="#L52">52</span>
<span id="L53" rel="#L53">53</span>
<span id="L54" rel="#L54">54</span>
<span id="L55" rel="#L55">55</span>
<span id="L56" rel="#L56">56</span>
<span id="L57" rel="#L57">57</span>
<span id="L58" rel="#L58">58</span>
<span id="L59" rel="#L59">59</span>
<span id="L60" rel="#L60">60</span>
<span id="L61" rel="#L61">61</span>
<span id="L62" rel="#L62">62</span>
<span id="L63" rel="#L63">63</span>
<span id="L64" rel="#L64">64</span>
<span id="L65" rel="#L65">65</span>
<span id="L66" rel="#L66">66</span>
<span id="L67" rel="#L67">67</span>

            </td>
            <td class="blob-line-code">
                    <div class="highlight"><pre><div class='line' id='LC1'><span class="cm">/*</span></div><div class='line' id='LC2'><span class="cm">* rwdImageMaps jQuery plugin v1.5</span></div><div class='line' id='LC3'><span class="cm">*</span></div><div class='line' id='LC4'><span class="cm">* Allows image maps to be used in a responsive design by recalculating the area coordinates to match the actual image size on load and window.resize</span></div><div class='line' id='LC5'><span class="cm">*</span></div><div class='line' id='LC6'><span class="cm">* Copyright (c) 2013 Matt Stow</span></div><div class='line' id='LC7'><span class="cm">* https://github.com/stowball/jQuery-rwdImageMaps</span></div><div class='line' id='LC8'><span class="cm">* http://mattstow.com</span></div><div class='line' id='LC9'><span class="cm">* Licensed under the MIT license</span></div><div class='line' id='LC10'><span class="cm">*/</span></div><div class='line' id='LC11'><span class="p">;(</span><span class="kd">function</span><span class="p">(</span><span class="nx">$</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC12'>	<span class="nx">$</span><span class="p">.</span><span class="nx">fn</span><span class="p">.</span><span class="nx">rwdImageMaps</span> <span class="o">=</span> <span class="kd">function</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC13'>		<span class="kd">var</span> <span class="nx">$img</span> <span class="o">=</span> <span class="k">this</span><span class="p">;</span></div><div class='line' id='LC14'><br/></div><div class='line' id='LC15'>		<span class="kd">var</span> <span class="nx">rwdImageMap</span> <span class="o">=</span> <span class="kd">function</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC16'>			<span class="nx">$img</span><span class="p">.</span><span class="nx">each</span><span class="p">(</span><span class="kd">function</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC17'>				<span class="k">if</span> <span class="p">(</span><span class="k">typeof</span><span class="p">(</span><span class="nx">$</span><span class="p">(</span><span class="k">this</span><span class="p">).</span><span class="nx">attr</span><span class="p">(</span><span class="s1">&#39;usemap&#39;</span><span class="p">))</span> <span class="o">==</span> <span class="s1">&#39;undefined&#39;</span><span class="p">)</span></div><div class='line' id='LC18'>					<span class="k">return</span><span class="p">;</span></div><div class='line' id='LC19'><br/></div><div class='line' id='LC20'>				<span class="kd">var</span> <span class="nx">that</span> <span class="o">=</span> <span class="k">this</span><span class="p">,</span></div><div class='line' id='LC21'>					<span class="nx">$that</span> <span class="o">=</span> <span class="nx">$</span><span class="p">(</span><span class="nx">that</span><span class="p">);</span></div><div class='line' id='LC22'><br/></div><div class='line' id='LC23'>				<span class="c1">// Since WebKit doesn&#39;t know the height until after the image has loaded, perform everything in an onload copy</span></div><div class='line' id='LC24'>				<span class="nx">$</span><span class="p">(</span><span class="s1">&#39;&lt;img /&gt;&#39;</span><span class="p">).</span><span class="nx">load</span><span class="p">(</span><span class="kd">function</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC25'>					<span class="kd">var</span> <span class="nx">attrW</span> <span class="o">=</span> <span class="s1">&#39;width&#39;</span><span class="p">,</span></div><div class='line' id='LC26'>						<span class="nx">attrH</span> <span class="o">=</span> <span class="s1">&#39;height&#39;</span><span class="p">,</span></div><div class='line' id='LC27'>						<span class="nx">w</span> <span class="o">=</span> <span class="nx">$that</span><span class="p">.</span><span class="nx">attr</span><span class="p">(</span><span class="nx">attrW</span><span class="p">),</span></div><div class='line' id='LC28'>						<span class="nx">h</span> <span class="o">=</span> <span class="nx">$that</span><span class="p">.</span><span class="nx">attr</span><span class="p">(</span><span class="nx">attrH</span><span class="p">);</span></div><div class='line' id='LC29'><br/></div><div class='line' id='LC30'>					<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nx">w</span> <span class="o">||</span> <span class="o">!</span><span class="nx">h</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC31'>						<span class="kd">var</span> <span class="nx">temp</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">Image</span><span class="p">();</span></div><div class='line' id='LC32'>						<span class="nx">temp</span><span class="p">.</span><span class="nx">src</span> <span class="o">=</span> <span class="nx">$that</span><span class="p">.</span><span class="nx">attr</span><span class="p">(</span><span class="s1">&#39;src&#39;</span><span class="p">);</span></div><div class='line' id='LC33'>						<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nx">w</span><span class="p">)</span></div><div class='line' id='LC34'>							<span class="nx">w</span> <span class="o">=</span> <span class="nx">temp</span><span class="p">.</span><span class="nx">width</span><span class="p">;</span></div><div class='line' id='LC35'>						<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nx">h</span><span class="p">)</span></div><div class='line' id='LC36'>							<span class="nx">h</span> <span class="o">=</span> <span class="nx">temp</span><span class="p">.</span><span class="nx">height</span><span class="p">;</span></div><div class='line' id='LC37'>					<span class="p">}</span></div><div class='line' id='LC38'><br/></div><div class='line' id='LC39'>					<span class="kd">var</span> <span class="nx">wPercent</span> <span class="o">=</span> <span class="nx">$that</span><span class="p">.</span><span class="nx">width</span><span class="p">()</span><span class="o">/</span><span class="mi">100</span><span class="p">,</span></div><div class='line' id='LC40'>						<span class="nx">hPercent</span> <span class="o">=</span> <span class="nx">$that</span><span class="p">.</span><span class="nx">height</span><span class="p">()</span><span class="o">/</span><span class="mi">100</span><span class="p">,</span></div><div class='line' id='LC41'>						<span class="nx">map</span> <span class="o">=</span> <span class="nx">$that</span><span class="p">.</span><span class="nx">attr</span><span class="p">(</span><span class="s1">&#39;usemap&#39;</span><span class="p">).</span><span class="nx">replace</span><span class="p">(</span><span class="s1">&#39;#&#39;</span><span class="p">,</span> <span class="s1">&#39;&#39;</span><span class="p">),</span></div><div class='line' id='LC42'>						<span class="nx">c</span> <span class="o">=</span> <span class="s1">&#39;coords&#39;</span><span class="p">;</span></div><div class='line' id='LC43'><br/></div><div class='line' id='LC44'>					<span class="nx">$</span><span class="p">(</span><span class="s1">&#39;map[name=&quot;&#39;</span> <span class="o">+</span> <span class="nx">map</span> <span class="o">+</span> <span class="s1">&#39;&quot;]&#39;</span><span class="p">).</span><span class="nx">find</span><span class="p">(</span><span class="s1">&#39;area&#39;</span><span class="p">).</span><span class="nx">each</span><span class="p">(</span><span class="kd">function</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC45'>						<span class="kd">var</span> <span class="nx">$this</span> <span class="o">=</span> <span class="nx">$</span><span class="p">(</span><span class="k">this</span><span class="p">);</span></div><div class='line' id='LC46'>						<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nx">$this</span><span class="p">.</span><span class="nx">data</span><span class="p">(</span><span class="nx">c</span><span class="p">))</span></div><div class='line' id='LC47'>							<span class="nx">$this</span><span class="p">.</span><span class="nx">data</span><span class="p">(</span><span class="nx">c</span><span class="p">,</span> <span class="nx">$this</span><span class="p">.</span><span class="nx">attr</span><span class="p">(</span><span class="nx">c</span><span class="p">));</span></div><div class='line' id='LC48'><br/></div><div class='line' id='LC49'>						<span class="kd">var</span> <span class="nx">coords</span> <span class="o">=</span> <span class="nx">$this</span><span class="p">.</span><span class="nx">data</span><span class="p">(</span><span class="nx">c</span><span class="p">).</span><span class="nx">split</span><span class="p">(</span><span class="s1">&#39;,&#39;</span><span class="p">),</span></div><div class='line' id='LC50'>							<span class="nx">coordsPercent</span> <span class="o">=</span> <span class="k">new</span> <span class="nb">Array</span><span class="p">(</span><span class="nx">coords</span><span class="p">.</span><span class="nx">length</span><span class="p">);</span></div><div class='line' id='LC51'><br/></div><div class='line' id='LC52'>						<span class="k">for</span> <span class="p">(</span><span class="kd">var</span> <span class="nx">i</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span> <span class="nx">i</span> <span class="o">&lt;</span> <span class="nx">coordsPercent</span><span class="p">.</span><span class="nx">length</span><span class="p">;</span> <span class="o">++</span><span class="nx">i</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC53'>							<span class="k">if</span> <span class="p">(</span><span class="nx">i</span> <span class="o">%</span> <span class="mi">2</span> <span class="o">===</span> <span class="mi">0</span><span class="p">)</span></div><div class='line' id='LC54'>								<span class="nx">coordsPercent</span><span class="p">[</span><span class="nx">i</span><span class="p">]</span> <span class="o">=</span> <span class="nb">parseInt</span><span class="p">(((</span><span class="nx">coords</span><span class="p">[</span><span class="nx">i</span><span class="p">]</span><span class="o">/</span><span class="nx">w</span><span class="p">)</span><span class="o">*</span><span class="mi">100</span><span class="p">)</span><span class="o">*</span><span class="nx">wPercent</span><span class="p">);</span></div><div class='line' id='LC55'>							<span class="k">else</span></div><div class='line' id='LC56'>								<span class="nx">coordsPercent</span><span class="p">[</span><span class="nx">i</span><span class="p">]</span> <span class="o">=</span> <span class="nb">parseInt</span><span class="p">(((</span><span class="nx">coords</span><span class="p">[</span><span class="nx">i</span><span class="p">]</span><span class="o">/</span><span class="nx">h</span><span class="p">)</span><span class="o">*</span><span class="mi">100</span><span class="p">)</span><span class="o">*</span><span class="nx">hPercent</span><span class="p">);</span></div><div class='line' id='LC57'>						<span class="p">}</span></div><div class='line' id='LC58'>						<span class="nx">$this</span><span class="p">.</span><span class="nx">attr</span><span class="p">(</span><span class="nx">c</span><span class="p">,</span> <span class="nx">coordsPercent</span><span class="p">.</span><span class="nx">toString</span><span class="p">());</span></div><div class='line' id='LC59'>					<span class="p">});</span></div><div class='line' id='LC60'>				<span class="p">}).</span><span class="nx">attr</span><span class="p">(</span><span class="s1">&#39;src&#39;</span><span class="p">,</span> <span class="nx">$that</span><span class="p">.</span><span class="nx">attr</span><span class="p">(</span><span class="s1">&#39;src&#39;</span><span class="p">));</span></div><div class='line' id='LC61'>			<span class="p">});</span></div><div class='line' id='LC62'>		<span class="p">};</span></div><div class='line' id='LC63'>		<span class="nx">$</span><span class="p">(</span><span class="nb">window</span><span class="p">).</span><span class="nx">resize</span><span class="p">(</span><span class="nx">rwdImageMap</span><span class="p">).</span><span class="nx">trigger</span><span class="p">(</span><span class="s1">&#39;resize&#39;</span><span class="p">);</span></div><div class='line' id='LC64'><br/></div><div class='line' id='LC65'>		<span class="k">return</span> <span class="k">this</span><span class="p">;</span></div><div class='line' id='LC66'>	<span class="p">};</span></div><div class='line' id='LC67'><span class="p">})(</span><span class="nx">jQuery</span><span class="p">);</span></div></pre></div>
            </td>
          </tr>
        </table>
  </div>

  </div>
</div>

<a href="#jump-to-line" rel="facebox[.linejump]" data-hotkey="l" class="js-jump-to-line" style="display:none">Jump to Line</a>
<div id="jump-to-line" style="display:none">
  <form accept-charset="UTF-8" class="js-jump-to-line-form">
    <input class="linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;" autofocus>
    <button type="submit" class="button">Go</button>
  </form>
</div>

        </div>

      </div><!-- /.repo-container -->
      <div class="modal-backdrop"></div>
    </div><!-- /.container -->
  </div><!-- /.site -->


    </div><!-- /.wrapper -->

      <div class="container">
  <div class="site-footer">
    <ul class="site-footer-links right">
      <li><a href="https://status.github.com/">Status</a></li>
      <li><a href="http://developer.github.com">API</a></li>
      <li><a href="http://training.github.com">Training</a></li>
      <li><a href="http://shop.github.com">Shop</a></li>
      <li><a href="/blog">Blog</a></li>
      <li><a href="/about">About</a></li>

    </ul>

    <a href="/">
      <span class="mega-octicon octicon-mark-github"></span>
    </a>

    <ul class="site-footer-links">
      <li>&copy; 2013 <span title="0.04368s from github-fe109-cp1-prd.iad.github.net">GitHub</span>, Inc.</li>
        <li><a href="/site/terms">Terms</a></li>
        <li><a href="/site/privacy">Privacy</a></li>
        <li><a href="/security">Security</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
  </div><!-- /.site-footer -->
</div><!-- /.container -->


    <div class="fullscreen-overlay js-fullscreen-overlay" id="fullscreen_overlay">
  <div class="fullscreen-container js-fullscreen-container">
    <div class="textarea-wrap">
      <textarea name="fullscreen-contents" id="fullscreen-contents" class="js-fullscreen-contents" placeholder="" data-suggester="fullscreen_suggester"></textarea>
          <div class="suggester-container">
              <div class="suggester fullscreen-suggester js-navigation-container" id="fullscreen_suggester"
                 data-url="/stowball/jQuery-rwdImageMaps/suggestions/commit">
              </div>
          </div>
    </div>
  </div>
  <div class="fullscreen-sidebar">
    <a href="#" class="exit-fullscreen js-exit-fullscreen tooltipped leftwards" title="Exit Zen Mode">
      <span class="mega-octicon octicon-screen-normal"></span>
    </a>
    <a href="#" class="theme-switcher js-theme-switcher tooltipped leftwards"
      title="Switch themes">
      <span class="octicon octicon-color-mode"></span>
    </a>
  </div>
</div>



    <div id="ajax-error-message" class="flash flash-error">
      <span class="octicon octicon-alert"></span>
      <a href="#" class="octicon octicon-remove-close close ajax-error-dismiss"></a>
      Something went wrong with that request. Please try again.
    </div>

  </body>
</html>

