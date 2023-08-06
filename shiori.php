---
---

$container-large-desktop: 970px;

$font-family-base: "Merriweather", "Helvetica Neue", Arial, sans-serif;
$headings-font-family: "Montserrat", "Helvetica Neue", Arial, sans-serif;
$headings-font-weight: 700;

$font-size-base: 15px;
$font-size-h1: floor(($font-size-base * 2));
$font-size-h2: floor(($font-size-base * 1.4));
$font-size-h3: floor(($font-size-base * 1));
$font-size-h4: floor(($font-size-base * 1));
$font-size-h5: floor(($font-size-base * 1));
$font-size-h6: floor(($font-size-base * 1));
$blockquote-font-size: floor(($font-size-base * 1.25));
$line-height-base: 1.8;
$headings-line-height: 1.3;

$navbar-default-bg: #fff;
$navbar-default-border: #fff;
$navbar-default-brand-color: #333;
$navbar-height: 60px;
$navbar-inverse-link-color: #fff;
$navbar-inverse-toggle-border-color: #fff;
$navbar-inverse-color: rgba(#fff, 0.75);
$navbar-inverse-toggle-hover-bg: rgba(#fff, 0.2);

$gray-dark: #555;
$gray: #888;
$btn-default-color: #555;
$gray-light: #aaa;

$brand-primary: #e07280;
$code-color: #555;
$code-bg: #f5f5f5;
$headings-color: #333;

// http://flatuicolors.com/
$dark: #3d566e;
$dark-brand-primary: #5b7fa4; // Set saturation to 50
$turquoise: #1abc9c;
$green: #2ecc71;
$blue: #3498db;
$purple: #9b59b6;
$orange: #e67e22;
$red: #e74c3c;

{% unless site.data.theme.color == "default" %}
  $theme-color: ${{ site.data.theme.color }};
  $navbar-inverse-bg: $theme-color;
  @if $theme-color == $dark {
    $brand-primary: $dark-brand-primary;
  } @else {
    $brand-primary: $theme-color;
  }
{% endunless %}

@import "custom-bootstrap-variables";
@import "bootstrap-sass/bootstrap";

$space-xs: $line-height-computed * 1;
$space-sm: $line-height-computed * 1.5;
$space-md: $line-height-computed * 2;

h2 {
  margin-top: $line-height-computed * 1.5;
  margin-bottom: $line-height-computed * 0.25;
}
h3 {
  text-transform: uppercase;
  margin-bottom: $line-height-computed * 0.25;
}

.lead {
  @media (min-width: $screen-sm-min) {
    font-size: $blockquote-font-size;
  }
}

.btn {
  font-family: $headings-font-family;
}

.section-header {
  margin-top: 0;
}
.section-header-archive {
  margin-top: 0;
}
.section-header-archive ~ .section-header-archive {
  margin-top: $space-md;
}

.post-header {
  margin-bottom: $space-xs;
}
.post-title-home {
  margin: 0;
  a {
    color: inherit;
  }
}
.post-excerpt-home {
  margin-bottom: $space-md;
}
.post-title-main {
  margin: 0;
}
.post-title-archive {
  font-family: $headings-font-family;
  font-weight: $headings-font-weight;
  margin-right: 1em;
}
.post-content {
  margin-bottom: $space-md;
}
.post-content img,
.post-excerpt-home img,
.post-nav img {
  @extend .img-responsive;
}
.post-footer {
  border-top: 1px solid $gray-lighter;
  padding-top: $space-sm;
  margin-bottom: $space-md;
}
.post-navs {
  margin-bottom: $space-md;
}
.post-nav {
  margin-bottom: $space-sm;
}
.post-title-link {
  margin-top: 0;
}

.navbar-brand {
  font-weight: $headings-font-weight;
}
.navbar {
  font-family: $headings-font-family;
}
.navbar-static-top {
  margin-bottom: $space-md;
}

.page-archive {
  margin-bottom: $space-md;
}

.footer {
  margin: $space-sm 0 $space-sm;
  font-size: $font-size-small;
  color: $gray-light;
}

.home-read-more {
  margin-bottom: 40px;
}

.gist {
  table {
    border: none !important;
    width: auto !important;
  }
  td {
    border-left: none !important;
    border-top: none !important;
    border-bottom: none !important;
    &.line-data {
      border-right: none !important;
      line-height: 1.4 !important;
    }
  }
}

@media(max-width: $screen-xs-max) {
  .navbar-header {
    text-align: center;
  }
  .navbar-brand {
    display: inline-block;
    float: none;
  }
  .navbar-toggle-wrapper {
    position: absolute;
    left: $navbar-padding-horizontal;
    height: ($navbar-height + 34px) / 2;
  }
}

@import "custom-scss";
