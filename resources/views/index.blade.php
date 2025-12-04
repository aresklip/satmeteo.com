<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="horizontal" data-nav-style="menu-hover" data-theme-mode="light" data-header-styles="transparent" data-width="boxed" data-menu-styles="transparent" data-page-style="flat" data-toggled="close"  data-vertical-style="doublemenu" data-toggled="double-menu-open">

@include('head')

<body>
<div class="progress-top-bar"></div>

@include('template-settings')

<!-- Loader -->
<div id="loader" >
    <img src="/assets/images/media/loader.svg" alt="">
</div>
<!-- Loader -->

<div class="page">

    @include('header')

    @include('app-sidebar')

    @include('pages.home')

    @include('footer')

    @include('search-modal')

</div>


<!-- Scroll To Top -->
<div class="scrollToTop">
    <span class="arrow lh-1"><i class="ti ti-arrow-big-up fs-18"></i></span>
</div>
<div id="responsive-overlay"></div>
<!-- Scroll To Top -->

@include('footer-js')

</body>

</html>
