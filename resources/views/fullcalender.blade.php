    <x-header  title={{$page_name}}/>
    <x-sidebar/>

    <style type="text/css">
        /*!
 * FullCalendar v3.9.0
 * Docs & License: https://fullcalendar.io/
 * (c) 2018 Adam Shaw
 */.fc button,
.fc table,
body .fc {
 font-size:1em
}
.fc-bg,
.fc-row .fc-bgevent-skeleton,
.fc-row .fc-highlight-skeleton {
 bottom:0
}
.fc-icon,
.fc-unselectable {
 -webkit-touch-callout:none;
 -khtml-user-select:none
}
.fc {
 direction:ltr;
 text-align:left
}
.fc-rtl {
 text-align:right
}
.fc th,
.fc-basic-view td.fc-week-number,
.fc-icon,
.fc-toolbar {
 text-align:center
}
.fc-highlight {
 background:#bce8f1;
 opacity:.3
}
.fc-bgevent {
 background:#8fdf82;
 opacity:.3
}
.fc-nonbusiness {
 background:#d7d7d7
}
.fc button {
 -moz-box-sizing:border-box;
 -webkit-box-sizing:border-box;
 box-sizing:border-box;
 margin:0;
 height:2.1em;
 padding:0 .6em;
 white-space:nowrap;
 cursor:pointer
}
.fc button::-moz-focus-inner {
 margin:0;
 padding:0
}
.fc-state-default {
 border:1px solid;
 background-color:#f5f5f5;
 background-image:-moz-linear-gradient(top,#fff,#e6e6e6);
 background-image:-webkit-gradient(linear,0 0,0 100%,from(#fff),to(#e6e6e6));
 background-image:-webkit-linear-gradient(top,#fff,#e6e6e6);
 background-image:-o-linear-gradient(top,#fff,#e6e6e6);
 background-image:linear-gradient(to bottom,#fff,#e6e6e6);
 background-repeat:repeat-x;
 border-color:#e6e6e6 #e6e6e6 #bfbfbf;
 border-color:rgba(0,0,0,.1) rgba(0,0,0,.1) rgba(0,0,0,.25);
 color:#333;
 text-shadow:0 1px 1px rgba(255,255,255,.75);
 box-shadow:inset 0 1px 0 rgba(255,255,255,.2),0 1px 2px rgba(0,0,0,.05)
}
.fc-state-default.fc-corner-left {
 border-top-left-radius:4px;
 border-bottom-left-radius:4px
}
.fc-state-default.fc-corner-right {
 border-top-right-radius:4px;
 border-bottom-right-radius:4px
}
.fc button .fc-icon {
 position:relative;
 top:-.05em;
 margin:0 .2em;
 vertical-align:middle
}
.fc-state-active,
.fc-state-disabled,
.fc-state-down,
.fc-state-hover {
 color:#333;
 background-color:#e6e6e6
}
.fc-state-hover {
 color:#333;
 text-decoration:none;
 background-position:0 -15px;
 -webkit-transition:background-position .1s linear;
 -moz-transition:background-position .1s linear;
 -o-transition:background-position .1s linear;
 transition:background-position .1s linear
}
.fc-state-active,
.fc-state-down {
 background-color:#ccc;
 background-image:none;
 box-shadow:inset 0 2px 4px rgba(0,0,0,.15),0 1px 2px rgba(0,0,0,.05)
}
.fc-state-disabled {
 cursor:default;
 background-image:none;
 opacity:.65;
 box-shadow:none
}
.fc-event.fc-draggable,
.fc-event[href],
.fc-popover .fc-header .fc-close,
a[data-goto] {
 cursor:pointer
}
.fc-button-group {
 display:inline-block
}
.fc .fc-button-group>* {
 float:left;
 margin:0 0 0 -1px
}
.fc .fc-button-group>:first-child {
 margin-left:0
}
.fc-popover {
 position:absolute;
 box-shadow:0 2px 6px rgba(0,0,0,.15)
}
.fc-popover .fc-header {
 padding:2px 4px
}
.fc-popover .fc-header .fc-title {
 margin:0 2px
}
.fc-ltr .fc-popover .fc-header .fc-title,
.fc-rtl .fc-popover .fc-header .fc-close {
 float:left
}
.fc-ltr .fc-popover .fc-header .fc-close,
.fc-rtl .fc-popover .fc-header .fc-title {
 float:right
}
.fc-divider {
 border-style:solid;
 border-width:1px
}
hr.fc-divider {
 height:0;
 margin:0;
 padding:0 0 2px;
 border-width:1px 0
}
.fc-bg table,
.fc-row .fc-bgevent-skeleton table,
.fc-row .fc-highlight-skeleton table {
 height:100%
}
.fc-clear {
 clear:both
}
.fc-bg,
.fc-bgevent-skeleton,
.fc-helper-skeleton,
.fc-highlight-skeleton {
 position:absolute;
 top:0;
 left:0;
 right:0
}
.fc table {
 width:100%;
 box-sizing:border-box;
 table-layout:fixed;
 border-collapse:collapse;
 border-spacing:0
}
.fc td,
.fc th {
 border-style:solid;
 border-width:1px;
 padding:0;
 vertical-align:top
}
.fc td.fc-today {
 border-style:double
}
a[data-goto]:hover {
 text-decoration:underline
}
.fc .fc-row {
 border-style:solid;
 border-width:0
}
.fc-row table {
 border-left:0 hidden transparent;
 border-right:0 hidden transparent;
 border-bottom:0 hidden transparent
}
.fc-row:first-child table {
 border-top:0 hidden transparent
}
.fc-row {
 position:relative
}
.fc-row .fc-bg {
 z-index:1
}
.fc-row .fc-bgevent-skeleton td,
.fc-row .fc-highlight-skeleton td {
 border-color:transparent
}
.fc-row .fc-bgevent-skeleton {
 z-index:2
}
.fc-row .fc-highlight-skeleton {
 z-index:3
}
.fc-row .fc-content-skeleton {
 position:relative;
 z-index:4;
 padding-bottom:2px
}
.fc-row .fc-helper-skeleton {
 z-index:5
}
.fc .fc-row .fc-content-skeleton table,
.fc .fc-row .fc-content-skeleton td,
.fc .fc-row .fc-helper-skeleton td {
 background:0 0;
 border-color:transparent
}
.fc-row .fc-content-skeleton td,
.fc-row .fc-helper-skeleton td {
 border-bottom:0
}
.fc-row .fc-content-skeleton tbody td,
.fc-row .fc-helper-skeleton tbody td {
 border-top:0
}
.fc-scroller {
 -webkit-overflow-scrolling:touch
}
.fc-icon,
.fc-row.fc-rigid,
.fc-time-grid-event {
 overflow:hidden
}
.fc-scroller>.fc-day-grid,
.fc-scroller>.fc-time-grid {
 position:relative;
 width:100%
}
.fc-event {
 position:relative;
 display:block;
 font-size:.85em;
 line-height:1.3;
 border-radius:3px;
 border:1px solid #3a87ad
}
.fc-event,
.fc-event-dot {
 background-color:#3a87ad
}
.fc-event,
.fc-event:hover {
 color:#fff;
 text-decoration:none
}
.fc-not-allowed,
.fc-not-allowed .fc-event {
 cursor:not-allowed
}
.fc-event .fc-bg {
 z-index:1;
 background:#fff;
 opacity:.25
}
.fc-event .fc-content {
 position:relative;
 z-index:2
}
.fc-event .fc-resizer {
 position:absolute;
 z-index:4;
 display:none
}
.fc-event.fc-allow-mouse-resize .fc-resizer,
.fc-event.fc-selected .fc-resizer {
 display:block
}
.fc-event.fc-selected .fc-resizer:before {
 content:"";
 position:absolute;
 z-index:9999;
 top:50%;
 left:50%;
 width:40px;
 height:40px;
 margin-left:-20px;
 margin-top:-20px
}
.fc-event.fc-selected {
 z-index:9999!important;
 box-shadow:0 2px 5px rgba(0,0,0,.2)
}
.fc-event.fc-selected.fc-dragging {
 box-shadow:0 2px 7px rgba(0,0,0,.3)
}
.fc-h-event.fc-selected:before {
 content:"";
 position:absolute;
 z-index:3;
 top:-10px;
 bottom:-10px;
 left:0;
 right:0
}
.fc-ltr .fc-h-event.fc-not-start,
.fc-rtl .fc-h-event.fc-not-end {
 margin-left:0;
 border-left-width:0;
 padding-left:1px;
 border-top-left-radius:0;
 border-bottom-left-radius:0
}
.fc-ltr .fc-h-event.fc-not-end,
.fc-rtl .fc-h-event.fc-not-start {
 margin-right:0;
 border-right-width:0;
 padding-right:1px;
 border-top-right-radius:0;
 border-bottom-right-radius:0
}
.fc-ltr .fc-h-event .fc-start-resizer,
.fc-rtl .fc-h-event .fc-end-resizer {
 cursor:w-resize;
 left:-1px
}
.fc-ltr .fc-h-event .fc-end-resizer,
.fc-rtl .fc-h-event .fc-start-resizer {
 cursor:e-resize;
 right:-1px
}
.fc-h-event.fc-allow-mouse-resize .fc-resizer {
 width:7px;
 top:-1px;
 bottom:-1px
}
.fc-h-event.fc-selected .fc-resizer {
 border-radius:4px;
 border-width:1px;
 width:6px;
 height:6px;
 border-style:solid;
 border-color:inherit;
 background:#fff;
 top:50%;
 margin-top:-4px
}
.fc-ltr .fc-h-event.fc-selected .fc-start-resizer,
.fc-rtl .fc-h-event.fc-selected .fc-end-resizer {
 margin-left:-4px
}
.fc-ltr .fc-h-event.fc-selected .fc-end-resizer,
.fc-rtl .fc-h-event.fc-selected .fc-start-resizer {
 margin-right:-4px
}
.fc-day-grid-event {
 margin:1px 5px 0;
 padding:0 1px
}
tr:first-child>td>.fc-day-grid-event {
 margin-top:2px
}
.fc-day-grid-event.fc-selected:after {
 content:"";
 position:absolute;
 z-index:1;
 top:-1px;
 right:-1px;
 bottom:-1px;
 left:-1px;
 background:#000;
 opacity:.25
}
.fc-day-grid-event .fc-content {
 white-space:nowrap;
 overflow:hidden
}
.fc-day-grid-event .fc-time {
 font-weight:700
}
.fc-ltr .fc-day-grid-event.fc-allow-mouse-resize .fc-start-resizer,
.fc-rtl .fc-day-grid-event.fc-allow-mouse-resize .fc-end-resizer {
 margin-left:-2px
}
.fc-ltr .fc-day-grid-event.fc-allow-mouse-resize .fc-end-resizer,
.fc-rtl .fc-day-grid-event.fc-allow-mouse-resize .fc-start-resizer {
 margin-right:-2px
}
a.fc-more {
 margin:1px 3px;
 font-size:.85em;
 cursor:pointer;
 text-decoration:none
}
a.fc-more:hover {
 text-decoration:underline
}
.fc.fc-bootstrap3 a,
.ui-widget .fc-event {
 text-decoration:none
}
.fc-limited {
 display:none
}
.fc-icon,
.fc-toolbar .fc-center {
 display:inline-block
}
.fc-day-grid .fc-row {
 z-index:1
}
.fc-more-popover {
 z-index:2;
 width:220px
}
.fc-more-popover .fc-event-container {
 padding:10px
}
.fc-bootstrap3 .fc-popover .panel-body,
.fc-bootstrap4 .fc-popover .card-body {
 padding:0
}
.fc-now-indicator {
 position:absolute;
 border:0 solid red
}
.fc-bootstrap3 .fc-today.alert,
.fc-bootstrap4 .fc-today.alert {
 border-radius:0
}
.fc-unselectable {
 -webkit-user-select:none;
 -moz-user-select:none;
 -ms-user-select:none;
 user-select:none;
 -webkit-tap-highlight-color:transparent
}
.fc-unthemed .fc-content,
.fc-unthemed .fc-divider,
.fc-unthemed .fc-list-heading td,
.fc-unthemed .fc-list-view,
.fc-unthemed .fc-popover,
.fc-unthemed .fc-row,
.fc-unthemed tbody,
.fc-unthemed td,
.fc-unthemed th,
.fc-unthemed thead {
 border-color:#ddd
}
.fc-unthemed .fc-popover {
 background-color:#fff;
 border-width:1px;
 border-style:solid
}
.fc-unthemed .fc-divider,
.fc-unthemed .fc-list-heading td,
.fc-unthemed .fc-popover .fc-header {
 background:#eee
}
.fc-unthemed td.fc-today {
 background:#fcf8e3
}
.fc-unthemed .fc-disabled-day {
 background:#d7d7d7;
 opacity:.3
}
.fc-icon {
 height:1em;
 line-height:1em;
 font-size:1em;
 font-family:"Courier New",Courier,monospace;
 -webkit-user-select:none;
 -moz-user-select:none;
 -ms-user-select:none;
 user-select:none
}
.fc-icon:after {
 position:relative
}
.fc-icon-left-single-arrow:after {
 content:"\2039";
 font-weight:700;
 font-size:200%;
 top:-7%
}
.fc-icon-right-single-arrow:after {
 content:"\203A";
 font-weight:700;
 font-size:200%;
 top:-7%
}
.fc-icon-left-double-arrow:after {
 content:"\AB";
 font-size:160%;
 top:-7%
}
.fc-icon-right-double-arrow:after {
 content:"\BB";
 font-size:160%;
 top:-7%
}
.fc-icon-left-triangle:after {
 content:"\25C4";
 font-size:125%;
 top:3%
}
.fc-icon-right-triangle:after {
 content:"\25BA";
 font-size:125%;
 top:3%
}
.fc-icon-down-triangle:after {
 content:"\25BC";
 font-size:125%;
 top:2%
}
.fc-icon-x:after {
 content:"\D7";
 font-size:200%;
 top:6%
}
.fc-unthemed .fc-popover .fc-header .fc-close {
 color:#666;
 font-size:.9em;
 margin-top:2px
}
.fc-unthemed .fc-list-item:hover td {
 background-color:#f5f5f5
}
.ui-widget .fc-disabled-day {
 background-image:none
}
.fc-bootstrap3 .fc-time-grid .fc-slats table,
.fc-bootstrap4 .fc-time-grid .fc-slats table,
.fc-time-grid .fc-slats .ui-widget-content {
 background:0 0
}
.fc-popover>.ui-widget-header+.ui-widget-content {
 border-top:0
}
.fc-bootstrap3 hr.fc-divider,
.fc-bootstrap4 hr.fc-divider {
 border-color:inherit
}
.ui-widget .fc-event {
 color:#fff;
 font-weight:400
}
.ui-widget td.fc-axis {
 font-weight:400
}
.fc.fc-bootstrap3 a[data-goto]:hover {
 text-decoration:underline
}
.fc.fc-bootstrap4 a {
 text-decoration:none
}
.fc.fc-bootstrap4 a[data-goto]:hover {
 text-decoration:underline
}
.fc-bootstrap4 a.fc-event:not([href]):not([tabindex]) {
 color:#fff
}
.fc-bootstrap4 .fc-popover.card {
 position:absolute
}
.fc-toolbar.fc-header-toolbar {
 margin-bottom:1em
}
.fc-toolbar.fc-footer-toolbar {
 margin-top:1em
}
.fc-toolbar .fc-left {
 float:left
}
.fc-toolbar .fc-right {
 float:right
}
.fc .fc-toolbar>*>* {
 float:left;
 margin-left:.75em
}
.fc .fc-toolbar>*>:first-child {
 margin-left:0
}
.fc-toolbar h2 {
 margin:0
}
.fc-toolbar button {
 position:relative
}
.fc-toolbar .fc-state-hover,
.fc-toolbar .ui-state-hover {
 z-index:2
}
.fc-toolbar .fc-state-down {
 z-index:3
}
.fc-toolbar .fc-state-active,
.fc-toolbar .ui-state-active {
 z-index:4
}
.fc-toolbar button:focus {
 z-index:5
}
.fc-view-container *,
.fc-view-container :after,
.fc-view-container :before {
 -webkit-box-sizing:content-box;
 -moz-box-sizing:content-box;
 box-sizing:content-box
}
.fc-view,
.fc-view>table {
 position:relative;
 z-index:1
}
.fc-basicDay-view .fc-content-skeleton,
.fc-basicWeek-view .fc-content-skeleton {
 padding-bottom:1em
}
.fc-basic-view .fc-body .fc-row {
 min-height:4em
}
.fc-row.fc-rigid .fc-content-skeleton {
 position:absolute;
 top:0;
 left:0;
 right:0
}
.fc-day-top.fc-other-month {
 opacity:.3
}
.fc-basic-view .fc-day-number,
.fc-basic-view .fc-week-number {
 padding:5px
}
.fc-basic-view th.fc-day-number,
.fc-basic-view th.fc-week-number {
 padding:0 2px
}
.fc-ltr .fc-basic-view .fc-day-top .fc-day-number {
 float:right
}
.fc-rtl .fc-basic-view .fc-day-top .fc-day-number {
 float:left
}
.fc-ltr .fc-basic-view .fc-day-top .fc-week-number {
 float:left;
 border-radius:0 0 3px
}
.fc-rtl .fc-basic-view .fc-day-top .fc-week-number {
 float:right;
 border-radius:0 0 0 3px
}
.fc-basic-view .fc-day-top .fc-week-number {
 min-width:1.5em;
 text-align:center;
 background-color:#f2f2f2;
 color:grey
}
.fc-basic-view td.fc-week-number>* {
 display:inline-block;
 min-width:1.25em
}
.fc-agenda-view .fc-day-grid {
 position:relative;
 z-index:2
}
.fc-agenda-view .fc-day-grid .fc-row {
 min-height:3em
}
.fc-agenda-view .fc-day-grid .fc-row .fc-content-skeleton {
 padding-bottom:1em
}
.fc .fc-axis {
 vertical-align:middle;
 padding:0 4px;
 white-space:nowrap
}
.fc-ltr .fc-axis {
 text-align:right
}
.fc-rtl .fc-axis {
 text-align:left
}
.fc-time-grid,
.fc-time-grid-container {
 position:relative;
 z-index:1
}
.fc-time-grid {
 min-height:100%
}
.fc-time-grid table {
 border:0 hidden transparent
}
.fc-time-grid>.fc-bg {
 z-index:1
}
.fc-time-grid .fc-slats,
.fc-time-grid>hr {
 position:relative;
 z-index:2
}
.fc-time-grid .fc-content-col {
 position:relative
}
.fc-time-grid .fc-content-skeleton {
 position:absolute;
 z-index:3;
 top:0;
 left:0;
 right:0
}
.fc-time-grid .fc-business-container {
 position:relative;
 z-index:1
}
.fc-time-grid .fc-bgevent-container {
 position:relative;
 z-index:2
}
.fc-time-grid .fc-highlight-container {
 z-index:3;
 position:relative
}
.fc-time-grid .fc-event-container {
 position:relative;
 z-index:4
}
.fc-time-grid .fc-now-indicator-line {
 z-index:5
}
.fc-time-grid .fc-helper-container {
 position:relative;
 z-index:6
}
.fc-time-grid .fc-slats td {
 height:1.5em;
 border-bottom:0
}
.fc-time-grid .fc-slats .fc-minor td {
 border-top-style:dotted
}
.fc-time-grid .fc-highlight {
 position:absolute;
 left:0;
 right:0
}
.fc-ltr .fc-time-grid .fc-event-container {
 margin:0 2.5% 0 2px
}
.fc-rtl .fc-time-grid .fc-event-container {
 margin:0 2px 0 2.5%
}
.fc-time-grid .fc-bgevent,
.fc-time-grid .fc-event {
 position:absolute;
 z-index:1
}
.fc-time-grid .fc-bgevent {
 left:0;
 right:0
}
.fc-v-event.fc-not-start {
 border-top-width:0;
 padding-top:1px;
 border-top-left-radius:0;
 border-top-right-radius:0
}
.fc-v-event.fc-not-end {
 border-bottom-width:0;
 padding-bottom:1px;
 border-bottom-left-radius:0;
 border-bottom-right-radius:0
}
.fc-time-grid-event.fc-selected {
 overflow:visible
}
.fc-time-grid-event.fc-selected .fc-bg {
 display:none
}
.fc-time-grid-event .fc-content {
 overflow:hidden
}
.fc-time-grid-event .fc-time,
.fc-time-grid-event .fc-title {
 padding:0 1px
}
.fc-time-grid-event .fc-time {
 font-size:.85em;
 white-space:nowrap
}
.fc-time-grid-event.fc-short .fc-content {
 white-space:nowrap
}
.fc-time-grid-event.fc-short .fc-time,
.fc-time-grid-event.fc-short .fc-title {
 display:inline-block;
 vertical-align:top
}
.fc-time-grid-event.fc-short .fc-time span {
 display:none
}
.fc-time-grid-event.fc-short .fc-time:before {
 content:attr(data-start)
}
.fc-time-grid-event.fc-short .fc-time:after {
 content:"\A0-\A0"
}
.fc-time-grid-event.fc-short .fc-title {
 font-size:.85em;
 padding:0
}
.fc-time-grid-event.fc-allow-mouse-resize .fc-resizer {
 left:0;
 right:0;
 bottom:0;
 height:8px;
 overflow:hidden;
 line-height:8px;
 font-size:11px;
 font-family:monospace;
 text-align:center;
 cursor:s-resize
}
.fc-time-grid-event.fc-allow-mouse-resize .fc-resizer:after {
 content:"="
}
.fc-time-grid-event.fc-selected .fc-resizer {
 border-radius:5px;
 border-width:1px;
 width:8px;
 height:8px;
 border-style:solid;
 border-color:inherit;
 background:#fff;
 left:50%;
 margin-left:-5px;
 bottom:-5px
}
.fc-time-grid .fc-now-indicator-line {
 border-top-width:1px;
 left:0;
 right:0
}
.fc-time-grid .fc-now-indicator-arrow {
 margin-top:-5px
}
.fc-ltr .fc-time-grid .fc-now-indicator-arrow {
 left:0;
 border-width:5px 0 5px 6px;
 border-top-color:transparent;
 border-bottom-color:transparent
}
.fc-rtl .fc-time-grid .fc-now-indicator-arrow {
 right:0;
 border-width:5px 6px 5px 0;
 border-top-color:transparent;
 border-bottom-color:transparent
}
.fc-event-dot {
 display:inline-block;
 width:10px;
 height:10px;
 border-radius:5px
}
.fc-rtl .fc-list-view {
 direction:rtl
}
.fc-list-view {
 border-width:1px;
 border-style:solid
}
.fc .fc-list-table {
 table-layout:auto
}
.fc-list-table td {
 border-width:1px 0 0;
 padding:8px 14px
}
.fc-list-table tr:first-child td {
 border-top-width:0
}
.fc-list-heading {
 border-bottom-width:1px
}
.fc-list-heading td {
 font-weight:700
}
.fc-ltr .fc-list-heading-main {
 float:left
}
.fc-ltr .fc-list-heading-alt,
.fc-rtl .fc-list-heading-main {
 float:right
}
.fc-rtl .fc-list-heading-alt {
 float:left
}
.fc-list-item.fc-has-url {
 cursor:pointer
}
.fc-list-item-marker,
.fc-list-item-time {
 white-space:nowrap;
 width:1px
}
.fc-ltr .fc-list-item-marker {
 padding-right:0
}
.fc-rtl .fc-list-item-marker {
 padding-left:0
}
.fc-list-item-title a {
 text-decoration:none;
 color:inherit
}
.fc-list-item-title a[href]:hover {
 text-decoration:underline
}
.fc-list-empty-wrap2 {
 position:absolute;
 top:0;
 left:0;
 right:0;
 bottom:0
}
.fc-list-empty-wrap1 {
 width:100%;
 height:100%;
 display:table
}
.fc-list-empty {
 display:table-cell;
 vertical-align:middle;
 text-align:center
}
.fc-unthemed .fc-list-empty {
 background-color:#eee
}


@import url("https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700");
@import url("https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700");
@import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700");
@font-face {
 font-family:simple-line-icons;
 src:url(../fonts/simple-Line-Icons.eot);
 src:url(../fonts/simple-Line-Icons.eot) format("embedded-opentype"),
 url(../fonts/simple-Line-Icons.woff) format("woff"),
 url(../fonts/simple-Line-Icons.ttf) format("truetype"),
 url(../fonts/simple-Line-Icons.svg#Simple-Line-Icons) format("svg");
 font-weight:400;
 font-style:normal
}
[data-icon]:before {
 font-family:simple-line-icons;
 content:attr(data-icon);
 speak:none;
 font-weight:400;
 font-variant:normal;
 text-transform:none;
 line-height:1;
 -webkit-font-smoothing:antialiased;
 -moz-osx-font-smoothing:grayscale;
 font-size:17px
}
.icon-user-female,
.icon-user-follow,
.icon-user-following,
.icon-user-unfollow,
.icon-trophy,
.icon-screen-smartphone,
.icon-screen-desktop,
.icon-plane,
.icon-notebook,
.icon-moustache,
.icon-mouse,
.icon-magnet,
.icon-energy,
.icon-emoticon-smile,
.icon-disc,
.icon-cursor-move,
.icon-crop,
.icon-credit-card,
.icon-chemistry,
.icon-user,
.icon-speedometer,
.icon-social-youtube,
.icon-social-twitter,
.icon-social-tumblr,
.icon-social-facebook,
.icon-social-dropbox,
.icon-social-dribbble,
.icon-shield,
.icon-screen-tablet,
.icon-magic-wand,
.icon-hourglass,
.icon-graduation,
.icon-ghost,
.icon-game-controller,
.icon-fire,
.icon-eyeglasses,
.icon-envelope-open,
.icon-envelope-letter,
.icon-bell,
.icon-badge,
.icon-anchor,
.icon-wallet,
.icon-vector,
.icon-speech,
.icon-puzzle,
.icon-printer,
.icon-present,
.icon-playlist,
.icon-pin,
.icon-picture,
.icon-map,
.icon-layers,
.icon-handbag,
.icon-globe-alt,
.icon-globe,
.icon-frame,
.icon-folder-alt,
.icon-film,
.icon-feed,
.icon-earphones-alt,
.icon-earphones,
.icon-drop,
.icon-drawer,
.icon-docs,
.icon-directions,
.icon-direction,
.icon-diamond,
.icon-cup,
.icon-compass,
.icon-call-out,
.icon-call-in,
.icon-call-end,
.icon-calculator,
.icon-bubbles,
.icon-briefcase,
.icon-book-open,
.icon-basket-loaded,
.icon-basket,
.icon-bag,
.icon-action-undo,
.icon-action-redo,
.icon-wrench,
.icon-umbrella,
.icon-trash,
.icon-tag,
.icon-support,
.icon-size-fullscreen,
.icon-size-actual,
.icon-shuffle,
.icon-share-alt,
.icon-share,
.icon-rocket,
.icon-question,
.icon-pie-chart,
.icon-pencil,
.icon-note,
.icon-music-tone-alt,
.icon-music-tone,
.icon-microphone,
.icon-loop,
.icon-logout,
.icon-login,
.icon-list,
.icon-like,
.icon-home,
.icon-grid,
.icon-graph,
.icon-equalizer,
.icon-dislike,
.icon-cursor,
.icon-control-start,
.icon-control-rewind,
.icon-control-play,
.icon-control-pause,
.icon-control-forward,
.icon-control-end,
.icon-calendar,
.icon-bulb,
.icon-bar-chart,
.icon-arrow-up,
.icon-arrow-right,
.icon-arrow-left,
.icon-arrow-down,
.icon-ban,
.icon-bubble,
.icon-camcorder,
.icon-camera,
.icon-check,
.icon-clock,
.icon-close,
.icon-cloud-download,
.icon-cloud-upload,
.icon-doc,
.icon-envelope,
.icon-eye,
.icon-flag,
.icon-folder,
.icon-heart,
.icon-info,
.icon-key,
.icon-link,
.icon-lock,
.icon-lock-open,
.icon-magnifier,
.icon-magnifier-add,
.icon-magnifier-remove,
.icon-paper-clip,
.icon-paper-plane,
.icon-plus,
.icon-pointer,
.icon-power,
.icon-refresh,
.icon-reload,
.icon-settings,
.icon-star,
.icon-symbol-female,
.icon-symbol-male,
.icon-target,
.icon-volume-1,
.icon-volume-2,
.icon-volume-off,
.icon-users {
 font-family:simple-line-icons;
 speak:none;
 font-style:normal;
 font-weight:400;
 font-variant:normal;
 text-transform:none;
 line-height:1;
 -webkit-font-smoothing:antialiased
}
.icon-user-female:before {
 content:"\e000"
}
.icon-user-follow:before {
 content:"\e002"
}
.icon-user-following:before {
 content:"\e003"
}
.icon-user-unfollow:before {
 content:"\e004"
}
.icon-trophy:before {
 content:"\e006"
}
.icon-screen-smartphone:before {
 content:"\e010"
}
.icon-screen-desktop:before {
 content:"\e011"
}
.icon-plane:before {
 content:"\e012"
}
.icon-notebook:before {
 content:"\e013"
}
.icon-moustache:before {
 content:"\e014"
}
.icon-mouse:before {
 content:"\e015"
}
.icon-magnet:before {
 content:"\e016"
}
.icon-energy:before {
 content:"\e020"
}
.icon-emoticon-smile:before {
 content:"\e021"
}
.icon-disc:before {
 content:"\e022"
}
.icon-cursor-move:before {
 content:"\e023"
}
.icon-crop:before {
 content:"\e024"
}
.icon-credit-card:before {
 content:"\e025"
}
.icon-chemistry:before {
 content:"\e026"
}
.icon-user:before {
 content:"\e005"
}
.icon-speedometer:before {
 content:"\e007"
}
.icon-social-youtube:before {
 content:"\e008"
}
.icon-social-twitter:before {
 content:"\e009"
}
.icon-social-tumblr:before {
 content:"\e00a"
}
.icon-social-facebook:before {
 content:"\e00b"
}
.icon-social-dropbox:before {
 content:"\e00c"
}
.icon-social-dribbble:before {
 content:"\e00d"
}
.icon-shield:before {
 content:"\e00e"
}
.icon-screen-tablet:before {
 content:"\e00f"
}
.icon-magic-wand:before {
 content:"\e017"
}
.icon-hourglass:before {
 content:"\e018"
}
.icon-graduation:before {
 content:"\e019"
}
.icon-ghost:before {
 content:"\e01a"
}
.icon-game-controller:before {
 content:"\e01b"
}
.icon-fire:before {
 content:"\e01c"
}
.icon-eyeglasses:before {
 content:"\e01d"
}
.icon-envelope-open:before {
 content:"\e01e"
}
.icon-envelope-letter:before {
 content:"\e01f"
}
.icon-bell:before {
 content:"\e027"
}
.icon-badge:before {
 content:"\e028"
}
.icon-anchor:before {
 content:"\e029"
}
.icon-wallet:before {
 content:"\e02a"
}
.icon-vector:before {
 content:"\e02b"
}
.icon-speech:before {
 content:"\e02c"
}
.icon-puzzle:before {
 content:"\e02d"
}
.icon-printer:before {
 content:"\e02e"
}
.icon-present:before {
 content:"\e02f"
}
.icon-playlist:before {
 content:"\e030"
}
.icon-pin:before {
 content:"\e031"
}
.icon-picture:before {
 content:"\e032"
}
.icon-map:before {
 content:"\e033"
}
.icon-layers:before {
 content:"\e034"
}
.icon-handbag:before {
 content:"\e035"
}
.icon-globe-alt:before {
 content:"\e036"
}
.icon-globe:before {
 content:"\e037"
}
.icon-frame:before {
 content:"\e038"
}
.icon-folder-alt:before {
 content:"\e039"
}
.icon-film:before {
 content:"\e03a"
}
.icon-feed:before {
 content:"\e03b"
}
.icon-earphones-alt:before {
 content:"\e03c"
}
.icon-earphones:before {
 content:"\e03d"
}
.icon-drop:before {
 content:"\e03e"
}
.icon-drawer:before {
 content:"\e03f"
}
.icon-docs:before {
 content:"\e040"
}
.icon-directions:before {
 content:"\e041"
}
.icon-direction:before {
 content:"\e042"
}
.icon-diamond:before {
 content:"\e043"
}
.icon-cup:before {
 content:"\e044"
}
.icon-compass:before {
 content:"\e045"
}
.icon-call-out:before {
 content:"\e046"
}
.icon-call-in:before {
 content:"\e047"
}
.icon-call-end:before {
 content:"\e048"
}
.icon-calculator:before {
 content:"\e049"
}
.icon-bubbles:before {
 content:"\e04a"
}
.icon-briefcase:before {
 content:"\e04b"
}
.icon-book-open:before {
 content:"\e04c"
}
.icon-basket-loaded:before {
 content:"\e04d"
}
.icon-basket:before {
 content:"\e04e"
}
.icon-bag:before {
 content:"\e04f"
}
.icon-action-undo:before {
 content:"\e050"
}
.icon-action-redo:before {
 content:"\e051"
}
.icon-wrench:before {
 content:"\e052"
}
.icon-umbrella:before {
 content:"\e053"
}
.icon-trash:before {
 content:"\e054"
}
.icon-tag:before {
 content:"\e055"
}
.icon-support:before {
 content:"\e056"
}
.icon-size-fullscreen:before {
 content:"\e057"
}
.icon-size-actual:before {
 content:"\e058"
}
.icon-shuffle:before {
 content:"\e059"
}
.icon-share-alt:before {
 content:"\e05a"
}
.icon-share:before {
 content:"\e05b"
}
.icon-rocket:before {
 content:"\e05c"
}
.icon-question:before {
 content:"\e05d"
}
.icon-pie-chart:before {
 content:"\e05e"
}
.icon-pencil:before {
 content:"\e05f"
}
.icon-note:before {
 content:"\e060"
}
.icon-music-tone-alt:before {
 content:"\e061"
}
.icon-music-tone:before {
 content:"\e062"
}
.icon-microphone:before {
 content:"\e063"
}
.icon-loop:before {
 content:"\e064"
}
.icon-logout:before {
 content:"\e065"
}
.icon-login:before {
 content:"\e066"
}
.icon-list:before {
 content:"\e067"
}
.icon-like:before {
 content:"\e068"
}
.icon-home:before {
 content:"\e069"
}
.icon-grid:before {
 content:"\e06a"
}
.icon-graph:before {
 content:"\e06b"
}
.icon-equalizer:before {
 content:"\e06c"
}
.icon-dislike:before {
 content:"\e06d"
}
.icon-cursor:before {
 content:"\e06e"
}
.icon-control-start:before {
 content:"\e06f"
}
.icon-control-rewind:before {
 content:"\e070"
}
.icon-control-play:before {
 content:"\e071"
}
.icon-control-pause:before {
 content:"\e072"
}
.icon-control-forward:before {
 content:"\e073"
}
.icon-control-end:before {
 content:"\e074"
}
.icon-calendar:before {
 content:"\e075"
}
.icon-bulb:before {
 content:"\e076"
}
.icon-bar-chart:before {
 content:"\e077"
}
.icon-arrow-up:before {
 content:"\e078"
}
.icon-arrow-right:before {
 content:"\e079"
}
.icon-arrow-left:before {
 content:"\e07a"
}
.icon-arrow-down:before {
 content:"\e07b"
}
.icon-ban:before {
 content:"\e07c"
}
.icon-bubble:before {
 content:"\e07d"
}
.icon-camcorder:before {
 content:"\e07e"
}
.icon-camera:before {
 content:"\e07f"
}
.icon-check:before {
 content:"\e080"
}
.icon-clock:before {
 content:"\e081"
}
.icon-close:before {
 content:"\e082"
}
.icon-cloud-download:before {
 content:"\e083"
}
.icon-cloud-upload:before {
 content:"\e084"
}
.icon-doc:before {
 content:"\e085"
}
.icon-envelope:before {
 content:"\e086"
}
.icon-eye:before {
 content:"\e087"
}
.icon-flag:before {
 content:"\e088"
}
.icon-folder:before {
 content:"\e089"
}
.icon-heart:before {
 content:"\e08a"
}
.icon-info:before {
 content:"\e08b"
}
.icon-key:before {
 content:"\e08c"
}
.icon-link:before {
 content:"\e08d"
}
.icon-lock:before {
 content:"\e08e"
}
.icon-lock-open:before {
 content:"\e08f"
}
.icon-magnifier:before {
 content:"\e090"
}
.icon-magnifier-add:before {
 content:"\e091"
}
.icon-magnifier-remove:before {
 content:"\e092"
}
.icon-paper-clip:before {
 content:"\e093"
}
.icon-paper-plane:before {
 content:"\e094"
}
.icon-plus:before {
 content:"\e095"
}
.icon-pointer:before {
 content:"\e096"
}
.icon-power:before {
 content:"\e097"
}
.icon-refresh:before {
 content:"\e098"
}
.icon-reload:before {
 content:"\e099"
}
.icon-settings:before {
 content:"\e09a"
}
.icon-star:before {
 content:"\e09b"
}
.icon-symbol-female:before {
 content:"\e09c"
}
.icon-symbol-male:before {
 content:"\e09d"
}
.icon-target:before {
 content:"\e09e"
}
.icon-volume-1:before {
 content:"\e09f"
}
.icon-volume-2:before {
 content:"\e0a0"
}
.icon-volume-off:before {
 content:"\e0a1"
}
.icon-users:before {
 content:"\e001"
}
@font-face {
 font-family:weathericons;
 src:url(../fonts/weathericons-regular-webfont.eot);
 src:url(../fonts/weathericons-regular-webfont.eot?#iefix) format("embedded-opentype"),
 url(../fonts/weathericons-regular-webfont.woff) format("woff"),
 url(../fonts/weathericons-regular-webfont.ttf) format("truetype"),
 url(../fonts/weathericons-regular-webfont.svg#weathericons-regular-webfontRg) format("svg");
 font-weight:400;
 font-style:normal
}
.wi {
 display:inline-block;
 font-family:weathericons;
 font-style:normal;
 font-weight:400;
 line-height:1;
 -webkit-font-smoothing:antialiased;
 -moz-osx-font-smoothing:grayscale
}
.wi-day-cloudy-gusts:before {
 content:"\f000"
}
.wi-day-cloudy-windy:before {
 content:"\f001"
}
.wi-day-cloudy:before {
 content:"\f002"
}
.wi-day-fog:before {
 content:"\f003"
}
.wi-day-hail:before {
 content:"\f004"
}
.wi-day-lightning:before {
 content:"\f005"
}
.wi-day-rain-mix:before {
 content:"\f006"
}
.wi-day-rain-wind:before {
 content:"\f007"
}
.wi-day-rain:before {
 content:"\f008"
}
.wi-day-showers:before {
 content:"\f009"
}
.wi-day-snow:before {
 content:"\f00a"
}
.wi-day-sprinkle:before {
 content:"\f00b"
}
.wi-day-sunny-overcast:before {
 content:"\f00c"
}
.wi-day-sunny:before {
 content:"\f00d"
}
.wi-day-storm-showers:before {
 content:"\f00e"
}
.wi-day-thunderstorm:before {
 content:"\f010"
}
.wi-cloudy-gusts:before {
 content:"\f011"
}
.wi-cloudy-windy:before {
 content:"\f012"
}
.wi-cloudy:before {
 content:"\f013"
}
.wi-fog:before {
 content:"\f014"
}
.wi-hail:before {
 content:"\f015"
}
.wi-lightning:before {
 content:"\f016"
}
.wi-rain-mix:before {
 content:"\f017"
}
.wi-rain-wind:before {
 content:"\f018"
}
.wi-rain:before {
 content:"\f019"
}
.wi-showers:before {
 content:"\f01a"
}
.wi-snow:before {
 content:"\f01b"
}
.wi-sprinkle:before {
 content:"\f01c"
}
.wi-storm-showers:before {
 content:"\f01d"
}
.wi-thunderstorm:before {
 content:"\f01e"
}
.wi-windy:before {
 content:"\f021"
}
.wi-night-alt-cloudy-gusts:before {
 content:"\f022"
}
.wi-night-alt-cloudy-windy:before {
 content:"\f023"
}
.wi-night-alt-hail:before {
 content:"\f024"
}
.wi-night-alt-lightning:before {
 content:"\f025"
}
.wi-night-alt-rain-mix:before {
 content:"\f026"
}
.wi-night-alt-rain-wind:before {
 content:"\f027"
}
.wi-night-alt-rain:before {
 content:"\f028"
}
.wi-night-alt-showers:before {
 content:"\f029"
}
.wi-night-alt-snow:before {
 content:"\f02a"
}
.wi-night-alt-sprinkle:before {
 content:"\f02b"
}
.wi-night-alt-storm-showers:before {
 content:"\f02c"
}
.wi-night-alt-thunderstorm:before {
 content:"\f02d"
}
.wi-night-clear:before {
 content:"\f02e"
}
.wi-night-cloudy-gusts:before {
 content:"\f02f"
}
.wi-night-cloudy-windy:before {
 content:"\f030"
}
.wi-night-cloudy:before {
 content:"\f031"
}
.wi-night-hail:before {
 content:"\f032"
}
.wi-night-lightning:before {
 content:"\f033"
}
.wi-night-rain-mix:before {
 content:"\f034"
}
.wi-night-rain-wind:before {
 content:"\f035"
}
.wi-night-rain:before {
 content:"\f036"
}
.wi-night-showers:before {
 content:"\f037"
}
.wi-night-snow:before {
 content:"\f038"
}
.wi-night-sprinkle:before {
 content:"\f039"
}
.wi-night-storm-showers:before {
 content:"\f03a"
}
.wi-night-thunderstorm:before {
 content:"\f03b"
}
.wi-celsius:before {
 content:"\f03c"
}
.wi-cloud-down:before {
 content:"\f03d"
}
.wi-cloud-refresh:before {
 content:"\f03e"
}
.wi-cloud-up:before {
 content:"\f040"
}
.wi-cloud:before {
 content:"\f041"
}
.wi-degrees:before {
 content:"\f042"
}
.wi-down-left:before {
 content:"\f043"
}
.wi-down:before {
 content:"\f044"
}
.wi-fahrenheit:before {
 content:"\f045"
}
.wi-horizon-alt:before {
 content:"\f046"
}
.wi-horizon:before {
 content:"\f047"
}
.wi-left:before {
 content:"\f048"
}
.wi-lightning:before {
 content:"\f016"
}
.wi-night-fog:before {
 content:"\f04a"
}
.wi-refresh-alt:before {
 content:"\f04b"
}
.wi-refresh:before {
 content:"\f04c"
}
.wi-right:before {
 content:"\f04d"
}
.wi-sprinkles:before {
 content:"\f04e"
}
.wi-strong-wind:before {
 content:"\f050"
}
.wi-sunrise:before {
 content:"\f051"
}
.wi-sunset:before {
 content:"\f052"
}
.wi-thermometer-exterior:before {
 content:"\f053"
}
.wi-thermometer-internal:before {
 content:"\f054"
}
.wi-thermometer:before {
 content:"\f055"
}
.wi-tornado:before {
 content:"\f056"
}
.wi-up-right:before {
 content:"\f057"
}
.wi-up:before {
 content:"\f058"
}
.wi-wind-west:before {
 content:"\f059"
}
.wi-wind-south-west:before {
 content:"\f05a"
}
.wi-wind-south-east:before {
 content:"\f05b"
}
.wi-wind-south:before {
 content:"\f05c"
}
.wi-wind-north-west:before {
 content:"\f05d"
}
.wi-wind-north-east:before {
 content:"\f05e"
}
.wi-wind-north:before {
 content:"\f060"
}
.wi-wind-east:before {
 content:"\f061"
}
.wi-smoke:before {
 content:"\f062"
}
.wi-dust:before {
 content:"\f063"
}
.wi-snow-wind:before {
 content:"\f064"
}
.wi-day-snow-wind:before {
 content:"\f065"
}
.wi-night-snow-wind:before {
 content:"\f066"
}
.wi-night-alt-snow-wind:before {
 content:"\f067"
}
.wi-day-sleet-storm:before {
 content:"\f068"
}
.wi-night-sleet-storm:before {
 content:"\f069"
}
.wi-night-alt-sleet-storm:before {
 content:"\f06a"
}
.wi-day-snow-thunderstorm:before {
 content:"\f06b"
}
.wi-night-snow-thunderstorm:before {
 content:"\f06c"
}
.wi-night-alt-snow-thunderstorm:before {
 content:"\f06d"
}
.wi-solar-eclipse:before {
 content:"\f06e"
}
.wi-lunar-eclipse:before {
 content:"\f070"
}
.wi-meteor:before {
 content:"\f071"
}
.wi-hot:before {
 content:"\f072"
}
.wi-hurricane:before {
 content:"\f073"
}
.wi-smog:before {
 content:"\f074"
}
.wi-alien:before {
 content:"\f075"
}
.wi-snowflake-cold:before {
 content:"\f076"
}
.wi-stars:before {
 content:"\f077"
}
.wi-night-partly-cloudy:before {
 content:"\f083"
}
.wi-umbrella:before {
 content:"\f084"
}
.wi-day-windy:before {
 content:"\f085"
}
.wi-night-alt-cloudy:before {
 content:"\f086"
}
.wi-up-left:before {
 content:"\f087"
}
.wi-down-right:before {
 content:"\f088"
}
.wi-time-12:before {
 content:"\f089"
}
.wi-time-1:before {
 content:"\f08a"
}
.wi-time-2:before {
 content:"\f08b"
}
.wi-time-3:before {
 content:"\f08c"
}
.wi-time-4:before {
 content:"\f08d"
}
.wi-time-5:before {
 content:"\f08e"
}
.wi-time-6:before {
 content:"\f08f"
}
.wi-time-7:before {
 content:"\f090"
}
.wi-time-8:before {
 content:"\f091"
}
.wi-time-9:before {
 content:"\f092"
}
.wi-time-10:before {
 content:"\f093"
}
.wi-time-11:before {
 content:"\f094"
}
.wi-day-sleet:before {
 content:"\f0b2"
}
.wi-night-sleet:before {
 content:"\f0b3"
}
.wi-night-alt-sleet:before {
 content:"\f0b4"
}
.wi-sleet:before {
 content:"\f0b5"
}
.wi-day-haze:before {
 content:"\f0b6"
}
.wi-beafort-0:before {
 content:"\f0b7"
}
.wi-beafort-1:before {
 content:"\f0b8"
}
.wi-beafort-2:before {
 content:"\f0b9"
}
.wi-beafort-3:before {
 content:"\f0ba"
}
.wi-beafort-4:before {
 content:"\f0bb"
}
.wi-beafort-5:before {
 content:"\f0bc"
}
.wi-beafort-6:before {
 content:"\f0bd"
}
.wi-beafort-7:before {
 content:"\f0be"
}
.wi-beafort-8:before {
 content:"\f0bf"
}
.wi-beafort-9:before {
 content:"\f0c0"
}
.wi-beafort-10:before {
 content:"\f0c1"
}
.wi-beafort-11:before {
 content:"\f0c2"
}
.wi-beafort-12:before {
 content:"\f0c3"
}
.wi-wind-default:before {
 content:"\f0b1"
}
.wi-wind-default._0-deg {
 -webkit-transform:rotate(0deg);
 -moz-transform:rotate(0deg);
 -ms-transform:rotate(0deg);
 -o-transform:rotate(0deg);
 transform:rotate(0deg)
}
.wi-wind-default._15-deg {
 -webkit-transform:rotate(15deg);
 -moz-transform:rotate(15deg);
 -ms-transform:rotate(15deg);
 -o-transform:rotate(15deg);
 transform:rotate(15deg)
}
.wi-wind-default._30-deg {
 -webkit-transform:rotate(30deg);
 -moz-transform:rotate(30deg);
 -ms-transform:rotate(30deg);
 -o-transform:rotate(30deg);
 transform:rotate(30deg)
}
.wi-wind-default._45-deg {
 -webkit-transform:rotate(45deg);
 -moz-transform:rotate(45deg);
 -ms-transform:rotate(45deg);
 -o-transform:rotate(45deg);
 transform:rotate(45deg)
}
.wi-wind-default._60-deg {
 -webkit-transform:rotate(60deg);
 -moz-transform:rotate(60deg);
 -ms-transform:rotate(60deg);
 -o-transform:rotate(60deg);
 transform:rotate(60deg)
}
.wi-wind-default._75-deg {
 -webkit-transform:rotate(75deg);
 -moz-transform:rotate(75deg);
 -ms-transform:rotate(75deg);
 -o-transform:rotate(75deg);
 transform:rotate(75deg)
}
.wi-wind-default._90-deg {
 -webkit-transform:rotate(90deg);
 -moz-transform:rotate(90deg);
 -ms-transform:rotate(90deg);
 -o-transform:rotate(90deg);
 transform:rotate(90deg)
}
.wi-wind-default._105-deg {
 -webkit-transform:rotate(105deg);
 -moz-transform:rotate(105deg);
 -ms-transform:rotate(105deg);
 -o-transform:rotate(105deg);
 transform:rotate(105deg)
}
.wi-wind-default._120-deg {
 -webkit-transform:rotate(120deg);
 -moz-transform:rotate(120deg);
 -ms-transform:rotate(120deg);
 -o-transform:rotate(120deg);
 transform:rotate(120deg)
}
.wi-wind-default._135-deg {
 -webkit-transform:rotate(135deg);
 -moz-transform:rotate(135deg);
 -ms-transform:rotate(135deg);
 -o-transform:rotate(135deg);
 transform:rotate(135deg)
}
.wi-wind-default._150-deg {
 -webkit-transform:rotate(150deg);
 -moz-transform:rotate(150deg);
 -ms-transform:rotate(150deg);
 -o-transform:rotate(150deg);
 transform:rotate(150deg)
}
.wi-wind-default._165-deg {
 -webkit-transform:rotate(165deg);
 -moz-transform:rotate(165deg);
 -ms-transform:rotate(165deg);
 -o-transform:rotate(165deg);
 transform:rotate(165deg)
}
.wi-wind-default._180-deg {
 -webkit-transform:rotate(180deg);
 -moz-transform:rotate(180deg);
 -ms-transform:rotate(180deg);
 -o-transform:rotate(180deg);
 transform:rotate(180deg)
}
.wi-wind-default._195-deg {
 -webkit-transform:rotate(195deg);
 -moz-transform:rotate(195deg);
 -ms-transform:rotate(195deg);
 -o-transform:rotate(195deg);
 transform:rotate(195deg)
}
.wi-wind-default._210-deg {
 -webkit-transform:rotate(210deg);
 -moz-transform:rotate(210deg);
 -ms-transform:rotate(210deg);
 -o-transform:rotate(210deg);
 transform:rotate(210deg)
}
.wi-wind-default._225-deg {
 -webkit-transform:rotate(225deg);
 -moz-transform:rotate(225deg);
 -ms-transform:rotate(225deg);
 -o-transform:rotate(225deg);
 transform:rotate(225deg)
}
.wi-wind-default._240-deg {
 -webkit-transform:rotate(240deg);
 -moz-transform:rotate(240deg);
 -ms-transform:rotate(240deg);
 -o-transform:rotate(240deg);
 transform:rotate(240deg)
}
.wi-wind-default._255-deg {
 -webkit-transform:rotate(255deg);
 -moz-transform:rotate(255deg);
 -ms-transform:rotate(255deg);
 -o-transform:rotate(255deg);
 transform:rotate(255deg)
}
.wi-wind-default._270-deg {
 -webkit-transform:rotate(270deg);
 -moz-transform:rotate(270deg);
 -ms-transform:rotate(270deg);
 -o-transform:rotate(270deg);
 transform:rotate(270deg)
}
.wi-wind-default._285-deg {
 -webkit-transform:rotate(295deg);
 -moz-transform:rotate(295deg);
 -ms-transform:rotate(295deg);
 -o-transform:rotate(295deg);
 transform:rotate(295deg)
}
.wi-wind-default._300-deg {
 -webkit-transform:rotate(300deg);
 -moz-transform:rotate(300deg);
 -ms-transform:rotate(300deg);
 -o-transform:rotate(300deg);
 transform:rotate(300deg)
}
.wi-wind-default._315-deg {
 -webkit-transform:rotate(315deg);
 -moz-transform:rotate(315deg);
 -ms-transform:rotate(315deg);
 -o-transform:rotate(315deg);
 transform:rotate(315deg)
}
.wi-wind-default._330-deg {
 -webkit-transform:rotate(330deg);
 -moz-transform:rotate(330deg);
 -ms-transform:rotate(330deg);
 -o-transform:rotate(330deg);
 transform:rotate(330deg)
}
.wi-wind-default._345-deg {
 -webkit-transform:rotate(345deg);
 -moz-transform:rotate(345deg);
 -ms-transform:rotate(345deg);
 -o-transform:rotate(345deg);
 transform:rotate(345deg)
}
.wi-moon-new:before {
 content:"\f095"
}
.wi-moon-waxing-cresent-1:before {
 content:"\f096"
}
.wi-moon-waxing-cresent-2:before {
 content:"\f097"
}
.wi-moon-waxing-cresent-3:before {
 content:"\f098"
}
.wi-moon-waxing-cresent-4:before {
 content:"\f099"
}
.wi-moon-waxing-cresent-5:before {
 content:"\f09a"
}
.wi-moon-waxing-cresent-6:before {
 content:"\f09b"
}
.wi-moon-first-quarter:before {
 content:"\f09c"
}
.wi-moon-waxing-gibbous-1:before {
 content:"\f09d"
}
.wi-moon-waxing-gibbous-2:before {
 content:"\f09e"
}
.wi-moon-waxing-gibbous-3:before {
 content:"\f09f"
}
.wi-moon-waxing-gibbous-4:before {
 content:"\f0a0"
}
.wi-moon-waxing-gibbous-5:before {
 content:"\f0a1"
}
.wi-moon-waxing-gibbous-6:before {
 content:"\f0a2"
}
.wi-moon-full:before {
 content:"\f0a3"
}
.wi-moon-waning-gibbous-1:before {
 content:"\f0a4"
}
.wi-moon-waning-gibbous-2:before {
 content:"\f0a5"
}
.wi-moon-waning-gibbous-3:before {
 content:"\f0a6"
}
.wi-moon-waning-gibbous-4:before {
 content:"\f0a7"
}
.wi-moon-waning-gibbous-5:before {
 content:"\f0a8"
}
.wi-moon-waning-gibbous-6:before {
 content:"\f0a9"
}
.wi-moon-3rd-quarter:before {
 content:"\f0aa"
}
.wi-moon-waning-crescent-1:before {
 content:"\f0ab"
}
.wi-moon-waning-crescent-2:before {
 content:"\f0ac"
}
.wi-moon-waning-crescent-3:before {
 content:"\f0ad"
}
.wi-moon-waning-crescent-4:before {
 content:"\f0ae"
}
.wi-moon-waning-crescent-5:before {
 content:"\f0af"
}
.wi-moon-waning-crescent-6:before {
 content:"\f0b0"
}
@font-face {
 font-family:feather;
 src:url(../fonts/feather/feather-webfont.eot?t=1501841394106);
 src:url(../fonts/feather/feather-webfont.eot?t=1501841394106#iefix) format("embedded-opentype"),
 url(../fonts/feather/feather-webfont.woff?t=1501841394106) format("woff"),
 url(../fonts/feather/feather-webfont.ttf?t=1501841394106) format("truetype"),
 url(../fonts/feather/feather-webfont.svg?t=1501841394106#feather) format("svg")
}
.fe {
 font-family:feather!important;
 speak:none;
 font-style:normal;
 font-weight:400;
 font-variant:normal;
 text-transform:none;
 line-height:1;
 -webkit-font-smoothing:antialiased;
 -moz-osx-font-smoothing:grayscale
}
.fe-activity:before {
 content:"\e900"
}
.fe-airplay:before {
 content:"\e901"
}
.fe-alert-circle:before {
 content:"\e902"
}
.fe-alert-octagon:before {
 content:"\e903"
}
.fe-alert-triangle:before {
 content:"\e904"
}
.fe-align-center:before {
 content:"\e905"
}
.fe-align-justify:before {
 content:"\e906"
}
.fe-align-left:before {
 content:"\e907"
}
.fe-align-right:before {
 content:"\e908"
}
.fe-anchor:before {
 content:"\e909"
}
.fe-aperture:before {
 content:"\e90a"
}
.fe-arrow-down:before {
 content:"\e90b"
}
.fe-arrow-down-circle:before {
 content:"\e90c"
}
.fe-arrow-down-left:before {
 content:"\e90d"
}
.fe-arrow-down-right:before {
 content:"\e90e"
}
.fe-arrow-left:before {
 content:"\e90f"
}
.fe-arrow-left-circle:before {
 content:"\e910"
}
.fe-arrow-right:before {
 content:"\e911"
}
.fe-arrow-right-circle:before {
 content:"\e912"
}
.fe-arrow-up:before {
 content:"\e913"
}
.fe-arrow-up-circle:before {
 content:"\e914"
}
.fe-arrow-up-left:before {
 content:"\e915"
}
.fe-arrow-up-right:before {
 content:"\e916"
}
.fe-at-sign:before {
 content:"\e917"
}
.fe-award:before {
 content:"\e918"
}
.fe-bar-chart:before {
 content:"\e919"
}
.fe-bar-chart-2:before {
 content:"\e91a"
}
.fe-battery:before {
 content:"\e91b"
}
.fe-battery-charging:before {
 content:"\e91c"
}
.fe-bell:before {
 content:"\e91d"
}
.fe-bell-off:before {
 content:"\e91e"
}
.fe-bluetooth:before {
 content:"\e91f"
}
.fe-bold:before {
 content:"\e920"
}
.fe-book:before {
 content:"\e921"
}
.fe-book-open:before {
 content:"\e922"
}
.fe-bookmark:before {
 content:"\e923"
}
.fe-box:before {
 content:"\e924"
}
.fe-briefcase:before {
 content:"\e925"
}
.fe-calendar:before {
 content:"\e926"
}
.fe-camera:before {
 content:"\e927"
}
.fe-camera-off:before {
 content:"\e928"
}
.fe-cast:before {
 content:"\e929"
}
.fe-check:before {
 content:"\e92a"
}
.fe-check-circle:before {
 content:"\e92b"
}
.fe-check-square:before {
 content:"\e92c"
}
.fe-chevron-down:before {
 content:"\e92d"
}
.fe-chevron-left:before {
 content:"\e92e"
}
.fe-chevron-right:before {
 content:"\e92f"
}
.fe-chevron-up:before {
 content:"\e930"
}
.fe-chevrons-down:before {
 content:"\e931"
}
.fe-chevrons-left:before {
 content:"\e932"
}
.fe-chevrons-right:before {
 content:"\e933"
}
.fe-chevrons-up:before {
 content:"\e934"
}
.fe-chrome:before {
 content:"\e935"
}
.fe-circle:before {
 content:"\e936"
}
.fe-clipboard:before {
 content:"\e937"
}
.fe-clock:before {
 content:"\e938"
}
.fe-cloud:before {
 content:"\e939"
}
.fe-cloud-drizzle:before {
 content:"\e93a"
}
.fe-cloud-lightning:before {
 content:"\e93b"
}
.fe-cloud-off:before {
 content:"\e93c"
}
.fe-cloud-rain:before {
 content:"\e93d"
}
.fe-cloud-snow:before {
 content:"\e93e"
}
.fe-code:before {
 content:"\e93f"
}
.fe-codepen:before {
 content:"\e940"
}
.fe-command:before {
 content:"\e941"
}
.fe-compass:before {
 content:"\e942"
}
.fe-copy:before {
 content:"\e943"
}
.fe-corner-down-left:before {
 content:"\e944"
}
.fe-corner-down-right:before {
 content:"\e945"
}
.fe-corner-left-down:before {
 content:"\e946"
}
.fe-corner-left-up:before {
 content:"\e947"
}
.fe-corner-right-down:before {
 content:"\e948"
}
.fe-corner-right-up:before {
 content:"\e949"
}
.fe-corner-up-left:before {
 content:"\e94a"
}
.fe-corner-up-right:before {
 content:"\e94b"
}
.fe-cpu:before {
 content:"\e94c"
}
.fe-credit-card:before {
 content:"\e94d"
}
.fe-crop:before {
 content:"\e94e"
}
.fe-crosshair:before {
 content:"\e94f"
}
.fe-database:before {
 content:"\e950"
}
.fe-delete:before {
 content:"\e951"
}
.fe-disc:before {
 content:"\e952"
}
.fe-dollar-sign:before {
 content:"\e953"
}
.fe-download:before {
 content:"\e954"
}
.fe-download-cloud:before {
 content:"\e955"
}
.fe-droplet:before {
 content:"\e956"
}
.fe-edit:before {
 content:"\e957"
}
.fe-edit-2:before {
 content:"\e958"
}
.fe-edit-3:before {
 content:"\e959"
}
.fe-external-link:before {
 content:"\e95a"
}
.fe-eye:before {
 content:"\e95b"
}
.fe-eye-off:before {
 content:"\e95c"
}
.fe-facebook:before {
 content:"\e95d"
}
.fe-fast-forward:before {
 content:"\e95e"
}
.fe-feather:before {
 content:"\e95f"
}
.fe-file:before {
 content:"\e960"
}
.fe-file-minus:before {
 content:"\e961"
}
.fe-file-plus:before {
 content:"\e962"
}
.fe-file-text:before {
 content:"\e963"
}
.fe-film:before {
 content:"\e964"
}
.fe-filter:before {
 content:"\e965"
}
.fe-flag:before {
 content:"\e966"
}
.fe-folder:before {
 content:"\e967"
}
.fe-folder-minus:before {
 content:"\e968"
}
.fe-folder-plus:before {
 content:"\e969"
}
.fe-git-branch:before {
 content:"\e96a"
}
.fe-git-commit:before {
 content:"\e96b"
}
.fe-git-merge:before {
 content:"\e96c"
}
.fe-git-pull-request:before {
 content:"\e96d"
}
.fe-github:before {
 content:"\e96e"
}
.fe-gitlab:before {
 content:"\e96f"
}
.fe-globe:before {
 content:"\e970"
}
.fe-grid:before {
 content:"\e971"
}
.fe-hard-drive:before {
 content:"\e972"
}
.fe-hash:before {
 content:"\e973"
}
.fe-headphones:before {
 content:"\e974"
}
.fe-heart:before {
 content:"\e975"
}
.fe-help-circle:before {
 content:"\e976"
}
.fe-home:before {
 content:"\e977"
}
.fe-image:before {
 content:"\e978"
}
.fe-inbox:before {
 content:"\e979"
}
.fe-info:before {
 content:"\e97a"
}
.fe-instagram:before {
 content:"\e97b"
}
.fe-italic:before {
 content:"\e97c"
}
.fe-layers:before {
 content:"\e97d"
}
.fe-layout:before {
 content:"\e97e"
}
.fe-life-buoy:before {
 content:"\e97f"
}
.fe-link:before {
 content:"\e980"
}
.fe-link-2:before {
 content:"\e981"
}
.fe-linkedin:before {
 content:"\e982"
}
.fe-list:before {
 content:"\e983"
}
.fe-loader:before {
 content:"\e984"
}
.fe-lock:before {
 content:"\e985"
}
.fe-log-in:before {
 content:"\e986"
}
.fe-log-out:before {
 content:"\e987"
}
.fe-mail:before {
 content:"\e988"
}
.fe-map:before {
 content:"\e989"
}
.fe-map-pin:before {
 content:"\e98a"
}
.fe-maximize:before {
 content:"\e98b"
}
.fe-maximize-2:before {
 content:"\e98c"
}
.fe-menu:before {
 content:"\e98d"
}
.fe-message-circle:before {
 content:"\e98e"
}
.fe-message-square:before {
 content:"\e98f"
}
.fe-mic:before {
 content:"\e990"
}
.fe-mic-off:before {
 content:"\e991"
}
.fe-minimize:before {
 content:"\e992"
}
.fe-minimize-2:before {
 content:"\e993"
}
.fe-minus:before {
 content:"\e994"
}
.fe-minus-circle:before {
 content:"\e995"
}
.fe-minus-square:before {
 content:"\e996"
}
.fe-monitor:before {
 content:"\e997"
}
.fe-moon:before {
 content:"\e998"
}
.fe-more-horizontal:before {
 content:"\e999"
}
.fe-more-vertical:before {
 content:"\e99a"
}
.fe-move:before {
 content:"\e99b"
}
.fe-music:before {
 content:"\e99c"
}
.fe-navigation:before {
 content:"\e99d"
}
.fe-navigation-2:before {
 content:"\e99e"
}
.fe-octagon:before {
 content:"\e99f"
}
.fe-package:before {
 content:"\e9a0"
}
.fe-paperclip:before {
 content:"\e9a1"
}
.fe-pause:before {
 content:"\e9a2"
}
.fe-pause-circle:before {
 content:"\e9a3"
}
.fe-percent:before {
 content:"\e9a4"
}
.fe-phone:before {
 content:"\e9a5"
}
.fe-phone-call:before {
 content:"\e9a6"
}
.fe-phone-forwarded:before {
 content:"\e9a7"
}
.fe-phone-incoming:before {
 content:"\e9a8"
}
.fe-phone-missed:before {
 content:"\e9a9"
}
.fe-phone-off:before {
 content:"\e9aa"
}
.fe-phone-outgoing:before {
 content:"\e9ab"
}
.fe-pie-chart:before {
 content:"\e9ac"
}
.fe-play:before {
 content:"\e9ad"
}
.fe-play-circle:before {
 content:"\e9ae"
}
.fe-plus:before {
 content:"\e9af"
}
.fe-plus-circle:before {
 content:"\e9b0"
}
.fe-plus-square:before {
 content:"\e9b1"
}
.fe-pocket:before {
 content:"\e9b2"
}
.fe-power:before {
 content:"\e9b3"
}
.fe-printer:before {
 content:"\e9b4"
}
.fe-radio:before {
 content:"\e9b5"
}
.fe-refresh-ccw:before {
 content:"\e9b6"
}
.fe-refresh-cw:before {
 content:"\e9b7"
}
.fe-repeat:before {
 content:"\e9b8"
}
.fe-rewind:before {
 content:"\e9b9"
}
.fe-rotate-ccw:before {
 content:"\e9ba"
}
.fe-rotate-cw:before {
 content:"\e9bb"
}
.fe-rss:before {
 content:"\e9bc"
}
.fe-save:before {
 content:"\e9bd"
}
.fe-scissors:before {
 content:"\e9be"
}
.fe-search:before {
 content:"\e9bf"
}
.fe-send:before {
 content:"\e9c0"
}
.fe-server:before {
 content:"\e9c1"
}
.fe-settings:before {
 content:"\e9c2"
}
.fe-share:before {
 content:"\e9c3"
}
.fe-share-2:before {
 content:"\e9c4"
}
.fe-shield:before {
 content:"\e9c5"
}
.fe-shield-off:before {
 content:"\e9c6"
}
.fe-shopping-bag:before {
 content:"\e9c7"
}
.fe-shopping-cart:before {
 content:"\e9c8"
}
.fe-shuffle:before {
 content:"\e9c9"
}
.fe-sidebar:before {
 content:"\e9ca"
}
.fe-skip-back:before {
 content:"\e9cb"
}
.fe-skip-forward:before {
 content:"\e9cc"
}
.fe-slack:before {
 content:"\e9cd"
}
.fe-slash:before {
 content:"\e9ce"
}
.fe-sliders:before {
 content:"\e9cf"
}
.fe-smartphone:before {
 content:"\e9d0"
}
.fe-speaker:before {
 content:"\e9d1"
}
.fe-square:before {
 content:"\e9d2"
}
.fe-star:before {
 content:"\e9d3"
}
.fe-stop-circle:before {
 content:"\e9d4"
}
.fe-sun:before {
 content:"\e9d5"
}
.fe-sunrise:before {
 content:"\e9d6"
}
.fe-sunset:before {
 content:"\e9d7"
}
.fe-tablet:before {
 content:"\e9d8"
}
.fe-tag:before {
 content:"\e9d9"
}
.fe-target:before {
 content:"\e9da"
}
.fe-terminal:before {
 content:"\e9db"
}
.fe-thermometer:before {
 content:"\e9dc"
}
.fe-thumbs-down:before {
 content:"\e9dd"
}
.fe-thumbs-up:before {
 content:"\e9de"
}
.fe-toggle-left:before {
 content:"\e9df"
}
.fe-toggle-right:before {
 content:"\e9e0"
}
.fe-trash:before {
 content:"\e9e1"
}
.fe-trash-2:before {
 content:"\e9e2"
}
.fe-trending-down:before {
 content:"\e9e3"
}
.fe-trending-up:before {
 content:"\e9e4"
}
.fe-triangle:before {
 content:"\e9e5"
}
.fe-truck:before {
 content:"\e9e6"
}
.fe-tv:before {
 content:"\e9e7"
}
.fe-twitter:before {
 content:"\e9e8"
}
.fe-type:before {
 content:"\e9e9"
}
.fe-umbrella:before {
 content:"\e9ea"
}
.fe-underline:before {
 content:"\e9eb"
}
.fe-unlock:before {
 content:"\e9ec"
}
.fe-upload:before {
 content:"\e9ed"
}
.fe-upload-cloud:before {
 content:"\e9ee"
}
.fe-user:before {
 content:"\e9ef"
}
.fe-user-check:before {
 content:"\e9f0"
}
.fe-user-minus:before {
 content:"\e9f1"
}
.fe-user-plus:before {
 content:"\e9f2"
}
.fe-user-x:before {
 content:"\e9f3"
}
.fe-users:before {
 content:"\e9f4"
}
.fe-video:before {
 content:"\e9f5"
}
.fe-video-off:before {
 content:"\e9f6"
}
.fe-voicemail:before {
 content:"\e9f7"
}
.fe-volume:before {
 content:"\e9f8"
}
.fe-volume-1:before {
 content:"\e9f9"
}
.fe-volume-2:before {
 content:"\e9fa"
}
.fe-volume-x:before {
 content:"\e9fb"
}
.fe-watch:before {
 content:"\e9fc"
}
.fe-wifi:before {
 content:"\e9fd"
}
.fe-wifi-off:before {
 content:"\e9fe"
}
.fe-wind:before {
 content:"\e9ff"
}
.fe-x:before {
 content:"\ea00"
}
.fe-x-circle:before {
 content:"\ea01"
}
.fe-x-square:before {
 content:"\ea02"
}
.fe-zap:before {
 content:"\ea03"
}
.fe-zap-off:before {
 content:"\ea04"
}
.fe-zoom-in:before {
 content:"\ea05"
}
.fe-zoom-out:before {
 content:"\ea06"
}
/*!* Font Awesome 4.7.0 by @davegandy - http://fontawesome.io - @fontawesome
* License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)*/@font-face {
 font-family:fontawesome;
 src:url(../fonts/fontawesome-webfont.eot?v=4.7.0);
 src:url(../fonts/fontawesome-webfont.eot?#iefix&v=4.7.0) format("embedded-opentype"),
 url(../fonts/fontawesome-webfont.woff2?v=4.7.0) format("woff2"),
 url(../fonts/fontawesome-webfont.woff?v=4.7.0) format("woff"),
 url(../fonts/fontawesome-webfont.ttf?v=4.7.0) format("truetype"),
 url(../fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular) format("svg");
 font-weight:400;
 font-style:normal
}
.fa {
 display:inline-block;
 font:normal normal normal 14px/1 FontAwesome;
 font-size:inherit;
 text-rendering:auto;
 -webkit-font-smoothing:antialiased;
 -moz-osx-font-smoothing:grayscale
}
.fa-lg {
 font-size:1.33333333em;
 line-height:.75em;
 vertical-align:-15%
}
.fa-2x {
 font-size:2em
}
.fa-3x {
 font-size:3em
}
.fa-4x {
 font-size:4em
}
.fa-5x {
 font-size:5em
}
.fa-fw {
 width:1.28571429em;
 text-align:center
}
.fa-ul {
 padding-left:0;
 margin-left:2.14285714em;
 list-style-type:none
}
.fa-ul>li {
 position:relative
}
.fa-li {
 position:absolute;
 left:-2.14285714em;
 width:2.14285714em;
 top:.14285714em;
 text-align:center
}
.fa-li.fa-lg {
 left:-1.85714286em
}
.fa-border {
 padding:.2em .25em .15em;
 border:solid .08em #eee;
 border-radius:.1em
}
.fa-pull-left {
 float:left
}
.fa-pull-right {
 float:right
}
.fa.fa-pull-left {
 margin-right:.3em
}
.fa.fa-pull-right {
 margin-left:.3em
}
.pull-right {
 float:right
}
.pull-left {
 float:left
}
.fa.pull-left {
 margin-right:.3em
}
.fa.pull-right {
 margin-left:.3em
}
.fa-spin {
 -webkit-animation:fa-spin 2s infinite linear;
 animation:fa-spin 2s infinite linear
}
.fa-pulse {
 -webkit-animation:fa-spin 1s infinite steps(8);
 animation:fa-spin 1s infinite steps(8)
}
@-webkit-keyframes fa-spin {
 0% {
  -webkit-transform:rotate(0deg);
  transform:rotate(0deg)
 }
 100% {
  -webkit-transform:rotate(359deg);
  transform:rotate(359deg)
 }
}
@keyframes fa-spin {
 0% {
  -webkit-transform:rotate(0deg);
  transform:rotate(0deg)
 }
 100% {
  -webkit-transform:rotate(359deg);
  transform:rotate(359deg)
 }
}
.fa-rotate-90 {
 -ms-filter:"progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
 -webkit-transform:rotate(90deg);
 -ms-transform:rotate(90deg);
 transform:rotate(90deg)
}
.fa-rotate-180 {
 -ms-filter:"progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
 -webkit-transform:rotate(180deg);
 -ms-transform:rotate(180deg);
 transform:rotate(180deg)
}
.fa-rotate-270 {
 -ms-filter:"progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
 -webkit-transform:rotate(270deg);
 -ms-transform:rotate(270deg);
 transform:rotate(270deg)
}
.fa-flip-horizontal {
 -ms-filter:"progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
 -webkit-transform:scale(-1,1);
 -ms-transform:scale(-1,1);
 transform:scale(-1,1)
}
.fa-flip-vertical {
 -ms-filter:"progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
 -webkit-transform:scale(1,-1);
 -ms-transform:scale(1,-1);
 transform:scale(1,-1)
}
:root .fa-rotate-90,
:root .fa-rotate-180,
:root .fa-rotate-270,
:root .fa-flip-horizontal,
:root .fa-flip-vertical {
 filter:none
}
.fa-stack {
 position:relative;
 display:inline-block;
 width:2em;
 height:2em;
 line-height:2em;
 vertical-align:middle
}
.fa-stack-1x,
.fa-stack-2x {
 position:absolute;
 left:0;
 width:100%;
 text-align:center
}
.fa-stack-1x {
 line-height:inherit
}
.fa-stack-2x {
 font-size:2em
}
.fa-inverse {
 color:#fff
}
.fa-glass:before {
 content:"\f000"
}
.fa-music:before {
 content:"\f001"
}
.fa-search:before {
 content:"\f002"
}
.fa-envelope-o:before {
 content:"\f003"
}
.fa-heart:before {
 content:"\f004"
}
.fa-star:before {
 content:"\f005"
}
.fa-star-o:before {
 content:"\f006"
}
.fa-user:before {
 content:"\f007"
}
.fa-film:before {
 content:"\f008"
}
.fa-th-large:before {
 content:"\f009"
}
.fa-th:before {
 content:"\f00a"
}
.fa-th-list:before {
 content:"\f00b"
}
.fa-check:before {
 content:"\f00c"
}
.fa-remove:before,
.fa-close:before,
.fa-times:before {
 content:"\f00d"
}
.fa-search-plus:before {
 content:"\f00e"
}
.fa-search-minus:before {
 content:"\f010"
}
.fa-power-off:before {
 content:"\f011"
}
.fa-signal:before {
 content:"\f012"
}
.fa-gear:before,
.fa-cog:before {
 content:"\f013"
}
.fa-trash-o:before {
 content:"\f014"
}
.fa-home:before {
 content:"\f015"
}
.fa-file-o:before {
 content:"\f016"
}
.fa-clock-o:before {
 content:"\f017"
}
.fa-road:before {
 content:"\f018"
}
.fa-download:before {
 content:"\f019"
}
.fa-arrow-circle-o-down:before {
 content:"\f01a"
}
.fa-arrow-circle-o-up:before {
 content:"\f01b"
}
.fa-inbox:before {
 content:"\f01c"
}
.fa-play-circle-o:before {
 content:"\f01d"
}
.fa-rotate-right:before,
.fa-repeat:before {
 content:"\f01e"
}
.fa-refresh:before {
 content:"\f021"
}
.fa-list-alt:before {
 content:"\f022"
}
.fa-lock:before {
 content:"\f023"
}
.fa-flag:before {
 content:"\f024"
}
.fa-headphones:before {
 content:"\f025"
}
.fa-volume-off:before {
 content:"\f026"
}
.fa-volume-down:before {
 content:"\f027"
}
.fa-volume-up:before {
 content:"\f028"
}
.fa-qrcode:before {
 content:"\f029"
}
.fa-barcode:before {
 content:"\f02a"
}
.fa-tag:before {
 content:"\f02b"
}
.fa-tags:before {
 content:"\f02c"
}
.fa-book:before {
 content:"\f02d"
}
.fa-bookmark:before {
 content:"\f02e"
}
.fa-print:before {
 content:"\f02f"
}
.fa-camera:before {
 content:"\f030"
}
.fa-font:before {
 content:"\f031"
}
.fa-bold:before {
 content:"\f032"
}
.fa-italic:before {
 content:"\f033"
}
.fa-text-height:before {
 content:"\f034"
}
.fa-text-width:before {
 content:"\f035"
}
.fa-align-left:before {
 content:"\f036"
}
.fa-align-center:before {
 content:"\f037"
}
.fa-align-right:before {
 content:"\f038"
}
.fa-align-justify:before {
 content:"\f039"
}
.fa-list:before {
 content:"\f03a"
}
.fa-dedent:before,
.fa-outdent:before {
 content:"\f03b"
}
.fa-indent:before {
 content:"\f03c"
}
.fa-video-camera:before {
 content:"\f03d"
}
.fa-photo:before,
.fa-image:before,
.fa-picture-o:before {
 content:"\f03e"
}
.fa-pencil:before {
 content:"\f040"
}
.fa-map-marker:before {
 content:"\f041"
}
.fa-adjust:before {
 content:"\f042"
}
.fa-tint:before {
 content:"\f043"
}
.fa-edit:before,
.fa-pencil-square-o:before {
 content:"\f044"
}
.fa-share-square-o:before {
 content:"\f045"
}
.fa-check-square-o:before {
 content:"\f046"
}
.fa-arrows:before {
 content:"\f047"
}
.fa-step-backward:before {
 content:"\f048"
}
.fa-fast-backward:before {
 content:"\f049"
}
.fa-backward:before {
 content:"\f04a"
}
.fa-play:before {
 content:"\f04b"
}
.fa-pause:before {
 content:"\f04c"
}
.fa-stop:before {
 content:"\f04d"
}
.fa-forward:before {
 content:"\f04e"
}
.fa-fast-forward:before {
 content:"\f050"
}
.fa-step-forward:before {
 content:"\f051"
}
.fa-eject:before {
 content:"\f052"
}
.fa-chevron-left:before {
 content:"\f053"
}
.fa-chevron-right:before {
 content:"\f054"
}
.fa-plus-circle:before {
 content:"\f055"
}
.fa-minus-circle:before {
 content:"\f056"
}
.fa-times-circle:before {
 content:"\f057"
}
.fa-check-circle:before {
 content:"\f058"
}
.fa-question-circle:before {
 content:"\f059"
}
.fa-info-circle:before {
 content:"\f05a"
}
.fa-crosshairs:before {
 content:"\f05b"
}
.fa-times-circle-o:before {
 content:"\f05c"
}
.fa-check-circle-o:before {
 content:"\f05d"
}
.fa-ban:before {
 content:"\f05e"
}
.fa-arrow-left:before {
 content:"\f060"
}
.fa-arrow-right:before {
 content:"\f061"
}
.fa-arrow-up:before {
 content:"\f062"
}
.fa-arrow-down:before {
 content:"\f063"
}
.fa-mail-forward:before,
.fa-share:before {
 content:"\f064"
}
.fa-expand:before {
 content:"\f065"
}
.fa-compress:before {
 content:"\f066"
}
.fa-plus:before {
 content:"\f067"
}
.fa-minus:before {
 content:"\f068"
}
.fa-asterisk:before {
 content:"\f069"
}
.fa-exclamation-circle:before {
 content:"\f06a"
}
.fa-gift:before {
 content:"\f06b"
}
.fa-leaf:before {
 content:"\f06c"
}
.fa-fire:before {
 content:"\f06d"
}
.fa-eye:before {
 content:"\f06e"
}
.fa-eye-slash:before {
 content:"\f070"
}
.fa-warning:before,
.fa-exclamation-triangle:before {
 content:"\f071"
}
.fa-plane:before {
 content:"\f072"
}
.fa-calendar:before {
 content:"\f073"
}
.fa-random:before {
 content:"\f074"
}
.fa-comment:before {
 content:"\f075"
}
.fa-magnet:before {
 content:"\f076"
}
.fa-chevron-up:before {
 content:"\f077"
}
.fa-chevron-down:before {
 content:"\f078"
}
.fa-retweet:before {
 content:"\f079"
}
.fa-shopping-cart:before {
 content:"\f07a"
}
.fa-folder:before {
 content:"\f07b"
}
.fa-folder-open:before {
 content:"\f07c"
}
.fa-arrows-v:before {
 content:"\f07d"
}
.fa-arrows-h:before {
 content:"\f07e"
}
.fa-bar-chart-o:before,
.fa-bar-chart:before {
 content:"\f080"
}
.fa-twitter-square:before {
 content:"\f081"
}
.fa-facebook-square:before {
 content:"\f082"
}
.fa-camera-retro:before {
 content:"\f083"
}
.fa-key:before {
 content:"\f084"
}
.fa-gears:before,
.fa-cogs:before {
 content:"\f085"
}
.fa-comments:before {
 content:"\f086"
}
.fa-thumbs-o-up:before {
 content:"\f087"
}
.fa-thumbs-o-down:before {
 content:"\f088"
}
.fa-star-half:before {
 content:"\f089"
}
.fa-heart-o:before {
 content:"\f08a"
}
.fa-sign-out:before {
 content:"\f08b"
}
.fa-linkedin-square:before {
 content:"\f08c"
}
.fa-thumb-tack:before {
 content:"\f08d"
}
.fa-external-link:before {
 content:"\f08e"
}
.fa-sign-in:before {
 content:"\f090"
}
.fa-trophy:before {
 content:"\f091"
}
.fa-github-square:before {
 content:"\f092"
}
.fa-upload:before {
 content:"\f093"
}
.fa-lemon-o:before {
 content:"\f094"
}
.fa-phone:before {
 content:"\f095"
}
.fa-square-o:before {
 content:"\f096"
}
.fa-bookmark-o:before {
 content:"\f097"
}
.fa-phone-square:before {
 content:"\f098"
}
.fa-twitter:before {
 content:"\f099"
}
.fa-facebook-f:before,
.fa-facebook:before {
 content:"\f09a"
}
.fa-github:before {
 content:"\f09b"
}
.fa-unlock:before {
 content:"\f09c"
}
.fa-credit-card:before {
 content:"\f09d"
}
.fa-feed:before,
.fa-rss:before {
 content:"\f09e"
}
.fa-hdd-o:before {
 content:"\f0a0"
}
.fa-bullhorn:before {
 content:"\f0a1"
}
.fa-bell:before {
 content:"\f0f3"
}
.fa-certificate:before {
 content:"\f0a3"
}
.fa-hand-o-right:before {
 content:"\f0a4"
}
.fa-hand-o-left:before {
 content:"\f0a5"
}
.fa-hand-o-up:before {
 content:"\f0a6"
}
.fa-hand-o-down:before {
 content:"\f0a7"
}
.fa-arrow-circle-left:before {
 content:"\f0a8"
}
.fa-arrow-circle-right:before {
 content:"\f0a9"
}
.fa-arrow-circle-up:before {
 content:"\f0aa"
}
.fa-arrow-circle-down:before {
 content:"\f0ab"
}
.fa-globe:before {
 content:"\f0ac"
}
.fa-wrench:before {
 content:"\f0ad"
}
.fa-tasks:before {
 content:"\f0ae"
}
.fa-filter:before {
 content:"\f0b0"
}
.fa-briefcase:before {
 content:"\f0b1"
}
.fa-arrows-alt:before {
 content:"\f0b2"
}
.fa-group:before,
.fa-users:before {
 content:"\f0c0"
}
.fa-chain:before,
.fa-link:before {
 content:"\f0c1"
}
.fa-cloud:before {
 content:"\f0c2"
}
.fa-flask:before {
 content:"\f0c3"
}
.fa-cut:before,
.fa-scissors:before {
 content:"\f0c4"
}
.fa-copy:before,
.fa-files-o:before {
 content:"\f0c5"
}
.fa-paperclip:before {
 content:"\f0c6"
}
.fa-save:before,
.fa-floppy-o:before {
 content:"\f0c7"
}
.fa-square:before {
 content:"\f0c8"
}
.fa-navicon:before,
.fa-reorder:before,
.fa-bars:before {
 content:"\f0c9"
}
.fa-list-ul:before {
 content:"\f0ca"
}
.fa-list-ol:before {
 content:"\f0cb"
}
.fa-strikethrough:before {
 content:"\f0cc"
}
.fa-underline:before {
 content:"\f0cd"
}
.fa-table:before {
 content:"\f0ce"
}
.fa-magic:before {
 content:"\f0d0"
}
.fa-truck:before {
 content:"\f0d1"
}
.fa-pinterest:before {
 content:"\f0d2"
}
.fa-pinterest-square:before {
 content:"\f0d3"
}
.fa-google-plus-square:before {
 content:"\f0d4"
}
.fa-google-plus:before {
 content:"\f0d5"
}
.fa-money:before {
 content:"\f0d6"
}
.fa-caret-down:before {
 content:"\f0d7"
}
.fa-caret-up:before {
 content:"\f0d8"
}
.fa-caret-left:before {
 content:"\f0d9"
}
.fa-caret-right:before {
 content:"\f0da"
}
.fa-columns:before {
 content:"\f0db"
}
.fa-unsorted:before,
.fa-sort:before {
 content:"\f0dc"
}
.fa-sort-down:before,
.fa-sort-desc:before {
 content:"\f0dd"
}
.fa-sort-up:before,
.fa-sort-asc:before {
 content:"\f0de"
}
.fa-envelope:before {
 content:"\f0e0"
}
.fa-linkedin:before {
 content:"\f0e1"
}
.fa-rotate-left:before,
.fa-undo:before {
 content:"\f0e2"
}
.fa-legal:before,
.fa-gavel:before {
 content:"\f0e3"
}
.fa-dashboard:before,
.fa-tachometer:before {
 content:"\f0e4"
}
.fa-comment-o:before {
 content:"\f0e5"
}
.fa-comments-o:before {
 content:"\f0e6"
}
.fa-flash:before,
.fa-bolt:before {
 content:"\f0e7"
}
.fa-sitemap:before {
 content:"\f0e8"
}
.fa-umbrella:before {
 content:"\f0e9"
}
.fa-paste:before,
.fa-clipboard:before {
 content:"\f0ea"
}
.fa-lightbulb-o:before {
 content:"\f0eb"
}
.fa-exchange:before {
 content:"\f0ec"
}
.fa-cloud-download:before {
 content:"\f0ed"
}
.fa-cloud-upload:before {
 content:"\f0ee"
}
.fa-user-md:before {
 content:"\f0f0"
}
.fa-stethoscope:before {
 content:"\f0f1"
}
.fa-suitcase:before {
 content:"\f0f2"
}
.fa-bell-o:before {
 content:"\f0a2"
}
.fa-coffee:before {
 content:"\f0f4"
}
.fa-cutlery:before {
 content:"\f0f5"
}
.fa-file-text-o:before {
 content:"\f0f6"
}
.fa-building-o:before {
 content:"\f0f7"
}
.fa-hospital-o:before {
 content:"\f0f8"
}
.fa-ambulance:before {
 content:"\f0f9"
}
.fa-medkit:before {
 content:"\f0fa"
}
.fa-fighter-jet:before {
 content:"\f0fb"
}
.fa-beer:before {
 content:"\f0fc"
}
.fa-h-square:before {
 content:"\f0fd"
}
.fa-plus-square:before {
 content:"\f0fe"
}
.fa-angle-double-left:before {
 content:"\f100"
}
.fa-angle-double-right:before {
 content:"\f101"
}
.fa-angle-double-up:before {
 content:"\f102"
}
.fa-angle-double-down:before {
 content:"\f103"
}
.fa-angle-left:before {
 content:"\f104"
}
.fa-angle-right:before {
 content:"\f105"
}
.fa-angle-up:before {
 content:"\f106"
}
.fa-angle-down:before {
 content:"\f107"
}
.fa-desktop:before {
 content:"\f108"
}
.fa-laptop:before {
 content:"\f109"
}
.fa-tablet:before {
 content:"\f10a"
}
.fa-mobile-phone:before,
.fa-mobile:before {
 content:"\f10b"
}
.fa-circle-o:before {
 content:"\f10c"
}
.fa-quote-left:before {
 content:"\f10d"
}
.fa-quote-right:before {
 content:"\f10e"
}
.fa-spinner:before {
 content:"\f110"
}
.fa-circle:before {
 content:"\f111"
}
.fa-mail-reply:before,
.fa-reply:before {
 content:"\f112"
}
.fa-github-alt:before {
 content:"\f113"
}
.fa-folder-o:before {
 content:"\f114"
}
.fa-folder-open-o:before {
 content:"\f115"
}
.fa-smile-o:before {
 content:"\f118"
}
.fa-frown-o:before {
 content:"\f119"
}
.fa-meh-o:before {
 content:"\f11a"
}
.fa-gamepad:before {
 content:"\f11b"
}
.fa-keyboard-o:before {
 content:"\f11c"
}
.fa-flag-o:before {
 content:"\f11d"
}
.fa-flag-checkered:before {
 content:"\f11e"
}
.fa-terminal:before {
 content:"\f120"
}
.fa-code:before {
 content:"\f121"
}
.fa-mail-reply-all:before,
.fa-reply-all:before {
 content:"\f122"
}
.fa-star-half-empty:before,
.fa-star-half-full:before,
.fa-star-half-o:before {
 content:"\f123"
}
.fa-location-arrow:before {
 content:"\f124"
}
.fa-crop:before {
 content:"\f125"
}
.fa-code-fork:before {
 content:"\f126"
}
.fa-unlink:before,
.fa-chain-broken:before {
 content:"\f127"
}
.fa-question:before {
 content:"\f128"
}
.fa-info:before {
 content:"\f129"
}
.fa-exclamation:before {
 content:"\f12a"
}
.fa-superscript:before {
 content:"\f12b"
}
.fa-subscript:before {
 content:"\f12c"
}
.fa-eraser:before {
 content:"\f12d"
}
.fa-puzzle-piece:before {
 content:"\f12e"
}
.fa-microphone:before {
 content:"\f130"
}
.fa-microphone-slash:before {
 content:"\f131"
}
.fa-shield:before {
 content:"\f132"
}
.fa-calendar-o:before {
 content:"\f133"
}
.fa-fire-extinguisher:before {
 content:"\f134"
}
.fa-rocket:before {
 content:"\f135"
}
.fa-maxcdn:before {
 content:"\f136"
}
.fa-chevron-circle-left:before {
 content:"\f137"
}
.fa-chevron-circle-right:before {
 content:"\f138"
}
.fa-chevron-circle-up:before {
 content:"\f139"
}
.fa-chevron-circle-down:before {
 content:"\f13a"
}
.fa-html5:before {
 content:"\f13b"
}
.fa-css3:before {
 content:"\f13c"
}
.fa-anchor:before {
 content:"\f13d"
}
.fa-unlock-alt:before {
 content:"\f13e"
}
.fa-bullseye:before {
 content:"\f140"
}
.fa-ellipsis-h:before {
 content:"\f141"
}
.fa-ellipsis-v:before {
 content:"\f142"
}
.fa-rss-square:before {
 content:"\f143"
}
.fa-play-circle:before {
 content:"\f144"
}
.fa-ticket:before {
 content:"\f145"
}
.fa-minus-square:before {
 content:"\f146"
}
.fa-minus-square-o:before {
 content:"\f147"
}
.fa-level-up:before {
 content:"\f148"
}
.fa-level-down:before {
 content:"\f149"
}
.fa-check-square:before {
 content:"\f14a"
}
.fa-pencil-square:before {
 content:"\f14b"
}
.fa-external-link-square:before {
 content:"\f14c"
}
.fa-share-square:before {
 content:"\f14d"
}
.fa-compass:before {
 content:"\f14e"
}
.fa-toggle-down:before,
.fa-caret-square-o-down:before {
 content:"\f150"
}
.fa-toggle-up:before,
.fa-caret-square-o-up:before {
 content:"\f151"
}
.fa-toggle-right:before,
.fa-caret-square-o-right:before {
 content:"\f152"
}
.fa-euro:before,
.fa-eur:before {
 content:"\f153"
}
.fa-gbp:before {
 content:"\f154"
}
.fa-dollar:before,
.fa-usd:before {
 content:"\f155"
}
.fa-rupee:before,
.fa-inr:before {
 content:"\f156"
}
.fa-cny:before,
.fa-rmb:before,
.fa-yen:before,
.fa-jpy:before {
 content:"\f157"
}
.fa-ruble:before,
.fa-rouble:before,
.fa-rub:before {
 content:"\f158"
}
.fa-won:before,
.fa-krw:before {
 content:"\f159"
}
.fa-bitcoin:before,
.fa-btc:before {
 content:"\f15a"
}
.fa-file:before {
 content:"\f15b"
}
.fa-file-text:before {
 content:"\f15c"
}
.fa-sort-alpha-asc:before {
 content:"\f15d"
}
.fa-sort-alpha-desc:before {
 content:"\f15e"
}
.fa-sort-amount-asc:before {
 content:"\f160"
}
.fa-sort-amount-desc:before {
 content:"\f161"
}
.fa-sort-numeric-asc:before {
 content:"\f162"
}
.fa-sort-numeric-desc:before {
 content:"\f163"
}
.fa-thumbs-up:before {
 content:"\f164"
}
.fa-thumbs-down:before {
 content:"\f165"
}
.fa-youtube-square:before {
 content:"\f166"
}
.fa-youtube:before {
 content:"\f167"
}
.fa-xing:before {
 content:"\f168"
}
.fa-xing-square:before {
 content:"\f169"
}
.fa-youtube-play:before {
 content:"\f16a"
}
.fa-dropbox:before {
 content:"\f16b"
}
.fa-stack-overflow:before {
 content:"\f16c"
}
.fa-instagram:before {
 content:"\f16d"
}
.fa-flickr:before {
 content:"\f16e"
}
.fa-adn:before {
 content:"\f170"
}
.fa-bitbucket:before {
 content:"\f171"
}
.fa-bitbucket-square:before {
 content:"\f172"
}
.fa-tumblr:before {
 content:"\f173"
}
.fa-tumblr-square:before {
 content:"\f174"
}
.fa-long-arrow-down:before {
 content:"\f175"
}
.fa-long-arrow-up:before {
 content:"\f176"
}
.fa-long-arrow-left:before {
 content:"\f177"
}
.fa-long-arrow-right:before {
 content:"\f178"
}
.fa-apple:before {
 content:"\f179"
}
.fa-windows:before {
 content:"\f17a"
}
.fa-android:before {
 content:"\f17b"
}
.fa-linux:before {
 content:"\f17c"
}
.fa-dribbble:before {
 content:"\f17d"
}
.fa-skype:before {
 content:"\f17e"
}
.fa-foursquare:before {
 content:"\f180"
}
.fa-trello:before {
 content:"\f181"
}
.fa-female:before {
 content:"\f182"
}
.fa-male:before {
 content:"\f183"
}
.fa-gittip:before,
.fa-gratipay:before {
 content:"\f184"
}
.fa-sun-o:before {
 content:"\f185"
}
.fa-moon-o:before {
 content:"\f186"
}
.fa-archive:before {
 content:"\f187"
}
.fa-bug:before {
 content:"\f188"
}
.fa-vk:before {
 content:"\f189"
}
.fa-weibo:before {
 content:"\f18a"
}
.fa-renren:before {
 content:"\f18b"
}
.fa-pagelines:before {
 content:"\f18c"
}
.fa-stack-exchange:before {
 content:"\f18d"
}
.fa-arrow-circle-o-right:before {
 content:"\f18e"
}
.fa-arrow-circle-o-left:before {
 content:"\f190"
}
.fa-toggle-left:before,
.fa-caret-square-o-left:before {
 content:"\f191"
}
.fa-dot-circle-o:before {
 content:"\f192"
}
.fa-wheelchair:before {
 content:"\f193"
}
.fa-vimeo-square:before {
 content:"\f194"
}
.fa-turkish-lira:before,
.fa-try:before {
 content:"\f195"
}
.fa-plus-square-o:before {
 content:"\f196"
}
.fa-space-shuttle:before {
 content:"\f197"
}
.fa-slack:before {
 content:"\f198"
}
.fa-envelope-square:before {
 content:"\f199"
}
.fa-wordpress:before {
 content:"\f19a"
}
.fa-openid:before {
 content:"\f19b"
}
.fa-institution:before,
.fa-bank:before,
.fa-university:before {
 content:"\f19c"
}
.fa-mortar-board:before,
.fa-graduation-cap:before {
 content:"\f19d"
}
.fa-yahoo:before {
 content:"\f19e"
}
.fa-google:before {
 content:"\f1a0"
}
.fa-reddit:before {
 content:"\f1a1"
}
.fa-reddit-square:before {
 content:"\f1a2"
}
.fa-stumbleupon-circle:before {
 content:"\f1a3"
}
.fa-stumbleupon:before {
 content:"\f1a4"
}
.fa-delicious:before {
 content:"\f1a5"
}
.fa-digg:before {
 content:"\f1a6"
}
.fa-pied-piper-pp:before {
 content:"\f1a7"
}
.fa-pied-piper-alt:before {
 content:"\f1a8"
}
.fa-drupal:before {
 content:"\f1a9"
}
.fa-joomla:before {
 content:"\f1aa"
}
.fa-language:before {
 content:"\f1ab"
}
.fa-fax:before {
 content:"\f1ac"
}
.fa-building:before {
 content:"\f1ad"
}
.fa-child:before {
 content:"\f1ae"
}
.fa-paw:before {
 content:"\f1b0"
}
.fa-spoon:before {
 content:"\f1b1"
}
.fa-cube:before {
 content:"\f1b2"
}
.fa-cubes:before {
 content:"\f1b3"
}
.fa-behance:before {
 content:"\f1b4"
}
.fa-behance-square:before {
 content:"\f1b5"
}
.fa-steam:before {
 content:"\f1b6"
}
.fa-steam-square:before {
 content:"\f1b7"
}
.fa-recycle:before {
 content:"\f1b8"
}
.fa-automobile:before,
.fa-car:before {
 content:"\f1b9"
}
.fa-cab:before,
.fa-taxi:before {
 content:"\f1ba"
}
.fa-tree:before {
 content:"\f1bb"
}
.fa-spotify:before {
 content:"\f1bc"
}
.fa-deviantart:before {
 content:"\f1bd"
}
.fa-soundcloud:before {
 content:"\f1be"
}
.fa-database:before {
 content:"\f1c0"
}
.fa-file-pdf-o:before {
 content:"\f1c1"
}
.fa-file-word-o:before {
 content:"\f1c2"
}
.fa-file-excel-o:before {
 content:"\f1c3"
}
.fa-file-powerpoint-o:before {
 content:"\f1c4"
}
.fa-file-photo-o:before,
.fa-file-picture-o:before,
.fa-file-image-o:before {
 content:"\f1c5"
}
.fa-file-zip-o:before,
.fa-file-archive-o:before {
 content:"\f1c6"
}
.fa-file-sound-o:before,
.fa-file-audio-o:before {
 content:"\f1c7"
}
.fa-file-movie-o:before,
.fa-file-video-o:before {
 content:"\f1c8"
}
.fa-file-code-o:before {
 content:"\f1c9"
}
.fa-vine:before {
 content:"\f1ca"
}
.fa-codepen:before {
 content:"\f1cb"
}
.fa-jsfiddle:before {
 content:"\f1cc"
}
.fa-life-bouy:before,
.fa-life-buoy:before,
.fa-life-saver:before,
.fa-support:before,
.fa-life-ring:before {
 content:"\f1cd"
}
.fa-circle-o-notch:before {
 content:"\f1ce"
}
.fa-ra:before,
.fa-resistance:before,
.fa-rebel:before {
 content:"\f1d0"
}
.fa-ge:before,
.fa-empire:before {
 content:"\f1d1"
}
.fa-git-square:before {
 content:"\f1d2"
}
.fa-git:before {
 content:"\f1d3"
}
.fa-y-combinator-square:before,
.fa-yc-square:before,
.fa-hacker-news:before {
 content:"\f1d4"
}
.fa-tencent-weibo:before {
 content:"\f1d5"
}
.fa-qq:before {
 content:"\f1d6"
}
.fa-wechat:before,
.fa-weixin:before {
 content:"\f1d7"
}
.fa-send:before,
.fa-paper-plane:before {
 content:"\f1d8"
}
.fa-send-o:before,
.fa-paper-plane-o:before {
 content:"\f1d9"
}
.fa-history:before {
 content:"\f1da"
}
.fa-circle-thin:before {
 content:"\f1db"
}
.fa-header:before {
 content:"\f1dc"
}
.fa-paragraph:before {
 content:"\f1dd"
}
.fa-sliders:before {
 content:"\f1de"
}
.fa-share-alt:before {
 content:"\f1e0"
}
.fa-share-alt-square:before {
 content:"\f1e1"
}
.fa-bomb:before {
 content:"\f1e2"
}
.fa-soccer-ball-o:before,
.fa-futbol-o:before {
 content:"\f1e3"
}
.fa-tty:before {
 content:"\f1e4"
}
.fa-binoculars:before {
 content:"\f1e5"
}
.fa-plug:before {
 content:"\f1e6"
}
.fa-slideshare:before {
 content:"\f1e7"
}
.fa-twitch:before {
 content:"\f1e8"
}
.fa-yelp:before {
 content:"\f1e9"
}
.fa-newspaper-o:before {
 content:"\f1ea"
}
.fa-wifi:before {
 content:"\f1eb"
}
.fa-calculator:before {
 content:"\f1ec"
}
.fa-paypal:before {
 content:"\f1ed"
}
.fa-google-wallet:before {
 content:"\f1ee"
}
.fa-cc-visa:before {
 content:"\f1f0"
}
.fa-cc-mastercard:before {
 content:"\f1f1"
}
.fa-cc-discover:before {
 content:"\f1f2"
}
.fa-cc-amex:before {
 content:"\f1f3"
}
.fa-cc-paypal:before {
 content:"\f1f4"
}
.fa-cc-stripe:before {
 content:"\f1f5"
}
.fa-bell-slash:before {
 content:"\f1f6"
}
.fa-bell-slash-o:before {
 content:"\f1f7"
}
.fa-trash:before {
 content:"\f1f8"
}
.fa-copyright:before {
 content:"\f1f9"
}
.fa-at:before {
 content:"\f1fa"
}
.fa-eyedropper:before {
 content:"\f1fb"
}
.fa-paint-brush:before {
 content:"\f1fc"
}
.fa-birthday-cake:before {
 content:"\f1fd"
}
.fa-area-chart:before {
 content:"\f1fe"
}
.fa-pie-chart:before {
 content:"\f200"
}
.fa-line-chart:before {
 content:"\f201"
}
.fa-lastfm:before {
 content:"\f202"
}
.fa-lastfm-square:before {
 content:"\f203"
}
.fa-toggle-off:before {
 content:"\f204"
}
.fa-toggle-on:before {
 content:"\f205"
}
.fa-bicycle:before {
 content:"\f206"
}
.fa-bus:before {
 content:"\f207"
}
.fa-ioxhost:before {
 content:"\f208"
}
.fa-angellist:before {
 content:"\f209"
}
.fa-cc:before {
 content:"\f20a"
}
.fa-shekel:before,
.fa-sheqel:before,
.fa-ils:before {
 content:"\f20b"
}
.fa-meanpath:before {
 content:"\f20c"
}
.fa-buysellads:before {
 content:"\f20d"
}
.fa-connectdevelop:before {
 content:"\f20e"
}
.fa-dashcube:before {
 content:"\f210"
}
.fa-forumbee:before {
 content:"\f211"
}
.fa-leanpub:before {
 content:"\f212"
}
.fa-sellsy:before {
 content:"\f213"
}
.fa-shirtsinbulk:before {
 content:"\f214"
}
.fa-simplybuilt:before {
 content:"\f215"
}
.fa-skyatlas:before {
 content:"\f216"
}
.fa-cart-plus:before {
 content:"\f217"
}
.fa-cart-arrow-down:before {
 content:"\f218"
}
.fa-diamond:before {
 content:"\f219"
}
.fa-ship:before {
 content:"\f21a"
}
.fa-user-secret:before {
 content:"\f21b"
}
.fa-motorcycle:before {
 content:"\f21c"
}
.fa-street-view:before {
 content:"\f21d"
}
.fa-heartbeat:before {
 content:"\f21e"
}
.fa-venus:before {
 content:"\f221"
}
.fa-mars:before {
 content:"\f222"
}
.fa-mercury:before {
 content:"\f223"
}
.fa-intersex:before,
.fa-transgender:before {
 content:"\f224"
}
.fa-transgender-alt:before {
 content:"\f225"
}
.fa-venus-double:before {
 content:"\f226"
}
.fa-mars-double:before {
 content:"\f227"
}
.fa-venus-mars:before {
 content:"\f228"
}
.fa-mars-stroke:before {
 content:"\f229"
}
.fa-mars-stroke-v:before {
 content:"\f22a"
}
.fa-mars-stroke-h:before {
 content:"\f22b"
}
.fa-neuter:before {
 content:"\f22c"
}
.fa-genderless:before {
 content:"\f22d"
}
.fa-facebook-official:before {
 content:"\f230"
}
.fa-pinterest-p:before {
 content:"\f231"
}
.fa-whatsapp:before {
 content:"\f232"
}
.fa-server:before {
 content:"\f233"
}
.fa-user-plus:before {
 content:"\f234"
}
.fa-user-times:before {
 content:"\f235"
}
.fa-hotel:before,
.fa-bed:before {
 content:"\f236"
}
.fa-viacoin:before {
 content:"\f237"
}
.fa-train:before {
 content:"\f238"
}
.fa-subway:before {
 content:"\f239"
}
.fa-medium:before {
 content:"\f23a"
}
.fa-yc:before,
.fa-y-combinator:before {
 content:"\f23b"
}
.fa-optin-monster:before {
 content:"\f23c"
}
.fa-opencart:before {
 content:"\f23d"
}
.fa-expeditedssl:before {
 content:"\f23e"
}
.fa-battery-4:before,
.fa-battery:before,
.fa-battery-full:before {
 content:"\f240"
}
.fa-battery-3:before,
.fa-battery-three-quarters:before {
 content:"\f241"
}
.fa-battery-2:before,
.fa-battery-half:before {
 content:"\f242"
}
.fa-battery-1:before,
.fa-battery-quarter:before {
 content:"\f243"
}
.fa-battery-0:before,
.fa-battery-empty:before {
 content:"\f244"
}
.fa-mouse-pointer:before {
 content:"\f245"
}
.fa-i-cursor:before {
 content:"\f246"
}
.fa-object-group:before {
 content:"\f247"
}
.fa-object-ungroup:before {
 content:"\f248"
}
.fa-sticky-note:before {
 content:"\f249"
}
.fa-sticky-note-o:before {
 content:"\f24a"
}
.fa-cc-jcb:before {
 content:"\f24b"
}
.fa-cc-diners-club:before {
 content:"\f24c"
}
.fa-clone:before {
 content:"\f24d"
}
.fa-balance-scale:before {
 content:"\f24e"
}
.fa-hourglass-o:before {
 content:"\f250"
}
.fa-hourglass-1:before,
.fa-hourglass-start:before {
 content:"\f251"
}
.fa-hourglass-2:before,
.fa-hourglass-half:before {
 content:"\f252"
}
.fa-hourglass-3:before,
.fa-hourglass-end:before {
 content:"\f253"
}
.fa-hourglass:before {
 content:"\f254"
}
.fa-hand-grab-o:before,
.fa-hand-rock-o:before {
 content:"\f255"
}
.fa-hand-stop-o:before,
.fa-hand-paper-o:before {
 content:"\f256"
}
.fa-hand-scissors-o:before {
 content:"\f257"
}
.fa-hand-lizard-o:before {
 content:"\f258"
}
.fa-hand-spock-o:before {
 content:"\f259"
}
.fa-hand-pointer-o:before {
 content:"\f25a"
}
.fa-hand-peace-o:before {
 content:"\f25b"
}
.fa-trademark:before {
 content:"\f25c"
}
.fa-registered:before {
 content:"\f25d"
}
.fa-creative-commons:before {
 content:"\f25e"
}
.fa-gg:before {
 content:"\f260"
}
.fa-gg-circle:before {
 content:"\f261"
}
.fa-tripadvisor:before {
 content:"\f262"
}
.fa-odnoklassniki:before {
 content:"\f263"
}
.fa-odnoklassniki-square:before {
 content:"\f264"
}
.fa-get-pocket:before {
 content:"\f265"
}
.fa-wikipedia-w:before {
 content:"\f266"
}
.fa-safari:before {
 content:"\f267"
}
.fa-chrome:before {
 content:"\f268"
}
.fa-firefox:before {
 content:"\f269"
}
.fa-opera:before {
 content:"\f26a"
}
.fa-internet-explorer:before {
 content:"\f26b"
}
.fa-tv:before,
.fa-television:before {
 content:"\f26c"
}
.fa-contao:before {
 content:"\f26d"
}
.fa-500px:before {
 content:"\f26e"
}
.fa-amazon:before {
 content:"\f270"
}
.fa-calendar-plus-o:before {
 content:"\f271"
}
.fa-calendar-minus-o:before {
 content:"\f272"
}
.fa-calendar-times-o:before {
 content:"\f273"
}
.fa-calendar-check-o:before {
 content:"\f274"
}
.fa-industry:before {
 content:"\f275"
}
.fa-map-pin:before {
 content:"\f276"
}
.fa-map-signs:before {
 content:"\f277"
}
.fa-map-o:before {
 content:"\f278"
}
.fa-map:before {
 content:"\f279"
}
.fa-commenting:before {
 content:"\f27a"
}
.fa-commenting-o:before {
 content:"\f27b"
}
.fa-houzz:before {
 content:"\f27c"
}
.fa-vimeo:before {
 content:"\f27d"
}
.fa-black-tie:before {
 content:"\f27e"
}
.fa-fonticons:before {
 content:"\f280"
}
.fa-reddit-alien:before {
 content:"\f281"
}
.fa-edge:before {
 content:"\f282"
}
.fa-credit-card-alt:before {
 content:"\f283"
}
.fa-codiepie:before {
 content:"\f284"
}
.fa-modx:before {
 content:"\f285"
}
.fa-fort-awesome:before {
 content:"\f286"
}
.fa-usb:before {
 content:"\f287"
}
.fa-product-hunt:before {
 content:"\f288"
}
.fa-mixcloud:before {
 content:"\f289"
}
.fa-scribd:before {
 content:"\f28a"
}
.fa-pause-circle:before {
 content:"\f28b"
}
.fa-pause-circle-o:before {
 content:"\f28c"
}
.fa-stop-circle:before {
 content:"\f28d"
}
.fa-stop-circle-o:before {
 content:"\f28e"
}
.fa-shopping-bag:before {
 content:"\f290"
}
.fa-shopping-basket:before {
 content:"\f291"
}
.fa-hashtag:before {
 content:"\f292"
}
.fa-bluetooth:before {
 content:"\f293"
}
.fa-bluetooth-b:before {
 content:"\f294"
}
.fa-percent:before {
 content:"\f295"
}
.fa-gitlab:before {
 content:"\f296"
}
.fa-wpbeginner:before {
 content:"\f297"
}
.fa-wpforms:before {
 content:"\f298"
}
.fa-envira:before {
 content:"\f299"
}
.fa-universal-access:before {
 content:"\f29a"
}
.fa-wheelchair-alt:before {
 content:"\f29b"
}
.fa-question-circle-o:before {
 content:"\f29c"
}
.fa-blind:before {
 content:"\f29d"
}
.fa-audio-description:before {
 content:"\f29e"
}
.fa-volume-control-phone:before {
 content:"\f2a0"
}
.fa-braille:before {
 content:"\f2a1"
}
.fa-assistive-listening-systems:before {
 content:"\f2a2"
}
.fa-asl-interpreting:before,
.fa-american-sign-language-interpreting:before {
 content:"\f2a3"
}
.fa-deafness:before,
.fa-hard-of-hearing:before,
.fa-deaf:before {
 content:"\f2a4"
}
.fa-glide:before {
 content:"\f2a5"
}
.fa-glide-g:before {
 content:"\f2a6"
}
.fa-signing:before,
.fa-sign-language:before {
 content:"\f2a7"
}
.fa-low-vision:before {
 content:"\f2a8"
}
.fa-viadeo:before {
 content:"\f2a9"
}
.fa-viadeo-square:before {
 content:"\f2aa"
}
.fa-snapchat:before {
 content:"\f2ab"
}
.fa-snapchat-ghost:before {
 content:"\f2ac"
}
.fa-snapchat-square:before {
 content:"\f2ad"
}
.fa-pied-piper:before {
 content:"\f2ae"
}
.fa-first-order:before {
 content:"\f2b0"
}
.fa-yoast:before {
 content:"\f2b1"
}
.fa-themeisle:before {
 content:"\f2b2"
}
.fa-google-plus-circle:before,
.fa-google-plus-official:before {
 content:"\f2b3"
}
.fa-fa:before,
.fa-font-awesome:before {
 content:"\f2b4"
}
.fa-handshake-o:before {
 content:"\f2b5"
}
.fa-envelope-open:before {
 content:"\f2b6"
}
.fa-envelope-open-o:before {
 content:"\f2b7"
}
.fa-linode:before {
 content:"\f2b8"
}
.fa-address-book:before {
 content:"\f2b9"
}
.fa-address-book-o:before {
 content:"\f2ba"
}
.fa-vcard:before,
.fa-address-card:before {
 content:"\f2bb"
}
.fa-vcard-o:before,
.fa-address-card-o:before {
 content:"\f2bc"
}
.fa-user-circle:before {
 content:"\f2bd"
}
.fa-user-circle-o:before {
 content:"\f2be"
}
.fa-user-o:before {
 content:"\f2c0"
}
.fa-id-badge:before {
 content:"\f2c1"
}
.fa-drivers-license:before,
.fa-id-card:before {
 content:"\f2c2"
}
.fa-drivers-license-o:before,
.fa-id-card-o:before {
 content:"\f2c3"
}
.fa-quora:before {
 content:"\f2c4"
}
.fa-free-code-camp:before {
 content:"\f2c5"
}
.fa-telegram:before {
 content:"\f2c6"
}
.fa-thermometer-4:before,
.fa-thermometer:before,
.fa-thermometer-full:before {
 content:"\f2c7"
}
.fa-thermometer-3:before,
.fa-thermometer-three-quarters:before {
 content:"\f2c8"
}
.fa-thermometer-2:before,
.fa-thermometer-half:before {
 content:"\f2c9"
}
.fa-thermometer-1:before,
.fa-thermometer-quarter:before {
 content:"\f2ca"
}
.fa-thermometer-0:before,
.fa-thermometer-empty:before {
 content:"\f2cb"
}
.fa-shower:before {
 content:"\f2cc"
}
.fa-bathtub:before,
.fa-s15:before,
.fa-bath:before {
 content:"\f2cd"
}
.fa-podcast:before {
 content:"\f2ce"
}
.fa-window-maximize:before {
 content:"\f2d0"
}
.fa-window-minimize:before {
 content:"\f2d1"
}
.fa-window-restore:before {
 content:"\f2d2"
}
.fa-times-rectangle:before,
.fa-window-close:before {
 content:"\f2d3"
}
.fa-times-rectangle-o:before,
.fa-window-close-o:before {
 content:"\f2d4"
}
.fa-bandcamp:before {
 content:"\f2d5"
}
.fa-grav:before {
 content:"\f2d6"
}
.fa-etsy:before {
 content:"\f2d7"
}
.fa-imdb:before {
 content:"\f2d8"
}
.fa-ravelry:before {
 content:"\f2d9"
}
.fa-eercast:before {
 content:"\f2da"
}
.fa-microchip:before {
 content:"\f2db"
}
.fa-snowflake-o:before {
 content:"\f2dc"
}
.fa-superpowers:before {
 content:"\f2dd"
}
.fa-wpexplorer:before {
 content:"\f2de"
}
.fa-meetup:before {
 content:"\f2e0"
}
.sr-only {
 position:absolute;
 width:1px;
 height:1px;
 padding:0;
 margin:-1px;
 overflow:hidden;
 clip:rect(0,0,0,0);
 border:0
}
.sr-only-focusable:active,
.sr-only-focusable:focus {
 position:static;
 width:auto;
 height:auto;
 margin:0;
 overflow:visible;
 clip:auto
}
.font-6 {
 font-size:6px
}
.font-7 {
 font-size:7px
}
.font-8 {
 font-size:8px
}
.font-9 {
 font-size:9px
}
.font-10,
.choose-skin li.active:after,
.choose-skin li:hover:after,
.sidebar-skin li.active:after,
.sidebar-skin li:hover:after {
 font-size:10px
}
.font-11 {
 font-size:11px
}
.font-12,
.nav-tabs .nav-item i,
.card-title small,
.multiselect-custom+.btn-group ul.multiselect-container>li.active>a label.checkbox:before,
.wizard .content .body label.error,
.contact-list li .contact-name span,
.chat_app .chat_windows .message .time,
#calendar.fc .fc-view-container .fc-view.fc-basic-view .fc-agenda-allday .fc-agenda-axis,
#calendar.fc .fc-view-container .fc-view.fc-basic-view .fc-agenda-allday .fc-agenda-gutter,
#calendar.fc .fc-view-container .fc-view.fc-agenda .fc-agenda-allday .fc-agenda-axis,
#calendar.fc .fc-view-container .fc-view.fc-agenda .fc-agenda-allday .fc-agenda-gutter,
#calendar.fc .fc-view-container .fc-view.fc-basic-view .fc-agenda-slots tr th,
#calendar.fc .fc-view-container .fc-view.fc-agenda .fc-agenda-slots tr th,
.new_timeline .time {
 font-size:12px
}
.font-13,
.right_chat .media .message,
.new_timeline h4 {
 font-size:13px
}
.font-14,
.card-subtitle,
.card-category,
.multiselect-custom+.btn-group ul.multiselect-container>li>a label.checkbox,
#calendar.fc .fc-toolbar .fc-today-button,
#calendar.fc .fc-toolbar .fc-state-default {
 font-size:14px
}
.font-15,
.nav-tabs .nav-link,
.wizard .steps .number,
.contact-list li .contact-name,
#calendar.fc .fc-view-container .fc-view.fc-basic-view>table tbody tr td.fc-day-number,
#calendar.fc .fc-view-container .fc-view.fc-agenda>table tbody tr td.fc-day-number,
.blog_single_post .stats li,
.new_timeline h3,
.taskboard .dd-handle::after,
.taskboard .dd-handle p {
 font-size:15px
}
.font-16 {
 font-size:16px
}
.font-17,
.inbox .from a,
.blog_left .blog_post .content .text,
.blog_left .blog_post ul li {
 font-size:17px
}
.font-18 {
 font-size:18px
}
.font-19 {
 font-size:19px
}
.font-20,
#calendar.fc .fc-toolbar h2,
.top_counter .icon i {
 font-size:20px
}
.font-21 {
 font-size:21px
}
.font-22,
.w_social_state .icon {
 font-size:22px
}
.font-23 {
 font-size:23px
}
.font-24,
.blog_left .blog_post .content .title {
 font-size:24px
}
.font-25 {
 font-size:25px
}
.font-26 {
 font-size:26px
}
.font-27 {
 font-size:27px
}
.font-28 {
 font-size:28px
}
.font-29 {
 font-size:29px
}
.font-30,
.file_folder .icon i,
.w_card3 i {
 font-size:30px
}
.font-31 {
 font-size:31px
}
.font-32 {
 font-size:32px
}
.font-33 {
 font-size:33px
}
.font-34 {
 font-size:34px
}
.font-35 {
 font-size:35px
}
.font-36 {
 font-size:36px
}
.font-37,
.widgets2 .icon {
 font-size:37px
}
.font-38 {
 font-size:38px
}
.font-39 {
 font-size:39px
}
.font-40,
.card-value,
.card-icon {
 font-size:40px
}
.font-41 {
 font-size:41px
}
.font-42 {
 font-size:42px
}
.font-43 {
 font-size:43px
}
.font-44 {
 font-size:44px
}
.font-45 {
 font-size:45px
}
.font-46 {
 font-size:46px
}
.font-47 {
 font-size:47px
}
.font-48 {
 font-size:48px
}
.font-49 {
 font-size:49px
}
.font-50 {
 font-size:50px
}
.inlineblock {
 display:inline-block
}
.iblock {
 display:inline-block
}
.dblock {
 display:block
}
.displaynone {
 display:none
}
.overflowhidden {
 overflow:hidden
}
.b-none {
 border:0!important
}
.bg-none {
 background:0 0!important
}
.bg-none .card-header,
.bg-none .card-body {
 padding-left:0;
 padding-right:0
}
.ml--125 {
 margin-left:-125px
}
.mt--125 {
 margin-top:-125px
}
.mr--125 {
 margin-right:-125px
}
.mb--125 {
 margin-bottom:-125px
}
.ml--120 {
 margin-left:-120px
}
.mt--120 {
 margin-top:-120px
}
.mr--120 {
 margin-right:-120px
}
.mb--120 {
 margin-bottom:-120px
}
.ml--115 {
 margin-left:-115px
}
.mt--115 {
 margin-top:-115px
}
.mr--115 {
 margin-right:-115px
}
.mb--115 {
 margin-bottom:-115px
}
.ml--110 {
 margin-left:-110px
}
.mt--110 {
 margin-top:-110px
}
.mr--110 {
 margin-right:-110px
}
.mb--110 {
 margin-bottom:-110px
}
.ml--105 {
 margin-left:-105px
}
.mt--105 {
 margin-top:-105px
}
.mr--105 {
 margin-right:-105px
}
.mb--105 {
 margin-bottom:-105px
}
.ml--100 {
 margin-left:-100px
}
.mt--100 {
 margin-top:-100px
}
.mr--100 {
 margin-right:-100px
}
.mb--100 {
 margin-bottom:-100px
}
.ml--95 {
 margin-left:-95px
}
.mt--95 {
 margin-top:-95px
}
.mr--95 {
 margin-right:-95px
}
.mb--95 {
 margin-bottom:-95px
}
.ml--90 {
 margin-left:-90px
}
.mt--90 {
 margin-top:-90px
}
.mr--90 {
 margin-right:-90px
}
.mb--90 {
 margin-bottom:-90px
}
.ml--85 {
 margin-left:-85px
}
.mt--85 {
 margin-top:-85px
}
.mr--85 {
 margin-right:-85px
}
.mb--85 {
 margin-bottom:-85px
}
.ml--80 {
 margin-left:-80px
}
.mt--80 {
 margin-top:-80px
}
.mr--80 {
 margin-right:-80px
}
.mb--80 {
 margin-bottom:-80px
}
.ml--75 {
 margin-left:-75px
}
.mt--75 {
 margin-top:-75px
}
.mr--75 {
 margin-right:-75px
}
.mb--75 {
 margin-bottom:-75px
}
.ml--70 {
 margin-left:-70px
}
.mt--70 {
 margin-top:-70px
}
.mr--70 {
 margin-right:-70px
}
.mb--70 {
 margin-bottom:-70px
}
.ml--65 {
 margin-left:-65px
}
.mt--65 {
 margin-top:-65px
}
.mr--65 {
 margin-right:-65px
}
.mb--65 {
 margin-bottom:-65px
}
.ml--60 {
 margin-left:-60px
}
.mt--60 {
 margin-top:-60px
}
.mr--60 {
 margin-right:-60px
}
.mb--60 {
 margin-bottom:-60px
}
.ml--55 {
 margin-left:-55px
}
.mt--55 {
 margin-top:-55px
}
.mr--55 {
 margin-right:-55px
}
.mb--55 {
 margin-bottom:-55px
}
.ml--50 {
 margin-left:-50px
}
.mt--50 {
 margin-top:-50px
}
.mr--50 {
 margin-right:-50px
}
.mb--50 {
 margin-bottom:-50px
}
.ml--45 {
 margin-left:-45px
}
.mt--45 {
 margin-top:-45px
}
.mr--45 {
 margin-right:-45px
}
.mb--45 {
 margin-bottom:-45px
}
.ml--40 {
 margin-left:-40px
}
.mt--40 {
 margin-top:-40px
}
.mr--40 {
 margin-right:-40px
}
.mb--40 {
 margin-bottom:-40px
}
.ml--35 {
 margin-left:-35px
}
.mt--35 {
 margin-top:-35px
}
.mr--35 {
 margin-right:-35px
}
.mb--35 {
 margin-bottom:-35px
}
.ml--30 {
 margin-left:-30px
}
.mt--30 {
 margin-top:-30px
}
.mr--30 {
 margin-right:-30px
}
.mb--30 {
 margin-bottom:-30px
}
.ml--25 {
 margin-left:-25px
}
.mt--25 {
 margin-top:-25px
}
.mr--25 {
 margin-right:-25px
}
.mb--25 {
 margin-bottom:-25px
}
.ml--20 {
 margin-left:-20px
}
.mt--20 {
 margin-top:-20px
}
.mr--20 {
 margin-right:-20px
}
.mb--20 {
 margin-bottom:-20px
}
.ml--15 {
 margin-left:-15px
}
.mt--15 {
 margin-top:-15px
}
.mr--15 {
 margin-right:-15px
}
.mb--15 {
 margin-bottom:-15px
}
.ml--10 {
 margin-left:-10px
}
.mt--10 {
 margin-top:-10px
}
.mr--10 {
 margin-right:-10px
}
.mb--10 {
 margin-bottom:-10px
}
.ml--5 {
 margin-left:-5px
}
.mt--5 {
 margin-top:-5px
}
.mr--5 {
 margin-right:-5px
}
.mb--5 {
 margin-bottom:-5px
}
.ml-0,
.dropdown-toggle:empty:after {
 margin-left:0
}
.mt-0 {
 margin-top:0
}
.mr-0,
.blog_left .blog_post .content .actions_sidebar a {
 margin-right:0
}
.mb-0,
.nav-tabs .nav-item,
.card-body>:last-child,
.card-header .card-title,
.card-title:only-child,
.card-table,
.custom-checkbox,
.right_sidebar .card ul,
.setting-list li:last-child,
.contact-list li .contact-name,
.chat_app .chat_windows ul li:last-child,
.right_chat,
.inbox .custom-control,
.taskboard .dd-handle h6,
.widgets2 h6,
.currency_state .number,
.feeds_widget,
.recent_comments li:last-child,
.todo_list li:last-child,
.w_user ul {
 margin-bottom:0
}
.ml-5,
.wizard .actions a {
 margin-left:5px
}
.mt-5,
.new_timeline .bullet,
.team-info {
 margin-top:5px
}
.mr-5,
.nav-tabs .nav-item i {
 margin-right:5px
}
.mb-5,
.chat_app .chat_windows .message p,
.file_folder a,
.fc.event_list .fc-event,
.blog_right .widget.popular_post .single_post {
 margin-bottom:5px
}
.ml-10,
.timeline_item {
 margin-left:10px
}
.mt-10,
.taskboard .dd-handle p {
 margin-top:10px
}
.mr-10,
.right_chat .media .media-object,
.file_folder .icon {
 margin-right:10px
}
.mb-10,
.setting-list li {
 margin-bottom:10px
}
.ml-15,
.card-options>a,
.table_e2 .c_name {
 margin-left:15px
}
.mt-15,
.blog_left .blog_post .content {
 margin-top:15px
}
.mr-15,
.contact-list li .contact-img,
.blog_left .blog_comment .user_img,
.recent_comments li .avatar_img,
.recent_comments li .comment_body a {
 margin-right:15px
}
.mb-15,
.card,
.card-profile-img,
.blog_left .blog_post .content,
.gender_overview,
.recent_comments li,
.todo_list li {
 margin-bottom:15px
}
.ml-20 {
 margin-left:20px
}
.mt-20,
.metismenu .g_heading,
.w_social_state2 .content {
 margin-top:20px
}
.mr-20,
.ct-legend li,
.social_link li,
.top_counter .icon,
.currency_state .icon,
.w_user .user_avtar {
 margin-right:20px
}
.mb-20,
.blog_left .blog_comment,
.widgets2 h2 {
 margin-bottom:20px
}
.ml-25 {
 margin-left:25px
}
.mt-25 {
 margin-top:25px
}
.mr-25 {
 margin-right:25px
}
.mb-25,
.card-title,
.contact-list li,
.file_folder {
 margin-bottom:25px
}
.ml-30 {
 margin-left:30px
}
.mt-30 {
 margin-top:30px
}
.mr-30 {
 margin-right:30px
}
.mb-30,
.chat_app .chat_windows ul li {
 margin-bottom:30px
}
.ml-35 {
 margin-left:35px
}
.mt-35 {
 margin-top:35px
}
.mr-35 {
 margin-right:35px
}
.mb-35 {
 margin-bottom:35px
}
.ml-40 {
 margin-left:40px
}
.mt-40 {
 margin-top:40px
}
.mr-40 {
 margin-right:40px
}
.mb-40 {
 margin-bottom:40px
}
.ml-45 {
 margin-left:45px
}
.mt-45 {
 margin-top:45px
}
.mr-45 {
 margin-right:45px
}
.mb-45 {
 margin-bottom:45px
}
.ml-50,
.chat_app .chat_windows .my-message {
 margin-left:50px
}
.mt-50 {
 margin-top:50px
}
.mr-50 {
 margin-right:50px
}
.mb-50 {
 margin-bottom:50px
}
.ml-55 {
 margin-left:55px
}
.mt-55 {
 margin-top:55px
}
.mr-55 {
 margin-right:55px
}
.mb-55 {
 margin-bottom:55px
}
.ml-60 {
 margin-left:60px
}
.mt-60 {
 margin-top:60px
}
.mr-60 {
 margin-right:60px
}
.mb-60 {
 margin-bottom:60px
}
.ml-65 {
 margin-left:65px
}
.mt-65 {
 margin-top:65px
}
.mr-65 {
 margin-right:65px
}
.mb-65 {
 margin-bottom:65px
}
.ml-70 {
 margin-left:70px
}
.mt-70 {
 margin-top:70px
}
.mr-70 {
 margin-right:70px
}
.mb-70 {
 margin-bottom:70px
}
.ml-75 {
 margin-left:75px
}
.mt-75 {
 margin-top:75px
}
.mr-75 {
 margin-right:75px
}
.mb-75 {
 margin-bottom:75px
}
.ml-80 {
 margin-left:80px
}
.mt-80 {
 margin-top:80px
}
.mr-80 {
 margin-right:80px
}
.mb-80 {
 margin-bottom:80px
}
.ml-85 {
 margin-left:85px
}
.mt-85 {
 margin-top:85px
}
.mr-85 {
 margin-right:85px
}
.mb-85 {
 margin-bottom:85px
}
.ml-90 {
 margin-left:90px
}
.mt-90 {
 margin-top:90px
}
.mr-90 {
 margin-right:90px
}
.mb-90 {
 margin-bottom:90px
}
.ml-95 {
 margin-left:95px
}
.mt-95 {
 margin-top:95px
}
.mr-95 {
 margin-right:95px
}
.mb-95 {
 margin-bottom:95px
}
.ml-100 {
 margin-left:100px
}
.mt-100 {
 margin-top:100px
}
.mr-100 {
 margin-right:100px
}
.mb-100 {
 margin-bottom:100px
}
.ml-105 {
 margin-left:105px
}
.mt-105 {
 margin-top:105px
}
.mr-105 {
 margin-right:105px
}
.mb-105 {
 margin-bottom:105px
}
.ml-110 {
 margin-left:110px
}
.mt-110 {
 margin-top:110px
}
.mr-110 {
 margin-right:110px
}
.mb-110 {
 margin-bottom:110px
}
.ml-115 {
 margin-left:115px
}
.mt-115 {
 margin-top:115px
}
.mr-115 {
 margin-right:115px
}
.mb-115 {
 margin-bottom:115px
}
.ml-120 {
 margin-left:120px
}
.mt-120 {
 margin-top:120px
}
.mr-120 {
 margin-right:120px
}
.mb-120 {
 margin-bottom:120px
}
.ml-125 {
 margin-left:125px
}
.mt-125 {
 margin-top:125px
}
.mr-125 {
 margin-right:125px
}
.mb-125 {
 margin-bottom:125px
}
.margin-0,
.card-body,
.card-fullscreen,
.list-separated .list-separated-item>.row,
.custom-switch,
.wizard .content,
.wizard .content .body label.error,
.fc-overlay.left,
.fc-overlay.right,
#calendar.fc .fc-toolbar,
#calendar.fc .fc-toolbar h2,
.blog_left .blog_post .content .title,
.new_timeline,
.new_timeline h3,
.feeds_widget li .feeds-body .title {
 margin:0!important
}
.pl-0 {
 padding-left:0
}
.pt-0,
.card-header.border-0+.card-body,
.list-separated .list-separated-item:first-child {
 padding-top:0
}
.pr-0 {
 padding-right:0
}
.pb-0,
.list-separated .list-separated-item:last-child,
.right_sidebar .card .card-header,
.new_timeline>li:last-child,
.recent_comments li:last-child,
.todo_list li:last-child {
 padding-bottom:0
}
.pl-5 {
 padding-left:5px
}
.pt-5,
#calendar.fc .fc-toolbar h2 {
 padding-top:5px
}
.pr-5,
.wizard.vertical>.steps {
 padding-right:5px
}
.pb-5 {
 padding-bottom:5px
}
.pl-10 {
 padding-left:10px
}
.pt-10,
.right_chat,
#calendar.fc .fc-toolbar {
 padding-top:10px
}
.pr-10 {
 padding-right:10px
}
.pb-10,
.right_chat,
.new_timeline h4 {
 padding-bottom:10px
}
.pl-15 {
 padding-left:15px
}
.pt-15 {
 padding-top:15px
}
.pr-15 {
 padding-right:15px
}
.pb-15,
#calendar.fc .fc-toolbar,
.recent_comments li,
.todo_list li {
 padding-bottom:15px
}
.pl-20,
.blog_left .blog_post ul,
.new_timeline>li {
 padding-left:20px
}
.pt-20,
.blog_left .blog_comment .blog_comment {
 padding-top:20px
}
.pr-20 {
 padding-right:20px
}
.pb-20 {
 padding-bottom:20px
}
.pl-25 {
 padding-left:25px
}
.pt-25 {
 padding-top:25px
}
.pr-25 {
 padding-right:25px
}
.pb-25,
.new_timeline>li {
 padding-bottom:25px
}
.pl-30 {
 padding-left:30px
}
.pt-30 {
 padding-top:30px
}
.pr-30 {
 padding-right:30px
}
.pb-30 {
 padding-bottom:30px
}
.pl-35 {
 padding-left:35px
}
.pt-35 {
 padding-top:35px
}
.pr-35 {
 padding-right:35px
}
.pb-35 {
 padding-bottom:35px
}
.pl-40 {
 padding-left:40px
}
.pt-40 {
 padding-top:40px
}
.pr-40 {
 padding-right:40px
}
.pb-40 {
 padding-bottom:40px
}
.pl-45 {
 padding-left:45px
}
.pt-45 {
 padding-top:45px
}
.pr-45 {
 padding-right:45px
}
.pb-45 {
 padding-bottom:45px
}
.pl-50 {
 padding-left:50px
}
.pt-50 {
 padding-top:50px
}
.pr-50 {
 padding-right:50px
}
.pb-50 {
 padding-bottom:50px
}
.pl-55 {
 padding-left:55px
}
.pt-55 {
 padding-top:55px
}
.pr-55 {
 padding-right:55px
}
.pb-55 {
 padding-bottom:55px
}
.pl-60 {
 padding-left:60px
}
.pt-60 {
 padding-top:60px
}
.pr-60 {
 padding-right:60px
}
.pb-60 {
 padding-bottom:60px
}
.pl-65 {
 padding-left:65px
}
.pt-65 {
 padding-top:65px
}
.pr-65 {
 padding-right:65px
}
.pb-65 {
 padding-bottom:65px
}
.pl-70 {
 padding-left:70px
}
.pt-70 {
 padding-top:70px
}
.pr-70 {
 padding-right:70px
}
.pb-70 {
 padding-bottom:70px
}
.pl-75 {
 padding-left:75px
}
.pt-75 {
 padding-top:75px
}
.pr-75 {
 padding-right:75px
}
.pb-75 {
 padding-bottom:75px
}
.pl-80 {
 padding-left:80px
}
.pt-80 {
 padding-top:80px
}
.pr-80 {
 padding-right:80px
}
.pb-80 {
 padding-bottom:80px
}
.pl-85 {
 padding-left:85px
}
.pt-85 {
 padding-top:85px
}
.pr-85 {
 padding-right:85px
}
.pb-85 {
 padding-bottom:85px
}
.pl-90 {
 padding-left:90px
}
.pt-90 {
 padding-top:90px
}
.pr-90 {
 padding-right:90px
}
.pb-90 {
 padding-bottom:90px
}
.pl-95 {
 padding-left:95px
}
.pt-95 {
 padding-top:95px
}
.pr-95 {
 padding-right:95px
}
.pb-95 {
 padding-bottom:95px
}
.pl-100 {
 padding-left:100px
}
.pt-100 {
 padding-top:100px
}
.pr-100 {
 padding-right:100px
}
.pb-100 {
 padding-bottom:100px
}
.pl-105 {
 padding-left:105px
}
.pt-105 {
 padding-top:105px
}
.pr-105 {
 padding-right:105px
}
.pb-105 {
 padding-bottom:105px
}
.pl-110 {
 padding-left:110px
}
.pt-110 {
 padding-top:110px
}
.pr-110 {
 padding-right:110px
}
.pb-110 {
 padding-bottom:110px
}
.pl-115 {
 padding-left:115px
}
.pt-115 {
 padding-top:115px
}
.pr-115 {
 padding-right:115px
}
.pb-115 {
 padding-bottom:115px
}
.pl-120 {
 padding-left:120px
}
.pt-120 {
 padding-top:120px
}
.pr-120 {
 padding-right:120px
}
.pb-120 {
 padding-bottom:120px
}
.pl-125 {
 padding-left:125px
}
.pt-125 {
 padding-top:125px
}
.pr-125 {
 padding-right:125px
}
.pb-125 {
 padding-bottom:125px
}
.padding-0,
.ct-legend,
.right_chat .media .status,
#calendar.fc .fc-view-container .fc-view.fc-basic-view>table>thead tr td.fc-widget-header,
#calendar.fc .fc-view-container .fc-view.fc-agenda>table>thead tr td.fc-widget-header,
#calendar.fc .fc-popover .fc-event-container {
 padding:0!important
}
.align-left,
.chat_app .chat_windows .other-message {
 text-align:left
}
.align-center,
.card-icon,
.dropdown-icon,
.avatar,
.stamp,
.tag-addon,
.selectgroup-button,
.file_folder .icon,
.blog_left .blog_post .content .actions_sidebar a {
 text-align:center
}
.align-right,
.wizard .actions,
.ct-legend,
.chat_app .chat_windows .my-message {
 text-align:right
}
.align-justify {
 text-align:justify
}
.font300 {
 font-weight:300
}
.font600 {
 font-weight:600
}
.font700 {
 font-weight:700
}
.text_ellipsis,
.dropdown-menu .dropdown-item>div,
.inbox .msg,
.feeds_widget li .feeds-body>small {
 white-space:nowrap;
 text-overflow:ellipsis;
 display:block;
 overflow:hidden
}
.display-5 {
 font-size:2.5rem
}
.p-10 {
 padding:10px!important
}
.p-15 {
 padding:15px!important
}
.p-20 {
 padding:20px!important
}
.width30 {
 width:30px
}
.width35 {
 width:35px
}
.width40 {
 width:40px
}
.width45 {
 width:45px
}
.width100 {
 width:100px
}
.width150 {
 width:150px
}
.width250 {
 width:250px
}
.width360 {
 width:360px
}
.bg-blue {
 background-color:#2185d0
}
.bg-azure {
 background-color:#45aaf2
}
.bg-indigo {
 background-color:#6435c9
}
.bg-purple {
 background-color:#a333c8
}
.bg-pink {
 background-color:#e03997
}
.bg-red {
 background-color:#db2828
}
.bg-orange {
 background-color:#f2711c
}
.bg-yellow {
 background-color:#fbbd08
}
.bg-lime {
 background-color:#b5cc18
}
.bg-green {
 background-color:#21ba45
}
.bg-teal {
 background-color:#00b5ad
}
.bg-cyan {
 background-color:#17a2b8
}
.bg-gray {
 background-color:#666a6d!important
}
.bg-lightgray {
 background-color:#babdbf!important
}
.bg-light-blue {
 background-color:rgba(33,133,208,.1);
 color:#2185d0
}
.bg-light-azure {
 background-color:rgba(69,170,242,.1);
 color:#45aaf2
}
.bg-light-indigo {
 background-color:rgba(100,53,201,.1);
 color:#6435c9
}
.bg-light-purple {
 background-color:rgba(163,51,200,.1);
 color:#a333c8
}
.bg-light-pink {
 background-color:rgba(224,57,151,.1);
 color:#e03997
}
.bg-light-red {
 background-color:rgba(219,40,40,.1);
 color:#db2828
}
.bg-light-orange {
 background-color:rgba(242,113,28,.1);
 color:#f2711c
}
.bg-light-yellow {
 background-color:rgba(251,189,8,.1);
 color:#fbbd08
}
.bg-light-lime {
 background-color:rgba(181,204,24,.1);
 color:#b5cc18
}
.bg-light-green {
 background-color:rgba(33,186,69,.1);
 color:#21ba45
}
.bg-light-teal {
 background-color:rgba(0,181,173,.1);
 color:#00b5ad
}
.bg-light-cyan {
 background-color:rgba(23,162,184,.1);
 color:#17a2b8
}
.bg-light-gray {
 background-color:rgba(102,106,109,.1);
 color:#666a6d
}
@media screen and (max-width:1024px) {
 .hidden-md {
  display:none
 }
}
@media screen and (max-width:992px) {
 .hidden-sm {
  display:none
 }
}
@media screen and (max-width:767px) {
 .hidden-xs {
  display:none
 }
}
html {
 direction:ltr
}
body {
 -webkit-transition:all .4s ease-in-out;
 -moz-transition:all .4s ease-in-out;
 -ms-transition:all .4s ease-in-out;
 -o-transition:all .4s ease-in-out;
 transition:all .4s ease-in-out;
 background-color:#f4f6f9;
 color:#434a54;
 direction:ltr;
 -webkit-font-smoothing:antialiased;
 -moz-osx-font-smoothing:grayscale;
 -webkit-tap-highlight-color:transparent;
 -webkit-text-size-adjust:none;
 -ms-touch-action:manipulation;
 touch-action:manipulation;
 -webkit-font-feature-settings:"liga" 0;
 font-feature-settings:"liga" 0;
 overflow-y:scroll;
 position:relative
}
body.font-opensans {
 font-family:open sans,sans-serif;
 font-size:14px
}
body.font-montserrat {
 font-family:montserrat,sans-serif;
 font-size:15px
}
body.font-roboto {
 font-family:robot,sans-serif;
 font-size:15px
}
body.gradient .bg-blue,
body.gradient .bg-primary {
 background:linear-gradient(45deg,#2185d0,#6435c9)!important
}
body.gradient .bg-azure {
 background:linear-gradient(45deg,#45aaf2,#2185d0)!important
}
body.gradient .bg-indigo {
 background:linear-gradient(45deg,#6435c9,#e03997)!important
}
body.gradient .bg-purple {
 background:linear-gradient(45deg,#a333c8,#fbbd08)!important
}
body.gradient .bg-pink {
 background:linear-gradient(45deg,#e03997,#dc429d)!important
}
body.gradient .bg-red,
body.gradient .bg-danger {
 background:linear-gradient(45deg,#db2828,#e03997)!important
}
body.gradient .bg-orange,
body.gradient .bg-warning {
 background:linear-gradient(45deg,#f2711c,#e03997)!important
}
body.gradient .bg-yellow {
 background:linear-gradient(45deg,#fbbd08,#fce44e)!important
}
body.gradient .bg-lime {
 background:linear-gradient(45deg,#b5cc18,#bfff00)!important
}
body.gradient .bg-green,
body.gradient .bg-success {
 background:linear-gradient(45deg,#21ba45,#2185d0)!important
}
body.gradient .bg-teal {
 background:linear-gradient(45deg,#00b5ad,#50e4d4)!important
}
body.gradient .bg-cyan {
 background:linear-gradient(45deg,#17a2b8,#75d5cd)!important
}
body.gradient .bg-info {
 background:linear-gradient(45deg,#17a2b8,#21ba45)
}
body.gradient .bg-gray {
 background:linear-gradient(45deg,#666A6D,#808488)!important
}
body.gradient .btn-primary {
 background:linear-gradient(45deg,#2185d0,#6435c9);
 border:0
}
body.iconcolor #header_top .nav-link {
 color:#2185d0
}
body.rtl {
 direction:rtl;
 text-align:right
}
body.rtl ul {
 padding-right:0
}
body.rtl #header_top {
 left:auto;
 right:0
}
body.rtl #left-sidebar {
 left:auto;
 right:0;
 padding:20px 75px 20px 15px;
 border-right:0;
 border-left:1px solid #e6e9ed;
 text-align:right
}
@media screen and (max-width:1200px) {
 body.rtl #left-sidebar {
  right:-280px
 }
}
@media screen and (max-width:767px) {
 body.rtl #left-sidebar {
  padding-top:65px;
  padding-right:20px
 }
}
body.rtl #left-sidebar .sidebar-nav {
 margin-right:0;
 margin-left:-15px
}
body.rtl .right_sidebar {
 left:-300px;
 right:auto;
 text-align:right;
 box-shadow:2px 2px 5px rgba(41,43,48,.1)
}
body.rtl .right_sidebar .settingbar {
 right:auto;
 left:0
}
body.rtl .right_sidebar.open {
 left:0
}
body.rtl .metismenu ul a {
 padding:5px 30px 5px 15px
}
body.rtl .metismenu ul a::before {
 left:auto;
 right:1px
}
body.rtl .metismenu a {
 border-right:0;
 border-left:2px solid transparent
}
body.rtl .metismenu a.list-b::before {
 transform:scale(-1,1)
}
body.rtl .metismenu .active>a {
 border-left:2px solid
}
body.rtl .metismenu .has-arrow:after {
 right:auto;
 left:1.8em
}
body.rtl .metismenu.grid {
 padding-right:0;
 padding-left:15px
}
body.rtl .metismenu.grid .active>a {
 border:0
}
body.rtl .page {
 right:280px;
 left:auto
}
@media screen and (max-width:1200px) {
 body.rtl .page {
  right:60px;
  width:calc(100% - 60px)
 }
}
@media screen and (max-width:767px) {
 body.rtl .page {
  right:0;
  width:100%
 }
}
body.rtl .page-title {
 margin-left:20px;
 margin-right:0
}
body.rtl .page-header .left .custom-select {
 margin-right:0;
 margin-left:5px
}
body.rtl .mr-1 {
 margin-left:.25rem!important;
 margin-right:0!important
}
body.rtl .mr-2 {
 margin-left:.5rem!important;
 margin-right:0!important
}
body.rtl .mr-3 {
 margin-left:1rem!important;
 margin-right:0!important
}
body.rtl .mr-4 {
 margin-left:1.5rem!important;
 margin-right:0!important
}
body.rtl .ml-2 {
 margin-right:.5rem!important;
 margin-left:0!important
}
body.rtl .ml-3 {
 margin-right:1rem!important;
 margin-left:0!important
}
body.rtl .mr-20,
body.rtl .ct-legend li,
.ct-legend body.rtl li,
body.rtl .social_link li,
.social_link body.rtl li,
body.rtl .top_counter .icon,
.top_counter body.rtl .icon,
body.rtl .currency_state .icon,
.currency_state body.rtl .icon,
body.rtl .w_user .user_avtar,
.w_user body.rtl .user_avtar {
 margin-right:0;
 margin-left:20px
}
body.rtl .ml-auto {
 margin-right:auto!important;
 margin-left:unset!important
}
body.rtl .float-right {
 float:left!important
}
body.rtl .text-right {
 text-align:left!important
}
body.rtl .right_chat .media .status {
 right:40px;
 left:auto
}
body.rtl .right_chat .media .media-object {
 margin-right:0;
 margin-left:10px
}
body.rtl .card-body {
 text-align:right
}
body.rtl .card-options {
 margin-right:auto;
 margin-left:unset
}
body.rtl .card-options>a {
 margin-right:15px;
 margin-left:0
}
body.rtl .page-options {
 margin-right:auto;
 margin-left:unset
}
body.rtl .dropdown-menu {
 text-align:right
}
body.rtl .dropdown-menu::after {
 display:none
}
body.rtl .dropdown-icon {
 margin-left:.5rem;
 margin-right:0
}
body.rtl .custom-control-inline {
 margin-left:1rem;
 margin-right:0
}
body.rtl .custom-control-label:before {
 right:-1.5rem;
 left:auto
}
body.rtl .custom-control {
 padding-right:1.5rem;
 padding-left:0
}
body.rtl .media {
 text-align:right
}
body.rtl .widgets1 .details {
 text-align:right
}
body.rtl .timeline_item {
 border-left:0;
 border-right:1px solid #e6e9ed;
 margin-left:0;
 margin-right:10px
}
body.rtl .timeline_item .tl_avatar {
 left:auto;
 right:-15px
}
body.rtl .w_social_state2 .content {
 text-align:center
}
body.rtl .chat_app .chat_list {
 left:0;
 right:auto
}
body.rtl .user_div .user_btn {
 float:left;
 transform:scale(-1,1)
}
body.rtl.offcanvas-active #left-sidebar {
 right:-280px
}
body.rtl.offcanvas-active .page {
 right:60px;
 width:calc(100% - 60px)
}
@media screen and (max-width:767px) {
 body.rtl.offcanvas-active .page {
  right:0;
  width:100%
 }
}
body.rtl .table.table_custom.border-style tr td {
 border-top:1px solid #e6e9ed;
 border-bottom:1px solid #e6e9ed;
 border-right:1px solid #e6e9ed
}
body.rtl .table.table_custom.border-style tr td:last-child {
 border-left:1px solid #e6e9ed
}
body.rtl .table.table_custom.border-style tr:hover td {
 border-top-color:#2185d0;
 border-bottom-color:#2185d0
}
body.rtl .table.table_custom.border-style tr:hover td:first-child {
 border-left-color:#2185d0
}
body.rtl .table.table_custom.border-style tr:hover td:last-child {
 border-right-color:#2185d0
}
body.rtl .table.table_custom tr th,
body.rtl .table.table_custom tr td {
 border:0
}
body.rtl .table.table_custom tr th:first-child,
body.rtl .table.table_custom tr td:first-child {
 border-radius:0 .55rem .55rem 0
}
body.rtl .table.table_custom tr th:last-child,
body.rtl .table.table_custom tr td:last-child {
 border-radius:.55rem 0 0 .55rem
}
body.boxlayout .container-fluid {
 max-width:1140px
}
body.h_menu #header_top {
 flex-direction:row;
 width:100%;
 background:#fff;
 padding:10px 20px;
 height:60px
}
body.h_menu #header_top>.container {
 display:flex;
 justify-content:space-between;
 flex-direction:row;
 height:auto;
 padding-right:15px;
 padding-left:15px
}
body.h_menu #header_top .hleft {
 display:flex;
 align-items:center
}
body.h_menu #header_top .hleft .header-brand {
 margin:0 20px 0 0
}
body.h_menu #header_top .hright .dropdown {
 display:flex
}
body.h_menu #header_top .hright .dropdown a:last-child {
 display:none
}
body.h_menu #header_top .nav-link {
 padding:10px 15px
}
body.h_menu #header_top .user_btn {
 padding:0
}
body.h_menu #left-sidebar {
 -moz-box-shadow:0 3px 10px rgba(41,43,48,.05);
 -webkit-box-shadow:0 3px 10px rgba(41,43,48,.05);
 box-shadow:0 3px 10px rgba(41,43,48,.05);
 top:60px;
 width:100%;
 height:auto;
 border:none;
 padding:15px 20px;
 overflow:visible;
 z-index:9
}
body.h_menu #left-sidebar>.container {
 padding-right:15px;
 padding-left:15px
}
body.h_menu #left-sidebar .sidebar-nav {
 height:auto;
 overflow-y:visible;
 margin-right:0
}
body.h_menu #left-sidebar .brand-name {
 display:none
}
body.h_menu .metismenu {
 flex-direction:row
}
body.h_menu .metismenu .collapse.in {
 display:none
}
body.h_menu .metismenu .has-arrow:after {
 right:5px
}
body.h_menu .metismenu .active>a {
 font-weight:400
}
body.h_menu .metismenu a {
 border:1px solid #e6e9ed;
 padding:10px 15px;
 margin-left:-1px;
 text-align:left
}
body.h_menu .metismenu a:hover {
 letter-spacing:0
}
body.h_menu .metismenu .g_heading {
 display:none
}
body.h_menu .metismenu>li i {
 display:none
}
body.h_menu .metismenu>li ul {
 border-radius:.1875rem;
 -moz-box-shadow:0 2px 15px rgba(41,43,48,.2);
 -webkit-box-shadow:0 2px 15px rgba(41,43,48,.2);
 box-shadow:0 2px 15px rgba(41,43,48,.2);
 position:absolute;
 top:100%;
 width:220px;
 background:#fff;
 padding:15px;
 height:auto!important
}
body.h_menu .metismenu>li ul li a {
 border:0;
 padding:10px 10px 10px 30px
}
body.h_menu .metismenu>li ul li:last-child {
 padding-bottom:0
}
body.h_menu .metismenu>li:hover .collapse {
 display:block
}
body.h_menu .metismenu>li:last-child .collapse {
 left:auto;
 right:0
}
body.h_menu.sidebar_dark .sidebar .metismenu a {
 border-color:#373d42
}
body.h_menu.sidebar_dark .sidebar .metismenu ul a {
 color:#292b30
}
body.h_menu.sidebar_dark .sidebar .metismenu #header_top .brand-logo {
 background:#2185d0
}
body.h_menu .page {
 margin-top:135px;
 left:0;
 width:100%
}
body.h_menu .container {
 max-width:1460px
}
body.h_menu .page-header {
 padding:10px 0
}
body.h_menu .chat_app {
 height:auto
}
body.h_menu .chat_app .chat_windows ul {
 height:calc(100vh - 450px)
}
body.h_menu .chat_app .chat_list {
 width:100%;
 position:relative;
 height:calc(100vh - 230px);
 overflow-y:auto
}
body.h_menu.rtl .page {
 right:auto;
 left:auto
}
body.h_menu.rtl .metismenu .has-arrow:after {
 right:auto;
 left:5px
}
body.h_menu.rtl .metismenu a {
 text-align:right
}
body.h_menu.rtl .metismenu .active>a {
 border-left:0
}
body.h_menu.rtl .metismenu>li ul li a {
 padding:10px 30px 10px 10px
}
body.h_menu.rtl .metismenu>li:last-child .collapse {
 left:0;
 right:auto
}
@media print {
 body {
  background:0 0
 }
}
body *::-webkit-scrollbar {
 width:0;
 height:3px;
 transition:.3s background
}
body *::-webkit-scrollbar-thumb {
 background:#f8f9fa
}
body *:hover::-webkit-scrollbar-thumb {
 background:#f8f9fa
}
a:hover {
 text-decoration:none
}
#main_content {
 display:-ms-flexbox;
 display:flex;
 -ms-flex-direction:column;
 flex-direction:column;
 -ms-flex-pack:center;
 justify-content:center;
 min-height:100%
}
.row {
 margin-right:-7.5px;
 margin-left:-7.5px
}
.col,
.col-1,
.col-10,
.col-11,
.col-12,
.col-2,
.col-3,
.col-4,
.col-5,
.col-6,
.col-7,
.col-8,
.col-9,
.col-auto,
.col-lg,
.col-lg-1,
.col-lg-10,
.col-lg-11,
.col-lg-12,
.col-lg-2,
.col-lg-3,
.col-lg-4,
.col-lg-5,
.col-lg-6,
.col-lg-7,
.col-lg-8,
.col-lg-9,
.col-lg-auto,
.col-md,
.col-md-1,
.col-md-10,
.col-md-11,
.col-md-12,
.col-md-2,
.col-md-3,
.col-md-4,
.col-md-5,
.col-md-6,
.col-md-7,
.col-md-8,
.col-md-9,
.col-md-auto,
.col-sm,
.col-sm-1,
.col-sm-10,
.col-sm-11,
.col-sm-12,
.col-sm-2,
.col-sm-3,
.col-sm-4,
.col-sm-5,
.col-sm-6,
.col-sm-7,
.col-sm-8,
.col-sm-9,
.col-sm-auto,
.col-xl,
.col-xl-1,
.col-xl-10,
.col-xl-11,
.col-xl-12,
.col-xl-2,
.col-xl-3,
.col-xl-4,
.col-xl-5,
.col-xl-6,
.col-xl-7,
.col-xl-8,
.col-xl-9,
.col-xl-auto {
 padding-right:7.5px;
 padding-left:7.5px
}
.form-control,
.dataTables_wrapper .dataTables_filter {
 border-color:#e8e9e9;
 font-size:14px;
 height:auto
}
.form-control::placeholder,
.dataTables_wrapper .dataTables_filter::placeholder {
 color:#babdbf
}
.custom-select {
 border-color:#e8e9e9
}
.input-group-text {
 border-color:#e8e9e9;
 background:0 0
}
.w15 {
 width:15px
}
.w20 {
 width:20px;
 height:20px;
 line-height:20px
}
.w30 {
 width:30px;
 height:30px;
 line-height:30px
}
.w35 {
 width:35px;
 height:35px
}
.w40 {
 width:40px
}
.w60 {
 width:60px
}
.w80 {
 width:80px
}
.w100 {
 width:100px
}
.w150 {
 width:150px
}
.w200 {
 width:200px
}
.w250 {
 width:250px
}
.w350 {
 width:350px
}
@media screen and (max-width:992px) {
 .sm-hide {
  display:none!important
 }
}
@media screen and (max-width:767px) {
 .xs-hide {
  display:none!important
 }
 .sort_stat {
  margin-top:15px
 }
}
@media screen and (max-width:640px) {
 #News .media {
  display:block
 }
 #News .media>.mr-3 {
  margin:0!important
 }
 #News .media>.mr-3 .w150 {
  width:100%
 }
 #News .media .media-body {
  margin-top:20px
 }
 .header-action {
  display:none
 }
}
.page {
 -webkit-transition:all .5s ease-in-out;
 -moz-transition:all .5s ease-in-out;
 -ms-transition:all .5s ease-in-out;
 -o-transition:all .5s ease-in-out;
 transition:all .5s ease-in-out;
 left:280px;
 -ms-flex:1 1 auto;
 flex:1 1 auto;
 width:calc(100% - 280px);
 position:relative
}
@media screen and (max-width:1200px) {
 .page {
  left:60px;
  width:calc(100% - 60px)
 }
}
@media screen and (max-width:767px) {
 .page {
  padding:56px 0 0;
  width:100%;
  left:0
 }
}
.page .section-light,
.page .section-dark,
.page .section-white,
.page .section-gray,
.page .section-body {
 padding:0 20px
}
@media screen and (max-width:767px) {
 .page .section-light,
 .page .section-dark,
 .page .section-white,
 .page .section-gray,
 .page .section-body {
  padding:0
 }
}
.page .section-body {
 background:#f4f6f9
}
.page .section-light {
 background:#f8f9fa
}
.page .section-dark {
 background:#292b30
}
.page .section-white {
 background:#fff
}
.page .section-gray {
 background:#e8e9e9
}
.page-content {
 margin:.75rem 0
}
@media screen and (max-width:768px) {
 .page-content {
  margin:1.5rem 0
 }
}
.page-header {
 display:flex;
 justify-content:space-between;
 padding:20px 0;
 align-items:center;
 border-bottom:1px solid #e8e9e9
}
.page-header .left {
 display:flex;
 align-items:center
}
.page-header .left .custom-select {
 width:120px;
 margin-right:5px
}
.page-header .right {
 display:flex;
 align-items:center
}
.page-header .right .nav-pills .nav-item {
 padding:0
}
.page-header .right .nav-pills .nav-item .dropdown-item {
 font-size:14px
}
.page-header .right .nav-pills .nav-link {
 color:#666a6d
}
.page-header .right .nav-pills .show>.nav-link {
 background:0 0
}
.page-header .right .nav-link {
 background:0 0;
 border:0;
 padding:6px 10px
}
.page-header .right .notification {
 position:relative
}
.page-header .right .notification .nav-unread {
 position:absolute;
 top:0;
 right:5px;
 min-height:8px;
 display:inline-block;
 min-width:5px;
 box-shadow:0 0 0 rgba(67,74,84,.9);
 animation:pulse 2s infinite
}
@media screen and (max-width:992px) {
 .page-header {
  display:block
 }
 .page-header .right {
  margin-top:15px;
  justify-content:space-between
 }
 .page-header .right .nav-pills .nav-link {
  padding-left:0;
  padding-right:15px
 }
}
@media screen and (max-width:767px) {
 .page-header .left {
  display:flex;
  align-items:center;
  justify-content:space-between;
  width:100%
 }
 .page-header .right {
  display:none
 }
}
.header-nav .breadcrumb {
 background:0 0;
 margin:0;
 padding:0;
 font-size:13px
}
.page-header-tab {
 border:0
}
.page-header-tab .nav-link {
 border-bottom:0!important
}
.page-header-tab .nav-link.dropdown-toggle {
 border-top:3px solid transparent
}
.page-header-tab .nav-link.dropdown-toggle:hover,
.page-header-tab .nav-link.dropdown-toggle:focus {
 background:0 0
}
.page-header-tab .nav-link.active,
.page-header-tab .nav-link:hover {
 border-bottom:0!important;
 border-top:3px solid!important;
 border-radius:0!important
}
.page-header-tab .dropdown-menu {
 border-radius:.55rem
}
.page-title {
 font-size:17px;
 margin-bottom:0;
 margin-right:20px;
 white-space:nowrap
}
.page-title-icon {
 color:#9aa0ac;
 font-size:1.25rem
}
.page-subtitle {
 color:#6e7687;
 font-size:.8125rem;
 margin-left:2rem
}
.page-subtitle a {
 color:inherit
}
.page-options {
 margin-left:auto
}
.page-breadcrumb {
 flex-basis:100%
}
.page-description {
 color:#6e7687;
 margin:.25rem 0 0
}
.page-description a {
 color:inherit
}
.page-single {
 flex:1 1 auto;
 display:flex;
 align-items:center;
 justify-content:center;
 padding:1rem 0;
 height:100vh
}
.content-heading {
 font-weight:400;
 margin:2rem 0 1.5rem;
 font-size:1.25rem;
 line-height:1.25
}
.content-heading:first-child {
 margin-top:0
}
.layout-fullwidth #main_content #left-sidebar {
 left:-280px
}
.layout-fullwidth #main_content .page {
 width:100%;
 left:0
}
.offcanvas-active #header_top {
 background:#fff;
 border-right:1px solid rgba(0,40,100,.12)
}
@media screen and (max-width:767px) {
 .offcanvas-active #header_top {
  border-right:0
 }
}
.offcanvas-active #left-sidebar {
 left:-280px
}
@media screen and (max-width:1200px) {
 .offcanvas-active #left-sidebar {
  left:0;
  position:fixed;
  z-index:99
 }
}
@media screen and (max-width:767px) {
 .offcanvas-active #left-sidebar {
  left:0;
  position:fixed
 }
}
.offcanvas-active .page {
 left:60px;
 width:calc(100% - 60px)
}
@media screen and (max-width:767px) {
 .offcanvas-active .page {
  left:0;
  width:100%
 }
}
.auth {
 display:flex;
 height:100vh;
 align-items:center
}
.auth .header-brand {
 font-size:30px
}
.auth .auth_left {
 background:#fff;
 display:flex;
 align-items:center;
 height:100vh;
 width:400px;
 padding:0 20px
}
.auth .auth_right {
 width:calc(100% - 400px);
 text-align:center
}
@media screen and (max-width:767px) {
 .auth .auth_right {
  display:none
 }
}
.auth .auth_right img {
 width:500px
}
@-webkit-keyframes pulse {
 0% {
  -webkit-box-shadow:0 0 0 0 rgba(67,74,84,.9)
 }
 70% {
  -webkit-box-shadow:0 0 0 10px transparent
 }
 100% {
  -webkit-box-shadow:0 0 0 0 transparent
 }
}
@keyframes pulse {
 0% {
  -moz-box-shadow:0 0 0 0 rgba(67,74,84,.9);
  box-shadow:0 0 0 0 rgba(67,74,84,.7)
 }
 70% {
  -moz-box-shadow:0 0 0 10px transparent;
  box-shadow:0 0 0 10px transparent
 }
 100% {
  -moz-box-shadow:0 0 0 0 transparent;
  box-shadow:0 0 0 0 transparent
 }
}
.aside {
 width:22rem;
 background:#fff;
 position:fixed;
 top:0;
 right:0;
 bottom:0;
 border-left:1px solid rgba(0,40,100,.12);
 display:flex;
 flex-direction:column;
 z-index:100;
 visibility:hidden;
 box-shadow:0 0 5px 2px rgba(0,0,0,.05)
}
@media(min-width:1600px) {
 body.aside-opened .aside {
  visibility:visible
 }
}
.aside-body {
 padding:1.5rem;
 flex:1 1 auto;
 overflow:auto
}
.aside-footer {
 padding:1rem 1.5rem;
 border-top:1px solid rgba(0,40,100,.12)
}
.aside-header {
 padding:1rem 1.5rem;
 border-bottom:1px solid rgba(0,40,100,.12)
}
#header_top {
 z-index:1030;
 position:fixed;
 width:60px;
 height:100vh;
 top:0;
 left:0;
 padding:10px 0;
 display:flex;
 flex-direction:column;
 justify-content:space-between;
 text-align:center
}
@media screen and (max-width:1200px) {
 #header_top {
  background:#fff;
  border-right:1px solid rgba(0,40,100,.12)
 }
}
@media screen and (max-width:767px) {
 #header_top {
  border-bottom:1px solid rgba(0,40,100,.12);
  background:#f8f9fa;
  flex-direction:row;
  height:auto;
  width:100%;
  padding:0 15px
 }
 #header_top .hleft,
 #header_top .dropdown {
  display:flex;
  align-items:center
 }
 #header_top .header-brand {
  margin:0;
  padding-right:15px
 }
}
#header_top .header-brand {
 padding:0;
 transition:.3s opacity;
 margin-top:10px;
 margin-bottom:15px;
 display:inline-block
}
@media screen and (max-width:640px) {
 #header_top .header-brand {
  margin:0 15px 0 0
 }
}
#header_top .header-brand:hover {
 opacity:.8;
 color:inherit;
 text-decoration:none
}
#header_top .brand-logo {
 background:#292b30;
 padding:10px;
 color:#fff;
 border-radius:35px;
 display:inline-block
}
#header_top .nav-link {
 padding:12px;
 display:inline-flex;
 color:#333537
}
#header_top .nav-link i {
 font-size:20px
}
#header_top .nav-link .avatar {
 border:2px solid #fff
}
#header_top .header-avatar {
 -webkit-border-radius:50%;
 -moz-border-radius:50%;
 border-radius:50%;
 width:2rem;
 height:2rem;
 display:inline-block;
 vertical-align:bottom
}
#header_top .hright .dropdown-menu {
 top:50px!important;
 left:50px!important
}
@media screen and (max-width:767px) {
 #header_top .hright .dropdown-menu {
  top:0!important;
  left:auto!important
 }
}
*[dir=rtl] .metismenu .arrow {
 float:left
}
*[dir=rtl] .metismenu .plus-times {
 float:left
}
*[dir=rtl] .metismenu .plus-minus {
 float:left
}
.metismenu {
 display:-webkit-box;
 display:-ms-flexbox;
 display:flex;
 -webkit-box-orient:vertical;
 -webkit-box-direction:normal;
 -ms-flex-direction:column;
 flex-direction:column;
 margin:0;
 padding:0;
 list-style:none
}
.metismenu .arrow {
 float:right;
 line-height:1.42857
}
.metismenu .collapse {
 display:none
}
.metismenu .collapse.in {
 display:block
}
.metismenu .collapsing {
 position:relative;
 height:0;
 overflow:hidden;
 transition-timing-function:ease;
 transition-duration:.35s;
 transition-property:height,visibility
}
.metismenu .has-arrow {
 position:relative
}
.metismenu .has-arrow:after {
 -webkit-transition:all .5s ease-in-out;
 -moz-transition:all .5s ease-in-out;
 -ms-transition:all .5s ease-in-out;
 -o-transition:all .5s ease-in-out;
 transition:all .5s ease-in-out;
 font-family:fontawesome;
 position:absolute;
 color:#babdbf;
 content:"\f10c";
 right:1.8em;
 font-size:9px;
 top:15px
}
.metismenu .has-arrow[aria-expanded=true]::after {
 content:"\f192";
 color:#333537
}
.metismenu .has-arrow.arrow-b:after {
 content:"\f105";
 font-size:14px;
 top:11px;
 right:15px
}
.metismenu .has-arrow.arrow-b[aria-expanded=true]::after {
 content:"\f107"
}
.metismenu .has-arrow.arrow-c:after {
 content:"\f067"
}
.metismenu .has-arrow.arrow-c[aria-expanded=true]::after {
 content:"\f068"
}
.metismenu .g_heading {
 font-size:11px;
 text-transform:uppercase;
 color:#666a6d;
 padding-left:0
}
.metismenu>li {
 -webkit-box-flex:1;
 -ms-flex:1 1 0%;
 flex:1 1 0%;
 display:-webkit-box;
 display:-ms-flexbox;
 display:flex;
 -webkit-box-orient:vertical;
 -webkit-box-direction:normal;
 -ms-flex-direction:column;
 flex-direction:column;
 position:relative
}
.metismenu>li i {
 font-size:16px;
 width:30px;
 display:inline-block;
 position:relative;
 top:1px
}
.metismenu a {
 -webkit-transition:all .3s ease-out;
 -moz-transition:all .3s ease-out;
 -ms-transition:all .3s ease-out;
 -o-transition:all .3s ease-out;
 transition:all .3s ease-out;
 display:block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:block;
 -webkit-border-radius:0;
 -moz-border-radius:0;
 border-radius:0;
 border-right:2px solid transparent;
 color:#292b30;
 position:relative;
 padding:10px 0;
 outline-width:0;
 font-size:14px
}
.metismenu a:hover {
 letter-spacing:1px
}
.metismenu .active>a {
 font-weight:600;
 color:#292b30;
 border-color:#292b30
}
.metismenu .active ul .active a {
 color:#292b30;
 background:0 0
}
.metismenu ul {
 padding:0;
 list-style:none
}
.metismenu ul>li:last-child {
 padding-bottom:20px
}
.metismenu ul a {
 color:#4d5052;
 font-size:14px;
 padding:5px 15px 5px 30px;
 position:relative
}
.metismenu ul a::before {
 font-size:14px;
 font-family:feather!important;
 content:"\e999";
 position:absolute;
 left:1px
}
.metismenu ul a.list-b::before {
 content:"\e945"
}
.metismenu ul a.list-c::before {
 content:"\e911"
}
.metismenu ul ul a {
 padding:10px 15px 10px 70px
}
.metismenu ul.collapse a:hover,
.metismenu ul.collapse a:focus {
 text-decoration:none
}
.metismenu.grid {
 flex-wrap:wrap;
 flex-direction:unset;
 position:relative;
 margin-top:25px;
 padding-right:15px
}
.metismenu.grid .g_heading {
 display:none
}
.metismenu.grid>li {
 text-align:center;
 position:static
}
.metismenu.grid>li>a {
 -webkit-border-radius:3px;
 -moz-border-radius:3px;
 border-radius:3px;
 border:1px solid rgba(41,43,48,.05);
 padding:10px;
 margin-bottom:5px;
 width:90px;
 height:70px;
 line-height:28px
}
.metismenu.grid>li>a:hover {
 letter-spacing:normal
}
@media screen and (max-width:767px) {
 .metismenu.grid>li>a {
  width:115px
 }
}
.metismenu.grid>li>a i {
 width:auto
}
.metismenu.grid>li>a span {
 display:block;
 line-height:normal;
 width:70px;
 text-overflow:ellipsis;
 overflow:hidden;
 text-align:center;
 font-size:13px
}
@media screen and (max-width:767px) {
 .metismenu.grid>li>a span {
  width:100%
 }
}
.metismenu.grid>li ul {
 -moz-box-shadow:0 3px 15px rgba(41,43,48,.2);
 -webkit-box-shadow:0 3px 15px rgba(41,43,48,.2);
 box-shadow:0 3px 15px rgba(41,43,48,.2);
 -webkit-border-radius:3px;
 -moz-border-radius:3px;
 border-radius:3px;
 padding:10px;
 text-align:left;
 margin:40px 7px 0;
 position:absolute;
 background:#fff;
 z-index:999;
 width:180px;
 left:0
}
.metismenu.grid>li ul li {
 padding:0
}
.metismenu.grid .has-arrow:after {
 line-height:normal;
 top:10px;
 right:10px
}
#left-sidebar {
 -webkit-transition:all .3s ease-in-out;
 -moz-transition:all .3s ease-in-out;
 -ms-transition:all .3s ease-in-out;
 -o-transition:all .3s ease-in-out;
 transition:all .3s ease-in-out;
 width:280px;
 background-color:#fff;
 border-right:1px solid #e6e9ed;
 left:0;
 overflow-y:auto;
 position:fixed;
 top:0;
 padding:20px 15px 20px 75px
}
@media screen and (max-width:1200px) {
 #left-sidebar {
  left:-280px
 }
}
@media screen and (max-width:767px) {
 #left-sidebar {
  padding-top:65px;
  padding-left:20px
 }
}
#left-sidebar>.container {
 padding:0
}
#left-sidebar .brand-name {
 margin-top:5px
}
#left-sidebar .sidebar-nav {
 height:calc(100vh - 58px);
 overflow-y:auto;
 margin-right:-15px
}
@media screen and (max-width:767px) {
 #left-sidebar .sidebar-nav {
  padding-bottom:40px;
  height:calc(100vh - 97px)
 }
}
#left-sidebar .menu_option {
 -webkit-transition:all .3s ease-in-out;
 -moz-transition:all .3s ease-in-out;
 -ms-transition:all .3s ease-in-out;
 -o-transition:all .3s ease-in-out;
 transition:all .3s ease-in-out;
 opacity:.3
}
#left-sidebar .menu_option.active,
#left-sidebar .menu_option:hover {
 opacity:1
}
#left-sidebar .nav-link,
#left-sidebar .nav-item {
 min-width:auto
}
.header_top>.container {
 padding:0;
 display:flex;
 justify-content:space-between;
 flex-direction:column;
 height:100vh
}
@media screen and (max-width:767px) {
 .header_top>.container {
  flex-direction:row;
  height:55px
 }
}
.header_top.dark {
 background-color:#2b3035!important
}
.header_top.dark .nav-link {
 color:#808488!important
}
.user_div {
 -webkit-transition:all .5s ease-in-out;
 -moz-transition:all .5s ease-in-out;
 -ms-transition:all .5s ease-in-out;
 -o-transition:all .5s ease-in-out;
 transition:all .5s ease-in-out;
 -moz-box-shadow:0 10px 15px rgba(41,43,48,.2);
 -webkit-box-shadow:0 10px 15px rgba(41,43,48,.2);
 box-shadow:0 10px 15px rgba(41,43,48,.2);
 width:300px;
 background-color:#fff;
 position:fixed;
 top:0;
 left:-350px;
 padding:20px 15px;
 height:100vh;
 overflow-y:auto;
 z-index:9999
}
.user_div.open {
 left:0
}
.user_div .user_btn {
 float:right
}
.user_div .card {
 background:0 0
}
.user_div .user_avatar {
 -moz-box-shadow:0 5px 10px 0 rgba(41,43,48,.4);
 -webkit-box-shadow:0 5px 10px 0 rgba(41,43,48,.4);
 box-shadow:0 5px 10px 0 rgba(41,43,48,.4);
 margin-top:15px;
 margin-bottom:20px;
 border:5px solid #fff;
 height:120px;
 height:120px
}
.setting_switch .custom-switch {
 display:flex;
 justify-content:space-between
}
.setting_switch .custom-switch .custom-switch-description {
 margin:0
}
.sidebar_dark .sidebar {
 background-color:#2b3035!important;
 color:#fff
}
.sidebar_dark .sidebar .metismenu a {
 color:#babdbf
}
.sidebar_dark .sidebar .metismenu .has-arrow[aria-expanded=true]::after {
 color:#e8e9e9
}
.sidebar_dark .sidebar .metismenu.grid>li.active>a,
.sidebar_dark .sidebar .metismenu.grid>li>a:hover {
 background:#e8e9e9
}
.sidebar_dark .sidebar .metismenu .active>a {
 color:#2185d0
}
.sidebar_dark .sidebar .metismenu .active ul .active a {
 color:#2185d0
}
.sidebar_dark #header_top .nav-link {
 color:#babdbf
}
.sidebar_dark.offcanvas-active #header_top {
 background-color:#2b3035!important
}
.top_dark {
 background-color:#2b3035!important;
 color:#fff
}
.top_dark .form-control,
.top_dark .dataTables_wrapper .dataTables_filter,
.dataTables_wrapper .top_dark .dataTables_filter,
.top_dark .custom-select {
 background-color:rgba(255,255,255,.1);
 border:0;
 color:#808488!important
}
.top_dark .page-header {
 border-color:#2b3035
}
.top_dark .page-header .right .nav-pills .nav-link {
 color:#babdbf
}
.footer {
 font-size:.875rem;
 padding:1.25rem 0;
 color:#9aa0ac
}
@media screen and (max-width:767px) {
 .footer {
  text-align:center
 }
 .footer ul.list-inline {
  margin-top:15px
 }
}
.footer a:not(.btn) {
 color:#6e7687
}
@media print {
 .footer {
  display:none
 }
}
.display-1 i,
.display-2 i,
.display-3 i,
.display-4 i {
 vertical-align:baseline;
 font-size:.815em
}
.text-inherit {
 color:inherit!important
}
.text-default {
 color:#f4f6f9!important
}
.text-muted-dark {
 color:#6e7687!important
}
.tracking-tight {
 letter-spacing:-.05em!important
}
.tracking-normal {
 letter-spacing:0!important
}
.tracking-wide {
 letter-spacing:.05em!important
}
.leading-none {
 line-height:1!important
}
.leading-tight {
 line-height:1.25!important
}
.leading-normal {
 line-height:1.5!important
}
.leading-loose {
 line-height:2!important
}
.text-blue {
 color:#2185d0!important
}
.text-azure {
 color:#45aaf2!important
}
.text-indigo {
 color:#6435c9!important
}
.text-purple {
 color:#a333c8!important
}
.text-pink {
 color:#e03997!important
}
.text-red {
 color:#db2828!important
}
.text-orange {
 color:#f2711c!important
}
.text-yellow {
 color:#fbbd08!important
}
.text-lime {
 color:#b5cc18!important
}
.text-green {
 color:#21ba45!important
}
.text-teal {
 color:#00b5ad!important
}
.text-cyan {
 color:#17a2b8!important
}
.text-white {
 color:#fff!important
}
.text-gray {
 color:#4d5052!important
}
.text-gray-dark {
 color:#292b30!important
}
.icon i {
 vertical-align:-1px
}
a.icon {
 text-decoration:none;
 cursor:pointer
}
a.icon:hover {
 color:#2185d0!important
}
.o-auto {
 overflow:auto!important
}
.o-hidden {
 overflow:hidden!important
}
.shadow {
 box-shadow:0 1px 2px 0 rgba(0,0,0,.05)!important
}
.shadow-none {
 box-shadow:none!important
}
.lead {
 line-height:1.4
}
a {
 text-decoration-skip:ink
}
h1 a,
h2 a,
h3 a,
h4 a,
h5 a,
h6 a,
.h1 a,
.h2 a,
.h3 a,
.h4 a,
.h5 a,
.h6 a {
 color:inherit
}
strong,
b {
 font-weight:600
}
p,
ul,
ol,
blockquote {
 margin-bottom:1em
}
blockquote {
 font-style:italic;
 color:#6e7687;
 padding-left:2rem;
 border-left:2px solid rgba(0,40,100,.12)
}
blockquote p {
 margin-bottom:1rem
}
blockquote cite {
 display:block;
 text-align:right
}
blockquote cite:before {
 content:'— '
}
code {
 background:rgba(41,43,48,.025);
 border:1px solid rgba(41,43,48,.05);
 border-radius:3px;
 padding:3px
}
pre code {
 padding:0;
 border-radius:0;
 border:none;
 background:0 0
}
hr {
 margin-top:1rem;
 margin-bottom:1rem
}
pre {
 color:#292b30;
 padding:1rem;
 overflow:auto;
 font-size:85%;
 line-height:1.45;
 background-color:#f8fafc;
 border-radius:3px;
 tab-size:4;
 text-shadow:0 1px #fff;
 hyphens:none
}
img {
 max-width:100%
}
.text-wrap {
 font-size:1rem;
 line-height:1.66
}
.text-wrap>:first-child {
 margin-top:0
}
.text-wrap>:last-child {
 margin-bottom:0
}
.text-wrap>h1,
.text-wrap>h2,
.text-wrap>h3,
.text-wrap>h4,
.text-wrap>h5,
.text-wrap>h6 {
 margin-top:1em
}
.section-nav {
 background-color:#e8e9e9;
 margin:1rem 0;
 padding:.5rem 1rem;
 border:1px solid rgba(0,40,100,.12);
 border-radius:3px;
 list-style:none
}
.section-nav:before {
 font-weight:600;
 content:'Table of contents:';
 display:block
}
@media print {
 .container {
  max-width:none
 }
}
.row-cards>.col,
.row-cards>[class*=col-] {
 display:flex;
 flex-direction:column
}
.row-deck>.col,
.row-deck>[class*=col-] {
 display:flex;
 align-items:stretch
}
.row-deck>.col .card,
.row-deck>[class*=col-] .card {
 flex:1 1 auto
}
.col-text {
 max-width:48rem
}
.col-login {
 max-width:24rem
}
.gutters-0 {
 margin-right:0;
 margin-left:0
}
.gutters-0>.col,
.gutters-0>[class*=col-] {
 padding-right:0;
 padding-left:0
}
.gutters-0 .card {
 margin-bottom:0
}
.gutters-xs {
 margin-right:-.25rem;
 margin-left:-.25rem
}
.gutters-xs>.col,
.gutters-xs>[class*=col-] {
 padding-right:.25rem;
 padding-left:.25rem
}
.gutters-xs .card {
 margin-bottom:.5rem
}
.gutters-sm {
 margin-right:-.5rem;
 margin-left:-.5rem
}
.gutters-sm>.col,
.gutters-sm>[class*=col-] {
 padding-right:.5rem;
 padding-left:.5rem
}
.gutters-sm .card {
 margin-bottom:1rem
}
.gutters-lg {
 margin-right:-1rem;
 margin-left:-1rem
}
.gutters-lg>.col,
.gutters-lg>[class*=col-] {
 padding-right:1rem;
 padding-left:1rem
}
.gutters-lg .card {
 margin-bottom:2rem
}
.gutters-xl {
 margin-right:-1.5rem;
 margin-left:-1.5rem
}
.gutters-xl>.col,
.gutters-xl>[class*=col-] {
 padding-right:1.5rem;
 padding-left:1.5rem
}
.gutters-xl .card {
 margin-bottom:3rem
}
.nav-link,
.nav-item {
 padding:0 .75rem;
 min-width:2rem;
 transition:.3s color;
 user-select:none;
 cursor:pointer;
 display:flex;
 align-items:center
}
.nav-link .badge,
.nav-item .badge {
 position:absolute;
 top:0;
 right:0;
 padding:.2rem .25rem;
 min-width:1rem
}
.nav-tabs {
 -webkit-transition:all .3s ease-in-out;
 -moz-transition:all .3s ease-in-out;
 -ms-transition:all .3s ease-in-out;
 -o-transition:all .3s ease-in-out;
 transition:all .3s ease-in-out;
 color:#9aa0ac;
 user-select:none;
 margin:0 -.75rem
}
.nav-tabs .nav-link {
 transition:.3s border-color;
 font-weight:400;
 border:0;
 color:inherit;
 border-bottom:3px solid transparent;
 margin-bottom:-1px;
 padding:1rem 0
}
.nav-tabs .nav-link:hover:not(.disabled) {
 border-color:#6e7687;
 color:#6e7687
}
.nav-tabs .nav-link.active {
 border-color:#2185d0;
 color:#2185d0;
 background:0 0
}
.nav-tabs .nav-link.disabled {
 opacity:.4;
 cursor:default;
 pointer-events:none
}
.nav-tabs .nav-item {
 position:relative
}
.nav-tabs .nav-item i {
 display:inline-block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:inline;
 line-height:1;
 width:.875rem;
 vertical-align:baseline
}
.nav-tabs .nav-item:hover .nav-submenu {
 display:block
}
.nav-tabs .nav-submenu {
 background:#fff;
 border-radius:0 0 3px 3px;
 display:none;
 position:absolute;
 border:1px solid rgba(0,40,100,.12);
 border-top:none;
 z-index:10;
 box-shadow:0 1px 2px 0 rgba(0,0,0,.05);
 min-width:10rem
}
.nav-tabs .nav-submenu .nav-item {
 display:block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:block;
 padding:.5rem 1rem;
 color:#9aa0ac;
 margin:0!important;
 cursor:pointer;
 transition:.3s background
}
.nav-tabs .nav-submenu .nav-item.active {
 color:#6290d0
}
.nav-tabs .nav-submenu .nav-item:hover {
 color:#6e7687;
 text-decoration:none;
 background:rgba(0,0,0,.024)
}
.btn,
.dataTables_wrapper .dataTables_paginate .paginate_button {
 font-size:14px
}
.btn.btn-default,
.dataTables_wrapper .dataTables_paginate .btn-default.paginate_button {
 color:#4d5052;
 background-color:#fff;
 border-color:#e8e9e9;
 padding:6px 18px
}
.btn.btn-secondary,
.dataTables_wrapper .dataTables_paginate .paginate_button {
 -moz-box-shadow:0 1px 1px 0 rgba(41,43,48,.06);
 -webkit-box-shadow:0 1px 1px 0 rgba(41,43,48,.06);
 box-shadow:0 1px 1px 0 rgba(41,43,48,.06)
}
.btn.btn-square,
.dataTables_wrapper .dataTables_paginate .btn-square.paginate_button {
 -webkit-border-radius:0;
 -moz-border-radius:0;
 border-radius:0
}
.btn.box_shadow,
.dataTables_wrapper .dataTables_paginate .box_shadow.paginate_button {
 -moz-box-shadow:0 7px 10px rgba(41,43,48,.3);
 -webkit-box-shadow:0 7px 10px rgba(41,43,48,.3);
 box-shadow:0 7px 10px rgba(41,43,48,.3)
}
.alert {
 font-size:.9375rem
}
.alert-icon {
 padding-left:3rem
}
.alert-icon>i {
 color:inherit!important;
 font-size:1rem;
 position:absolute;
 top:1rem;
 left:1rem
}
.alert-avatar {
 padding-left:3.75rem
}
.alert-avatar .avatar {
 position:absolute;
 top:.5rem;
 left:.75rem
}
.close {
 -webkit-transition:all .3s ease-in-out;
 -moz-transition:all .3s ease-in-out;
 -ms-transition:all .3s ease-in-out;
 -o-transition:all .3s ease-in-out;
 transition:all .3s ease-in-out;
 font-size:1rem;
 line-height:1.5
}
.close:before {
 content:'\ea00';
 font-family:feather!important
}
.badge {
 color:#fff
}
.badge-default {
 background:#babdbf;
 color:#4d5052
}
.table {
 color:inherit
}
.table thead th {
 border-top:0;
 border-bottom-width:1px;
 padding-top:.5rem;
 padding-bottom:.5rem
}
.table th {
 color:#9aa0ac;
 font-size:.875rem;
 font-weight:400;
 text-transform:uppercase
}
.table td,
.table th {
 border-color:#e8e9e9;
 font-size:14px
}
.table.table_custom {
 border-collapse:separate;
 border-spacing:0 5px!important
}
.table.table_custom.spacing5 {
 border-spacing:0 5px!important
}
.table.table_custom.spacing8 {
 border-spacing:0 8px!important
}
.table.table_custom.border-style tr td {
 border-top:1px solid #e6e9ed;
 border-bottom:1px solid #e6e9ed;
 border-left:1px solid #e6e9ed
}
.table.table_custom.border-style tr td:last-child {
 border-right:1px solid #e6e9ed
}
.table.table_custom.border-style tr:hover td {
 border-top-color:#2185d0;
 border-bottom-color:#2185d0
}
.table.table_custom.border-style tr:hover td:first-child {
 border-left-color:#2185d0
}
.table.table_custom.border-style tr:hover td:last-child {
 border-right-color:#2185d0
}
.table.table_custom thead tr {
 background:0 0
}
.table.table_custom thead tr th {
 color:rgba(41,43,48,.5)
}
.table.table_custom tr {
 background:#fff
}
.table.table_custom tr th,
.table.table_custom tr td {
 border:0
}
.table.table_custom tr th:first-child,
.table.table_custom tr td:first-child {
 border-radius:.55rem 0 0 .55rem
}
.table.table_custom tr th:last-child,
.table.table_custom tr td:last-child {
 border-radius:0 .55rem .55rem 0
}
.table.table-md th,
.table.table-md td {
 padding:.5rem
}
.table.table-vcenter td,
.table.table-vcenter th {
 vertical-align:middle
}
.table.table-center td,
.table.table-center th {
 text-align:center
}
.table.table-striped tbody tr:nth-of-type(odd) {
 background:0 0
}
.table.table-striped tbody tr:nth-of-type(even) {
 background-color:rgba(0,0,0,.04)
}
.table.table-custom {
 border-collapse:separate!important
}
.table.table-custom.spacing5 {
 border-spacing:0 5px!important
}
.table.table-custom.spacing8 {
 border-spacing:0 8px!important
}
.table.table-custom td,
.table.table-custom th {
 vertical-align:middle;
 border-top:0
}
.table.table-custom2 {
 border-collapse:separate!important;
 border-spacing:1px 1px!important
}
.table.table-custom2 tr td,
.table.table-custom2 tr th {
 border:none;
 font-size:15px
}
.table.table-custom2 thead,
.table.table-custom2 tbody {
 background:#fff
}
.table.text-wrap td,
.table.text-wrap th {
 white-space:nowrap
}
.table.table-hover tbody tr:hover {
 color:#666a6d
}
.table-calendar {
 margin:0 0 .75rem
}
.table-calendar td,
.table-calendar th {
 border:0;
 text-align:center;
 padding:0!important;
 width:14.2857142857%;
 line-height:2.5rem
}
.table-calendar td {
 border-top:0
}
.table-calendar-link {
 -webkit-transition:all .3s ease-in-out;
 -moz-transition:all .3s ease-in-out;
 -ms-transition:all .3s ease-in-out;
 -o-transition:all .3s ease-in-out;
 transition:all .3s ease-in-out;
 -webkit-border-radius:4px;
 -moz-border-radius:4px;
 border-radius:4px;
 display:inline-block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:inline;
 background:#e8e9e9;
 color:#434a54;
 font-weight:600;
 line-height:2rem;
 min-width:calc(2rem + 2px);
 position:relative
}
.table-calendar-link:before {
 background:#2185d0;
 content:'';
 width:5px;
 height:5px;
 position:absolute;
 left:3px;
 top:3px
}
.table-calendar-link:hover {
 color:#fff;
 background:#2185d0;
 text-decoration:none
}
.table-header {
 -webkit-transition:all .3s ease-in-out;
 -moz-transition:all .3s ease-in-out;
 -ms-transition:all .3s ease-in-out;
 -o-transition:all .3s ease-in-out;
 transition:all .3s ease-in-out;
 cursor:pointer
}
.table-header:hover {
 color:#f4f6f9!important
}
.table-header:after {
 content:'\f0dc';
 font-family:fontawesome;
 display:inline-block;
 margin-left:.5rem;
 font-size:.75rem
}
.table-header-asc {
 color:#f4f6f9!important
}
.table-header-asc:after {
 content:'\f0de'
}
.table-header-desc {
 color:#f4f6f9!important
}
.table-header-desc:after {
 content:'\f0dd'
}
.page-breadcrumb {
 background:0 0;
 padding:0;
 margin:1rem 0 0;
 font-size:.875rem
}
@media screen and (max-width:768px) {
 .page-breadcrumb {
  margin:-.5rem 0 0
 }
}
.page-breadcrumb .breadcrumb-item {
 color:#9aa0ac
}
.page-breadcrumb .breadcrumb-item.active {
 color:#6e7687
}
.pagination-simple .page-item .page-link {
 background:0 0;
 border:none
}
.pagination-simple .page-item.active .page-link {
 color:#f4f6f9;
 font-weight:700
}
.pagination-pager .page-prev {
 margin-right:auto
}
.pagination-pager .page-next {
 margin-left:auto
}
.page-total-text {
 color:#6e7687;
 margin-right:1rem;
 align-self:center
}
.card {
 -webkit-transition:all .5s ease-in-out;
 -moz-transition:all .5s ease-in-out;
 -ms-transition:all .5s ease-in-out;
 -o-transition:all .5s ease-in-out;
 transition:all .5s ease-in-out;
 border-radius:.55rem;
 border-color:#e6e9ed;
 position:relative;
 width:100%
}
.card.box_shadow {
 -moz-box-shadow:0 3px 10px rgba(41,43,48,.05);
 -webkit-box-shadow:0 3px 10px rgba(41,43,48,.05);
 box-shadow:0 3px 10px rgba(41,43,48,.05)
}
.card .card {
 box-shadow:none
}
@media print {
 .card {
  box-shadow:none;
  border:none
 }
}
@media screen and (max-width:992px) {
 .card-columns {
  column-count:2
 }
}
.card-body {
 padding:20px;
 flex:1 1 auto;
 position:relative
}
.card-body+.card-body {
 border-top:1px solid rgba(0,40,100,.12)
}
@media print {
 .card-body {
  padding:0
 }
}
@media screen and (max-width:640px) {
 .card-body {
  padding:15px
 }
}
.card-body-scrollable {
 overflow:auto
}
.card-footer,
.card-bottom {
 padding:20px;
 background:0 0
}
.card-footer {
 border-top:1px solid rgba(0,40,100,.12);
 color:#6e7687
}
@media screen and (max-width:640px) {
 .card-footer {
  padding:15px
 }
}
.card-header {
 padding:20px 20px 10px;
 border:0;
 background:0 0;
 display:flex;
 align-items:center
}
@media print {
 .card-header {
  display:none
 }
}
.card-header.bline {
 border-bottom:1px solid #e8e9e9
}
@media screen and (max-width:640px) {
 .card-header {
  padding:20px 15px 10px
 }
}
.card-img-top {
 border-top-left-radius:.1875rem;
 border-top-right-radius:.1875rem
}
.card-img-overlay {
 background-color:rgba(41,43,48,.4);
 display:flex;
 flex-direction:column
}
.card-title {
 font-size:15px;
 font-weight:400;
 line-height:1.2;
 text-transform:uppercase
}
.card-title a {
 color:inherit
}
.card-title small {
 display:block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:block;
 text-transform:initial;
 font-weight:400;
 color:#9aa0ac
}
.card-subtitle {
 display:block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:block;
 font-weight:400;
 color:#9aa0ac;
 margin:-.75rem 0 1rem;
 line-height:1.1
}
.card-table tr:first-child td,
.card-table tr:first-child th {
 border-top:0
}
.card-table tr td:first-child,
.card-table tr th:first-child {
 padding-left:20px
}
.card-table tr td:last-child,
.card-table tr th:last-child {
 padding-right:20px
}
.card-body+.card-table {
 border-top:1px solid rgba(0,40,100,.12)
}
.card-profile .card-header {
 height:9rem;
 background-size:cover
}
.card-profile-img {
 border:3px solid #fff;
 max-width:6rem;
 border-radius:100%;
 box-shadow:0 1px 1px rgba(41,43,48,.3)
}
.card-link+.card-link {
 margin-left:1rem
}
.card-body+.card-list-group {
 border-top:1px solid rgba(0,40,100,.12)
}
.card-list-group .list-group-item {
 border-right:0;
 border-left:0;
 border-radius:0;
 padding-left:20px;
 padding-right:20px
}
.card-list-group .list-group-item:last-child {
 border-bottom:0
}
.card-list-group .list-group-item:first-child {
 border-top:0
}
.card-header-tabs {
 margin:-1.25rem 0;
 border-bottom:0;
 line-height:2rem
}
.card-header-tabs .nav-item {
 margin-bottom:1px
}
.card-header-pills {
 margin:-.75rem 0
}
.card-aside {
 flex-direction:row
}
.card-aside-column {
 min-width:5rem;
 width:30%;
 flex:0 0 30%;
 border-top-left-radius:.1875rem;
 border-bottom-left-radius:.1875rem;
 background:no-repeat center/cover
}
.card-value {
 line-height:3.4rem;
 height:3.4rem;
 display:flex;
 align-items:center;
 font-weight:400
}
.card-value i {
 vertical-align:middle
}
.card-chart-bg {
 height:4rem;
 margin-top:-1rem;
 position:relative;
 z-index:1;
 overflow:hidden
}
.card-options {
 color:#9aa0ac;
 margin-left:auto;
 display:flex;
 order:100;
 align-self:center
}
.card-options>a {
 font-size:17px
}
.card-options a:not(.btn):hover {
 text-decoration:none;
 color:#6e7687
}
.card-options .dropdown-toggle:after {
 display:none
}
.card-options .dropdown>a {
 font-size:18px
}
@media screen and (max-width:540px) {
 .card-options form {
  display:none
 }
}
.card-collapsed>:not(.card-header):not(.card-status) {
 display:none
}
.card-collapsed .card-options-collapse i:before {
 content:'\e92d'
}
.card-fullscreen .card-options-fullscreen i:before {
 content:'\e992'
}
.card-fullscreen .card-options-remove {
 display:none
}
.card-map {
 height:15rem;
 background:#d1d3d4
}
.card-map-placeholder {
 background:no-repeat center
}
.card-tabs {
 display:flex
}
.card-tabs-bottom .card-tabs-item {
 border:0;
 border-top:1px solid rgba(0,40,100,.12)
}
.card-tabs-bottom .card-tabs-item.active {
 border-top-color:#fff
}
.card-tabs-item {
 display:block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:block;
 flex:1 1 auto;
 padding:1rem 20px;
 border-bottom:1px solid rgba(0,40,100,.12);
 color:inherit;
 overflow:hidden
}
a.card-tabs-item {
 background:#fafbfc
}
a.card-tabs-item:hover {
 text-decoration:none;
 color:inherit
}
a.card-tabs-item:focus {
 z-index:1
}
a.card-tabs-item.active {
 background:#fff;
 border-bottom-color:#fff
}
.card-tabs-item+.card-tabs-item {
 border-left:1px solid rgba(0,40,100,.12)
}
.card-status {
 border-top-left-radius:.1875rem;
 border-top-right-radius:.1875rem;
 position:absolute;
 top:-1px;
 left:0;
 right:0;
 height:3px
}
.card-status-left {
 border-top-left-radius:.1875rem;
 border-bottom-left-radius:.1875rem;
 border-top-right-radius:0;
 right:auto;
 bottom:0;
 height:auto;
 width:3px
}
.card-fullscreen {
 position:fixed;
 top:0;
 left:0;
 right:0;
 bottom:0;
 z-index:1070
}
.card-icon {
 width:3rem;
 line-height:3rem
}
.card-alert {
 border-radius:0;
 margin:-1px -1px 0
}
.card-category {
 font-weight:600;
 text-transform:uppercase;
 letter-spacing:.05em;
 margin:0 0 .5rem
}
.list-group-item {
 border-color:#e6e9ed
}
.popover {
 filter:drop-shadow(0 1px 3px rgba(0,0,0,0.1))
}
.popover.bs-popover-top {
 margin-bottom:.625rem
}
.popover .arrow {
 margin-left:calc(.25rem + 2px)
}
.dropdown {
 display:inline-block
}
.dropdown-menu {
 box-shadow:0 2px 20px 0 rgba(0,0,0,.25);
 border:0;
 min-width:12rem;
 font-size:14px
}
.dropdown-menu .dropdown-item {
 color:#333537;
 font-size:14px;
 padding:10px;
 margin:0 10px;
 width:auto
}
.dropdown-menu .dropdown-item:hover,
.dropdown-menu .dropdown-item:focus {
 background:#e8e9e9
}
.dropdown-menu .dropdown-item:hover.readall,
.dropdown-menu .dropdown-item:focus.readall {
 background:0 0;
 color:#2185d0!important
}
.dropdown-menu .dropdown-item>div {
 width:calc(100% - 50px)
}
.dropdown-menu .dropdown-item.readall {
 padding:0
}
.dropdown-menu.dropdown-menu-arrow:after {
 display:inline-block;
 content:'';
 position:absolute;
 top:-10px;
 left:12px;
 border-right:10px solid transparent;
 border-bottom:10px solid #fff;
 border-left:10px solid transparent
}
.dropdown-menu.dropdown-menu-arrow.dropdown-menu-right:before,
.dropdown-menu.dropdown-menu-arrow.dropdown-menu-right:after {
 left:auto;
 right:12px
}
.dropdown-toggle {
 user-select:none;
 cursor:pointer
}
.dropdown-toggle:after {
 vertical-align:.155em
}
.dropdown-icon {
 display:inline-block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:inline;
 margin-right:.5rem;
 vertical-align:-1px
}
.list-inline-dots .list-inline-item+.list-inline-item:before {
 content:'· ';
 margin-left:-2px;
 margin-right:3px
}
.list-separated .list-separated-item {
 padding:.6rem 0
}
.list-separated .list-separated-item+.list-separated .list-separated-item {
 border-top:1px solid rgba(0,40,100,.12)
}
.list-group-item.active .icon {
 color:inherit!important
}
.list-group-transparent .list-group-item {
 background:0 0;
 border:0;
 padding:.5rem 1rem;
 border-radius:3px
}
.list-group-transparent .list-group-item.active {
 background:rgba(33,133,208,.06);
 font-weight:600;
 color:#333537
}
.avatar {
 color:#4d5052;
 font-weight:600;
 width:2rem;
 height:2rem;
 line-height:2rem;
 border-radius:50%;
 display:inline-block;
 background:#808488 no-repeat center/cover;
 position:relative;
 vertical-align:bottom;
 font-size:.875rem;
 user-select:none
}
.avatar i {
 font-size:125%;
 vertical-align:sub
}
.avatar.avatar-blue {
 background-color:#c8d9f1;
 color:#2185d0
}
.avatar.avatar-azure {
 background-color:#c7e6fb;
 color:#45aaf2
}
.avatar.avatar-indigo {
 background-color:#d1d5f0;
 color:#6435c9
}
.avatar.avatar-purple {
 background-color:#e4cff9;
 color:#a333c8
}
.avatar.avatar-pink {
 background-color:#fcd3e1;
 color:#e03997
}
.avatar.avatar-red {
 background-color:#f0bcbc;
 color:#db2828
}
.avatar.avatar-orange {
 background-color:#fee0c7;
 color:#f2711c
}
.avatar.avatar-yellow {
 background-color:#fbedb7;
 color:#fbbd08
}
.avatar.avatar-lime {
 background-color:#d7f2c2;
 color:#b5cc18
}
.avatar.avatar-green {
 background-color:#cfeab3;
 color:#21ba45
}
.avatar.avatar-teal {
 background-color:#bfefea;
 color:#00b5ad
}
.avatar.avatar-cyan {
 background-color:#b9e3ea;
 color:#17a2b8
}
.avatar-status {
 -webkit-border-radius:50%;
 -moz-border-radius:50%;
 border-radius:50%;
 background:#4d5052;
 position:absolute;
 right:-2px;
 bottom:-2px;
 width:.75rem;
 height:.75rem;
 border:2px solid #fff
}
.avatar-sm {
 width:1.5rem;
 height:1.5rem;
 line-height:1.5rem;
 font-size:.75rem
}
.avatar-md {
 width:2.2rem;
 height:2.2rem;
 line-height:2.2rem;
 font-size:1rem
}
.avatar-lg {
 width:3rem;
 height:3rem;
 line-height:3rem;
 font-size:1.25rem
}
.avatar-xl {
 width:4rem;
 height:4rem;
 line-height:4rem;
 font-size:1.75rem
}
.avatar-xxl {
 width:5rem;
 height:5rem;
 line-height:5rem;
 font-size:2rem
}
.avatar-placeholder {
 background:#808488 url('data:image/svg+xml;charset=utf8,<svg xmlns="http://www.w3.org/2000/svg" width="134" height="134" viewBox="0 0 134 134"><path fill="#4D5052" d="M65.92 66.34h2.16c14.802.42 30.928 6.062 29.283 20.35l-1.618 13.32c-.844 6.815-5.208 7.828-13.972 7.866H52.23c-8.764-.038-13.13-1.05-13.973-7.865l-1.62-13.32C34.994 72.4 51.12 66.76 65.92 66.34zM49.432 43.934c0-9.82 7.99-17.81 17.807-17.81 9.82 0 17.81 7.99 17.81 17.81 0 9.82-7.99 17.807-17.81 17.807-9.82 0-17.808-7.987-17.808-17.806z"/></svg>') no-repeat center/80%
}
.avatar-list {
 margin:0 0 -.5rem;
 padding:0;
 font-size:0
}
.avatar-list .avatar {
 margin-bottom:.5rem
}
.avatar-list .avatar:not(:last-child) {
 margin-right:.5rem
}
.avatar-list.list-inlineblock li {
 display:inline-block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:inline
}
.avatar-list-stacked .avatar {
 margin-right:-.8em!important
}
.avatar-list-stacked .avatar {
 box-shadow:0 0 0 2px #fff
}
.product-price {
 font-size:1rem
}
.product-price strong {
 font-size:1.5rem
}
@keyframes indeterminate {
 0% {
  left:-35%;
  right:100%
 }
 100%,
 60% {
  left:100%;
  right:-90%
 }
}
@keyframes indeterminate-short {
 0% {
  left:-200%;
  right:100%
 }
 100%,
 60% {
  left:107%;
  right:-8%
 }
}
.progress {
 position:relative
}
.progress.box_shadow {
 box-shadow:0 7px 10px rgba(41,43,48,.3)
}
.progress-xs,
.progress-xs .progress-bar {
 height:.25rem
}
.progress-sm,
.progress-sm .progress-bar {
 height:.5rem
}
.progress-bar-indeterminate:after,
.progress-bar-indeterminate:before {
 content:'';
 position:absolute;
 background-color:inherit;
 left:0;
 will-change:left,right;
 top:0;
 bottom:0
}
.progress-bar-indeterminate:before {
 animation:indeterminate 2.1s cubic-bezier(.65,.815,.735,.395) infinite
}
.progress-bar-indeterminate:after {
 animation:indeterminate-short 2.1s cubic-bezier(.165,.84,.44,1) infinite;
 animation-delay:1.15s
}
@keyframes loader {
 from {
  transform:rotate(0deg)
 }
 to {
  transform:rotate(360deg)
 }
}
.dimmer {
 position:relative
}
.dimmer .loader {
 display:none;
 margin:0 auto;
 position:absolute;
 top:50%;
 left:0;
 right:0;
 transform:translateY(-50%)
}
.dimmer.active .loader {
 display:block
}
.dimmer.active .dimmer-content {
 opacity:.5;
 pointer-events:none
}
.loader {
 height:2.5rem;
 width:2.5rem;
 color:#2185d0;
 display:block;
 position:relative
}
.loader:before,
.loader:after {
 width:2.5rem;
 height:2.5rem;
 margin:-1.25rem 0 0 -1.25rem;
 position:absolute;
 content:'';
 top:50%;
 left:50%
}
.loader:before {
 -webkit-border-radius:50%;
 -moz-border-radius:50%;
 border-radius:50%;
 border:3px solid currentColor;
 opacity:.15
}
.loader:after {
 -webkit-border-radius:50%;
 -moz-border-radius:50%;
 border-radius:50%;
 animation:loader .6s linear;
 animation-iteration-count:infinite;
 border:3px solid;
 border-color:transparent;
 border-top-color:currentColor;
 box-shadow:0 0 0 1px transparent
}
.icons-list {
 list-style:none;
 margin:0 -1px -1px 0;
 padding:0;
 display:flex;
 flex-wrap:wrap
}
.icons-list>li {
 flex:1 0 5rem
}
.icons-list-wrap {
 overflow:hidden
}
.icons-list-item {
 text-align:center;
 height:4rem;
 display:flex;
 align-items:center;
 justify-content:center;
 border-right:1px solid rgba(0,40,100,.12);
 border-bottom:1px solid rgba(0,40,100,.12)
}
.icons-list-item i {
 font-size:1.25rem
}
.img-gallery {
 margin-right:-.25rem;
 margin-left:-.25rem;
 margin-bottom:-.5rem
}
.img-gallery>.col,
.img-gallery>[class*=col-] {
 padding-left:.25rem;
 padding-right:.25rem;
 padding-bottom:.5rem
}
.link-overlay {
 position:relative
}
.link-overlay:hover .link-overlay-bg {
 opacity:1
}
.link-overlay-bg {
 position:absolute;
 top:0;
 left:0;
 right:0;
 bottom:0;
 background:rgba(33,133,208,.8);
 display:flex;
 color:#fff;
 align-items:center;
 justify-content:center;
 font-size:1.25rem;
 opacity:0;
 transition:.3s opacity
}
.media-icon {
 width:2rem;
 height:2rem;
 line-height:2rem;
 text-align:center;
 border-radius:100%
}
.media-list {
 margin:0;
 padding:0;
 list-style:none
}
textarea[cols] {
 height:auto
}
.form-group {
 display:block
}
.form-label {
 font-weight:600;
 display:block;
 margin-bottom:.375rem;
 font-size:.875rem
}
.form-label-small {
 font-weight:400;
 font-size:87.5%;
 float:right
}
.form-footer {
 margin-top:2rem
}
.custom-control {
 user-select:none
}
.custom-controls-stacked .custom-control {
 margin-bottom:.25rem
}
.custom-checkbox .custom-control-input {
 left:0
}
.custom-checkbox .custom-control-label {
 vertical-align:middle
}
.custom-checkbox .custom-control-label:before {
 border:1px solid rgba(0,40,100,.12);
 background-color:#fff;
 background-size:.5rem;
 top:.1rem
}
.custom-checkbox .custom-control-label:after {
 top:.1rem
}
.custom-control-description {
 line-height:1.5rem
}
.multiselect-custom+.btn-group ul.multiselect-container>li>a {
 padding:5px 15px;
 display:block;
 outline:none
}
.multiselect-custom+.btn-group ul.multiselect-container>li>a label.checkbox {
 color:#666a6d;
 padding:0
}
.multiselect-custom+.btn-group ul.multiselect-container>li>a label.checkbox:before {
 display:inline-block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:inline;
 position:relative;
 bottom:1px;
 content:"";
 width:16px;
 height:16px;
 margin-right:10px;
 border:1px solid #808488;
 background-color:#fafafa
}
.multiselect-custom+.btn-group ul.multiselect-container>li>a label.checkbox input[type=checkbox] {
 display:none
}
.multiselect-custom+.btn-group ul.multiselect-container>li.active>a label.checkbox:before {
 color:#666a6d;
 background-color:#d1d3d4;
 font-family:fontawesome;
 content:'\f00c';
 text-align:center;
 line-height:15px
}
.multiselect-custom+.btn-group ul.multiselect-container>li.active .checkbox {
 color:#333537
}
.multiselect-custom+.btn-group ul.multiselect-container>li:hover {
 background-color:#e8e9e9
}
.multiselect-custom+.btn-group ul.multiselect-container>li>a {
 padding:5px 15px;
 display:block;
 outline:none
}
.multiselect-custom+.btn-group ul.multiselect-container>li>a label.radio {
 padding:0
}
.multiselect-custom+.btn-group ul.multiselect-container>li>a label.radio:before {
 display:inline-block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:inline;
 -webkit-border-radius:8px;
 -moz-border-radius:8px;
 border-radius:8px;
 position:relative;
 bottom:1px;
 content:"";
 width:16px;
 height:16px;
 margin-right:10px;
 border:1px solid #ccc;
 background-color:#fafafa
}
.multiselect-custom+.btn-group ul.multiselect-container>li>a label.radio input[type=radio] {
 display:none
}
.multiselect-custom+.btn-group ul.multiselect-container>li.active>a label.radio:before {
 font-family:fontawesome;
 content:'\f111';
 color:#99a1a7;
 font-size:8px;
 text-align:center;
 line-height:15px
}
.multiselect-custom+.btn-group ul.multiselect-container>li.active .radio {
 color:#4d5052
}
.multiselect-custom+.btn-group ul.multiselect-container>li:hover {
 background-color:#e8e9e9
}
.multiselect-search {
 -moz-border-radius-topright:2px!important;
 -webkit-border-top-right-radius:2px!important;
 border-top-right-radius:2px!important;
 -moz-border-radius-bottomright:2px!important;
 -webkit-border-bottom-right-radius:2px!important;
 border-bottom-right-radius:2px!important
}
.btn.multiselect-clear-filter,
.dataTables_wrapper .dataTables_paginate .multiselect-clear-filter.paginate_button {
 -moz-box-shadow:none;
 -webkit-box-shadow:none;
 box-shadow:none;
 position:absolute;
 top:2px;
 right:0;
 padding-left:0;
 padding-right:0;
 border:none;
 background:0 0;
 z-index:9!important;
 outline:none
}
.btn.multiselect-clear-filter:hover,
.dataTables_wrapper .dataTables_paginate .multiselect-clear-filter.paginate_button:hover,
.btn.multiselect-clear-filter:focus,
.dataTables_wrapper .dataTables_paginate .multiselect-clear-filter.paginate_button:focus {
 background:0 0;
 outline:none
}
.multiselect_div>.btn-group {
 display:block
}
.multiselect_div>.btn-group .multiselect-item.multiselect-group {
 margin:0 15px
}
.multiselect_div>.btn-group .multiselect-item.filter {
 margin:0 15px
}
.multiselect_div>.btn-group .btn,
.multiselect_div>.btn-group .dataTables_wrapper .dataTables_paginate .paginate_button,
.dataTables_wrapper .dataTables_paginate .multiselect_div>.btn-group .paginate_button {
 text-align:left;
 position:relative;
 width:100%;
 box-shadow:none!important
}
.multiselect_div>.btn-group .btn:hover,
.multiselect_div>.btn-group .dataTables_wrapper .dataTables_paginate .paginate_button:hover,
.dataTables_wrapper .dataTables_paginate .multiselect_div>.btn-group .paginate_button:hover {
 box-shadow:none
}
.multiselect_div>.btn-group .btn:after,
.multiselect_div>.btn-group .dataTables_wrapper .dataTables_paginate .paginate_button:after,
.dataTables_wrapper .dataTables_paginate .multiselect_div>.btn-group .paginate_button:after {
 position:absolute;
 right:15px;
 top:15px
}
.multiselect_div>.btn-group ul {
 width:100%
}
.multiselect_div li a .checkbox {
 margin:0
}
.input-group-prepend,
.input-group-append,
.input-group-btn {
 font-size:.9375rem
}
.input-group-prepend>.btn,
.dataTables_wrapper .dataTables_paginate .input-group-prepend>.paginate_button,
.input-group-append>.btn,
.dataTables_wrapper .dataTables_paginate .input-group-append>.paginate_button,
.input-group-btn>.btn,
.dataTables_wrapper .dataTables_paginate .input-group-btn>.paginate_button {
 height:100%;
 border-color:rgba(0,40,100,.12)
}
.input-group-prepend>.input-group-text {
 border-right:0
}
.input-group-append>.input-group-text {
 border-left:0
}
.input-daterange .input-group-addon {
 width:40px;
 padding:4px 5px;
 text-align:center;
 background:#babdbf;
 margin:0;
 text-shadow:none
}
.datepicker table tr td,
.datepicker table tr th {
 width:35px;
 height:35px
}
.datepicker.datepicker-inline {
 width:100%
}
.datepicker.datepicker-inline .table-condensed {
 width:100%
}
.inline-datepicker.fill_bg {
 color:#fff
}
.inline-datepicker.fill_bg table tr td.old,
.inline-datepicker.fill_bg table tr td.new {
 color:#666a6d
}
.inline-datepicker.fill_bg table tr span.focused {
 color:#666a6d
}
.inline-datepicker.fill_bg .datepicker-switch:hover,
.inline-datepicker.fill_bg table tr td.day:hover,
.inline-datepicker.fill_bg table tr td span:hover {
 color:#292b30
}
.input-icon {
 position:relative
}
.input-icon .form-control:not(:last-child),
.input-icon .dataTables_wrapper .dataTables_filter:not(:last-child),
.dataTables_wrapper .input-icon .dataTables_filter:not(:last-child) {
 padding-right:2.5rem
}
.input-icon .form-control:not(:first-child),
.input-icon .dataTables_wrapper .dataTables_filter:not(:first-child),
.dataTables_wrapper .input-icon .dataTables_filter:not(:first-child) {
 padding-left:2.5rem
}
.custom-select {
 color:#434a54!important;
 font-size:14px
}
.custom-select .selectize-input {
 color:#434a54
}
.input-icon-addon {
 position:absolute;
 top:0;
 bottom:0;
 left:0;
 color:#9aa0ac;
 display:flex;
 align-items:center;
 justify-content:center;
 min-width:2.5rem;
 pointer-events:none
}
.input-icon-addon:last-child {
 left:auto;
 right:0
}
.form-fieldset {
 background:#e8e9e9;
 border:1px solid #d1d3d4;
 padding:1rem;
 border-radius:3px;
 margin-bottom:1rem
}
.form-required {
 color:#db2828
}
.form-required:before {
 content:' '
}
.state-valid {
 padding-right:2rem;
 background:str-replace(url("data:image/svg+xml;charset=utf8,<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='#21ba45' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-check'><polyline points='20 6 9 17 4 12'></polyline></svg>"),"#","%23") no-repeat center right 0.5rem/1rem
}
.state-invalid {
 padding-right:2rem;
 background:str-replace(url("data:image/svg+xml;charset=utf8,<svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='#db2828' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-x'><line x1='18' y1='6' x2='6' y2='18'></line><line x1='6' y1='6' x2='18' y2='18'></line></svg>"),"#","%23") no-repeat center right 0.5rem/1rem
}
.form-help {
 display:inline-block;
 width:1rem;
 height:1rem;
 text-align:center;
 line-height:1rem;
 color:#9aa0ac;
 background:#e8e9e9;
 border-radius:50%;
 font-size:.75rem;
 transition:.3s background-color,.3s color;
 text-decoration:none;
 cursor:pointer;
 user-select:none
}
.form-help:hover,
.form-help[aria-describedby] {
 background:#2185d0;
 color:#fff
}
.map,
.chart {
 position:relative;
 padding-top:56.25%
}
.map-square,
.chart-square {
 padding-top:100%
}
.map-content,
.chart-content {
 position:absolute;
 top:0;
 left:0;
 right:0;
 bottom:0
}
.map-header {
 margin-top:-1.5rem;
 margin-bottom:1.5rem;
 height:15rem;
 position:relative;
 margin-bottom:-1.5rem
}
.map-header:before {
 content:'';
 position:absolute;
 bottom:0;
 left:0;
 right:0;
 height:10rem;
 background:linear-gradient(to bottom,rgba(245,247,251,0) 5%,#f5f7fb 95%);
 pointer-events:none
}
.map-header-layer {
 height:100%
}
.map-static {
 height:120px;
 width:100%;
 max-width:640px;
 background-position:center center;
 background-size:640px 120px
}
@keyframes status-pulse {
 0%,
 100% {
  opacity:1
 }
 50% {
  opacity:.32
 }
}
.status-icon {
 content:'';
 width:.5rem;
 height:.5rem;
 display:inline-block;
 background:currentColor;
 border-radius:50%;
 transform:translateY(-1px);
 margin-right:.375rem;
 vertical-align:middle
}
.status-animated {
 animation:1s status-pulse infinite ease
}
.chips {
 margin:0 0 -.5rem
}
.chips .chip {
 margin:0 .5rem .5rem 0
}
.chip {
 -webkit-transition:all .3s ease-in-out;
 -moz-transition:all .3s ease-in-out;
 -ms-transition:all .3s ease-in-out;
 -o-transition:all .3s ease-in-out;
 transition:all .3s ease-in-out;
 -webkit-border-radius:1rem;
 -moz-border-radius:1rem;
 border-radius:1rem;
 font-weight:500;
 background-color:#e8e9e9;
 color:#6e7687;
 display:inline-block;
 height:2rem;
 line-height:2rem;
 font-size:.875rem;
 padding:0 .75rem
}
.chip .avatar {
 -webkit-border-radius:50%;
 -moz-border-radius:50%;
 border-radius:50%;
 float:left;
 margin:0 .5rem 0 -.75rem;
 height:2rem;
 width:2rem
}
a.chip:hover {
 background-color:#d1d3d4;
 color:inherit;
 text-decoration:none
}
.stamp {
 -webkit-border-radius:3px;
 -moz-border-radius:3px;
 border-radius:3px;
 color:#fff;
 background:#4d5052;
 font-weight:600;
 display:inline-block;
 min-width:2rem;
 height:2rem;
 padding:0 .25rem;
 line-height:2rem
}
.stamp-md {
 min-width:2.5rem;
 height:2.5rem;
 line-height:2.5rem
}
.tag {
 -webkit-border-radius:3px;
 -moz-border-radius:3px;
 border-radius:3px;
 font-size:.75rem;
 color:#6e7687;
 font-weight:400;
 background-color:#d1d3d4;
 padding:0 .5rem;
 line-height:2em;
 display:inline-flex;
 cursor:default;
 user-select:none
}
a.tag {
 -webkit-transition:all .3s ease-in-out;
 -moz-transition:all .3s ease-in-out;
 -ms-transition:all .3s ease-in-out;
 -o-transition:all .3s ease-in-out;
 transition:all .3s ease-in-out;
 text-decoration:none;
 cursor:pointer
}
a.tag:hover {
 background-color:rgba(110,118,135,.2);
 color:inherit
}
.tag-addon {
 display:inline-block;
 padding:0 .5rem;
 color:inherit;
 text-decoration:none;
 background:rgba(0,0,0,.06);
 margin:0 -.5rem 0 .5rem;
 min-width:1.5rem
}
.tag-addon:last-child {
 border-top-right-radius:3px;
 border-bottom-right-radius:3px
}
.tag-addon i {
 vertical-align:middle;
 margin:0 -.25rem
}
a.tag-addon {
 -webkit-transition:all .3s ease-in-out;
 -moz-transition:all .3s ease-in-out;
 -ms-transition:all .3s ease-in-out;
 -o-transition:all .3s ease-in-out;
 transition:all .3s ease-in-out;
 text-decoration:none;
 cursor:pointer
}
a.tag-addon:hover {
 background:rgba(0,0,0,.16);
 color:inherit
}
.tag-avatar {
 width:1.5rem;
 height:1.5rem;
 border-radius:3px 0 0 3px;
 margin:0 .5rem 0 -.5rem
}
.tag-blue {
 background-color:#2185d0;
 color:#fff
}
.tag-azure {
 background-color:#45aaf2;
 color:#fff
}
.tag-indigo {
 background-color:#6435c9;
 color:#fff
}
.tag-purple {
 background-color:#a333c8;
 color:#fff
}
.tag-pink {
 background-color:#e03997;
 color:#fff
}
.tag-red {
 background-color:#db2828;
 color:#fff
}
.tag-orange {
 background-color:#f2711c;
 color:#fff
}
.tag-yellow {
 background-color:#fbbd08;
 color:#fff
}
.tag-lime {
 background-color:#b5cc18;
 color:#fff
}
.tag-green {
 background-color:#21ba45;
 color:#fff
}
.tag-teal {
 background-color:#00b5ad;
 color:#fff
}
.tag-cyan {
 background-color:#17a2b8;
 color:#fff
}
.tag-white {
 background-color:#fff;
 color:#fff
}
.tag-gray {
 background-color:#4d5052;
 color:#fff
}
.tag-gray-dark {
 background-color:#292b30;
 color:#fff
}
.tag-primary {
 background-color:#2185d0;
 color:#fff
}
.tag-secondary {
 background-color:#4d5052;
 color:#fff
}
.tag-success {
 background-color:#21ba45;
 color:#fff
}
.tag-info {
 background-color:#17a2b8;
 color:#fff
}
.tag-warning {
 background-color:#fbbd08;
 color:#fff
}
.tag-danger {
 background-color:#db2828;
 color:#fff
}
.tag-light {
 background-color:#e8e9e9;
 color:#fff
}
.tag-dark {
 background-color:#292b30;
 color:#fff
}
.tag-rounded {
 -webkit-border-radius:50px;
 -moz-border-radius:50px;
 border-radius:50px
}
.tag-rounded .tag-avatar {
 -webkit-border-radius:50px;
 -moz-border-radius:50px;
 border-radius:50px
}
.tags {
 margin-bottom:-.5rem;
 font-size:0
}
.tags>.tag {
 margin-bottom:.5rem
}
.tags>.tag:not(:last-child) {
 margin-right:.5rem
}
.highlight .hll {
 background-color:#ffc
}
.highlight .c {
 color:#999
}
.highlight .k {
 color:#069
}
.highlight .o {
 color:#555
}
.highlight .cm {
 color:#999
}
.highlight .cp {
 color:#099
}
.highlight .c1 {
 color:#999
}
.highlight .cs {
 color:#999
}
.highlight .gd {
 background-color:#fcc;
 border:1px solid #c00
}
.highlight .ge {
 font-style:italic
}
.highlight .gr {
 color:red
}
.highlight .gh {
 color:#030
}
.highlight .gi {
 background-color:#cfc;
 border:1px solid #0c0
}
.highlight .go {
 color:#aaa
}
.highlight .gp {
 color:#009
}
.highlight .gu {
 color:#030
}
.highlight .gt {
 color:#9c6
}
.highlight .kc {
 color:#069
}
.highlight .kd {
 color:#069
}
.highlight .kn {
 color:#069
}
.highlight .kp {
 color:#069
}
.highlight .kr {
 color:#069
}
.highlight .kt {
 color:#078
}
.highlight .m {
 color:#f60
}
.highlight .s {
 color:#d44950
}
.highlight .na {
 color:#4f9fcf
}
.highlight .nb {
 color:#366
}
.highlight .nc {
 color:#0a8
}
.highlight .no {
 color:#360
}
.highlight .nd {
 color:#99f
}
.highlight .ni {
 color:#999
}
.highlight .ne {
 color:#c00
}
.highlight .nf {
 color:#c0f
}
.highlight .nl {
 color:#99f
}
.highlight .nn {
 color:#0cf
}
.highlight .nt {
 color:#2f6f9f
}
.highlight .nv {
 color:#033
}
.highlight .ow {
 color:#000
}
.highlight .w {
 color:#bbb
}
.highlight .mf {
 color:#f60
}
.highlight .mh {
 color:#f60
}
.highlight .mi {
 color:#f60
}
.highlight .mo {
 color:#f60
}
.highlight .sb {
 color:#c30
}
.highlight .sc {
 color:#c30
}
.highlight .sd {
 font-style:italic;
 color:#c30
}
.highlight .s2 {
 color:#c30
}
.highlight .se {
 color:#c30
}
.highlight .sh {
 color:#c30
}
.highlight .si {
 color:#a00
}
.highlight .sx {
 color:#c30
}
.highlight .sr {
 color:#3aa
}
.highlight .s1 {
 color:#c30
}
.highlight .ss {
 color:#fc3
}
.highlight .bp {
 color:#366
}
.highlight .vc {
 color:#033
}
.highlight .vg {
 color:#033
}
.highlight .vi {
 color:#033
}
.highlight .il {
 color:#f60
}
.highlight .css .o,
.highlight .css .o+.nt,
.highlight .css .nt+.nt {
 color:#999
}
.highlight .language-bash::before,
.highlight .language-sh::before {
 color:#009;
 content:"$ ";
 user-select:none
}
.highlight .language-powershell::before {
 color:#009;
 content:"PM> ";
 user-select:none
}
.carousel.vert .carousel-item-next.carousel-item-left,
.carousel.vert .carousel-item-prev.carousel-item-right {
 -webkit-transform:translate3d(0,0,0);
 transform:translate3d(0,0,0)
}
.carousel.vert .carousel-item-next,
.carousel.vert .active.carousel-item-right {
 -webkit-transform:translate3d(0,100%,0);
 transform:translate3d(0,100% 0)
}
.carousel.vert .carousel-item-prev,
.carousel.vert .active.carousel-item-left {
 -webkit-transform:translate3d(0,-100%,0);
 transform:translate3d(0,-100%,0)
}
.carousel-item-background {
 content:'';
 background:rgba(0,0,0,.5);
 position:absolute;
 top:0;
 left:0;
 right:0;
 bottom:0
}
.dataTables_wrapper thead .sorting {
 position:relative
}
.dataTables_wrapper thead .sorting:after {
 position:absolute;
 right:0;
 bottom:5px;
 content:"\e92d";
 font-family:feather!important
}
.dataTables_wrapper thead .sorting:before {
 position:absolute;
 right:0;
 top:5px;
 content:"\e930";
 font-family:feather!important
}
.dataTables_wrapper thead .sorting_desc {
 position:relative
}
.dataTables_wrapper thead .sorting_desc:after {
 position:absolute;
 right:0;
 bottom:5px;
 content:"\e92d";
 font-family:feather!important
}
.dataTables_wrapper thead .sorting_asc {
 position:relative
}
.dataTables_wrapper thead .sorting_asc:after {
 position:absolute;
 right:0;
 top:5px;
 content:"\e930";
 font-family:feather!important
}
.dataTables_wrapper .dataTables_length {
 float:left
}
.dataTables_wrapper .dataTables_length select {
 display:inline-block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:inline;
 width:auto;
 margin:0 .2rem
}
.dataTables_wrapper .dataTables_filter {
 color:#f4f6f9;
 float:right;
 text-align:right
}
.dataTables_wrapper .dataTables_filter input {
 display:inline-block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:inline;
 width:auto;
 margin-left:.2rem
}
.dataTables_wrapper .dataTables_paginate {
 float:right;
 text-align:right
}
.dataTables_wrapper .dataTables_info {
 color:#666a6d;
 clear:both;
 float:left;
 margin:0;
 padding:0!important;
 line-height:38px
}
.custom-range {
 align-items:center;
 appearance:none;
 background:0 0;
 cursor:pointer;
 display:flex;
 height:100%;
 min-height:2.375rem;
 overflow:hidden;
 padding:0;
 border:0
}
.custom-range:focus {
 box-shadow:none;
 outline:none
}
.custom-range:focus::-webkit-slider-thumb {
 border-color:#2185d0;
 background-color:#2185d0
}
.custom-range:focus::-moz-range-thumb {
 border-color:#2185d0;
 background-color:#2185d0
}
.custom-range:focus::-ms-thumb {
 border-color:#2185d0;
 background-color:#2185d0
}
.custom-range::-moz-focus-outer {
 border:0
}
.custom-range::-webkit-slider-runnable-track {
 background:#2185d0;
 content:'';
 height:2px;
 pointer-events:none
}
.custom-range::-webkit-slider-thumb {
 width:14px;
 height:14px;
 appearance:none;
 background:#fff;
 border-radius:50px;
 box-shadow:1px 0 0 -6px rgba(0,50,126,.12),6px 0 0 -6px rgba(0,50,126,.12),7px 0 0 -6px rgba(0,50,126,.12),8px 0 0 -6px rgba(0,50,126,.12),9px 0 0 -6px rgba(0,50,126,.12),10px 0 0 -6px rgba(0,50,126,.12),11px 0 0 -6px rgba(0,50,126,.12),12px 0 0 -6px rgba(0,50,126,.12),13px 0 0 -6px rgba(0,50,126,.12),14px 0 0 -6px rgba(0,50,126,.12),15px 0 0 -6px rgba(0,50,126,.12),16px 0 0 -6px rgba(0,50,126,.12),17px 0 0 -6px rgba(0,50,126,.12),18px 0 0 -6px rgba(0,50,126,.12),19px 0 0 -6px rgba(0,50,126,.12),20px 0 0 -6px rgba(0,50,126,.12),21px 0 0 -6px rgba(0,50,126,.12),22px 0 0 -6px rgba(0,50,126,.12),23px 0 0 -6px rgba(0,50,126,.12),24px 0 0 -6px rgba(0,50,126,.12),25px 0 0 -6px rgba(0,50,126,.12),26px 0 0 -6px rgba(0,50,126,.12),27px 0 0 -6px rgba(0,50,126,.12),28px 0 0 -6px rgba(0,50,126,.12),29px 0 0 -6px rgba(0,50,126,.12),30px 0 0 -6px rgba(0,50,126,.12),31px 0 0 -6px rgba(0,50,126,.12),32px 0 0 -6px rgba(0,50,126,.12),33px 0 0 -6px rgba(0,50,126,.12),34px 0 0 -6px rgba(0,50,126,.12),35px 0 0 -6px rgba(0,50,126,.12),36px 0 0 -6px rgba(0,50,126,.12),37px 0 0 -6px rgba(0,50,126,.12),38px 0 0 -6px rgba(0,50,126,.12),39px 0 0 -6px rgba(0,50,126,.12),40px 0 0 -6px rgba(0,50,126,.12),41px 0 0 -6px rgba(0,50,126,.12),42px 0 0 -6px rgba(0,50,126,.12),43px 0 0 -6px rgba(0,50,126,.12),44px 0 0 -6px rgba(0,50,126,.12),45px 0 0 -6px rgba(0,50,126,.12),46px 0 0 -6px rgba(0,50,126,.12),47px 0 0 -6px rgba(0,50,126,.12),48px 0 0 -6px rgba(0,50,126,.12),49px 0 0 -6px rgba(0,50,126,.12),50px 0 0 -6px rgba(0,50,126,.12),51px 0 0 -6px rgba(0,50,126,.12),52px 0 0 -6px rgba(0,50,126,.12),53px 0 0 -6px rgba(0,50,126,.12),54px 0 0 -6px rgba(0,50,126,.12),55px 0 0 -6px rgba(0,50,126,.12),56px 0 0 -6px rgba(0,50,126,.12),57px 0 0 -6px rgba(0,50,126,.12),58px 0 0 -6px rgba(0,50,126,.12),59px 0 0 -6px rgba(0,50,126,.12),60px 0 0 -6px rgba(0,50,126,.12),61px 0 0 -6px rgba(0,50,126,.12),62px 0 0 -6px rgba(0,50,126,.12),63px 0 0 -6px rgba(0,50,126,.12),64px 0 0 -6px rgba(0,50,126,.12),65px 0 0 -6px rgba(0,50,126,.12),66px 0 0 -6px rgba(0,50,126,.12),67px 0 0 -6px rgba(0,50,126,.12),68px 0 0 -6px rgba(0,50,126,.12),69px 0 0 -6px rgba(0,50,126,.12),70px 0 0 -6px rgba(0,50,126,.12),71px 0 0 -6px rgba(0,50,126,.12),72px 0 0 -6px rgba(0,50,126,.12),73px 0 0 -6px rgba(0,50,126,.12),74px 0 0 -6px rgba(0,50,126,.12),75px 0 0 -6px rgba(0,50,126,.12),76px 0 0 -6px rgba(0,50,126,.12),77px 0 0 -6px rgba(0,50,126,.12),78px 0 0 -6px rgba(0,50,126,.12),79px 0 0 -6px rgba(0,50,126,.12),80px 0 0 -6px rgba(0,50,126,.12),81px 0 0 -6px rgba(0,50,126,.12),82px 0 0 -6px rgba(0,50,126,.12),83px 0 0 -6px rgba(0,50,126,.12),84px 0 0 -6px rgba(0,50,126,.12),85px 0 0 -6px rgba(0,50,126,.12),86px 0 0 -6px rgba(0,50,126,.12),87px 0 0 -6px rgba(0,50,126,.12),88px 0 0 -6px rgba(0,50,126,.12),89px 0 0 -6px rgba(0,50,126,.12),90px 0 0 -6px rgba(0,50,126,.12),91px 0 0 -6px rgba(0,50,126,.12),92px 0 0 -6px rgba(0,50,126,.12),93px 0 0 -6px rgba(0,50,126,.12),94px 0 0 -6px rgba(0,50,126,.12),95px 0 0 -6px rgba(0,50,126,.12),96px 0 0 -6px rgba(0,50,126,.12),97px 0 0 -6px rgba(0,50,126,.12),98px 0 0 -6px rgba(0,50,126,.12),99px 0 0 -6px rgba(0,50,126,.12),100px 0 0 -6px rgba(0,50,126,.12),101px 0 0 -6px rgba(0,50,126,.12),102px 0 0 -6px rgba(0,50,126,.12),103px 0 0 -6px rgba(0,50,126,.12),104px 0 0 -6px rgba(0,50,126,.12),105px 0 0 -6px rgba(0,50,126,.12),106px 0 0 -6px rgba(0,50,126,.12),107px 0 0 -6px rgba(0,50,126,.12),108px 0 0 -6px rgba(0,50,126,.12),109px 0 0 -6px rgba(0,50,126,.12),110px 0 0 -6px rgba(0,50,126,.12),111px 0 0 -6px rgba(0,50,126,.12),112px 0 0 -6px rgba(0,50,126,.12),113px 0 0 -6px rgba(0,50,126,.12),114px 0 0 -6px rgba(0,50,126,.12),115px 0 0 -6px rgba(0,50,126,.12),116px 0 0 -6px rgba(0,50,126,.12),117px 0 0 -6px rgba(0,50,126,.12),118px 0 0 -6px rgba(0,50,126,.12),119px 0 0 -6px rgba(0,50,126,.12),120px 0 0 -6px rgba(0,50,126,.12),121px 0 0 -6px rgba(0,50,126,.12),122px 0 0 -6px rgba(0,50,126,.12),123px 0 0 -6px rgba(0,50,126,.12),124px 0 0 -6px rgba(0,50,126,.12),125px 0 0 -6px rgba(0,50,126,.12),126px 0 0 -6px rgba(0,50,126,.12),127px 0 0 -6px rgba(0,50,126,.12),128px 0 0 -6px rgba(0,50,126,.12),129px 0 0 -6px rgba(0,50,126,.12),130px 0 0 -6px rgba(0,50,126,.12),131px 0 0 -6px rgba(0,50,126,.12),132px 0 0 -6px rgba(0,50,126,.12),133px 0 0 -6px rgba(0,50,126,.12),134px 0 0 -6px rgba(0,50,126,.12),135px 0 0 -6px rgba(0,50,126,.12),136px 0 0 -6px rgba(0,50,126,.12),137px 0 0 -6px rgba(0,50,126,.12),138px 0 0 -6px rgba(0,50,126,.12),139px 0 0 -6px rgba(0,50,126,.12),140px 0 0 -6px rgba(0,50,126,.12),141px 0 0 -6px rgba(0,50,126,.12),142px 0 0 -6px rgba(0,50,126,.12),143px 0 0 -6px rgba(0,50,126,.12),144px 0 0 -6px rgba(0,50,126,.12),145px 0 0 -6px rgba(0,50,126,.12),146px 0 0 -6px rgba(0,50,126,.12),147px 0 0 -6px rgba(0,50,126,.12),148px 0 0 -6px rgba(0,50,126,.12),149px 0 0 -6px rgba(0,50,126,.12),150px 0 0 -6px rgba(0,50,126,.12),151px 0 0 -6px rgba(0,50,126,.12),152px 0 0 -6px rgba(0,50,126,.12),153px 0 0 -6px rgba(0,50,126,.12),154px 0 0 -6px rgba(0,50,126,.12),155px 0 0 -6px rgba(0,50,126,.12),156px 0 0 -6px rgba(0,50,126,.12),157px 0 0 -6px rgba(0,50,126,.12),158px 0 0 -6px rgba(0,50,126,.12),159px 0 0 -6px rgba(0,50,126,.12),160px 0 0 -6px rgba(0,50,126,.12),161px 0 0 -6px rgba(0,50,126,.12),162px 0 0 -6px rgba(0,50,126,.12),163px 0 0 -6px rgba(0,50,126,.12),164px 0 0 -6px rgba(0,50,126,.12),165px 0 0 -6px rgba(0,50,126,.12),166px 0 0 -6px rgba(0,50,126,.12),167px 0 0 -6px rgba(0,50,126,.12),168px 0 0 -6px rgba(0,50,126,.12),169px 0 0 -6px rgba(0,50,126,.12),170px 0 0 -6px rgba(0,50,126,.12),171px 0 0 -6px rgba(0,50,126,.12),172px 0 0 -6px rgba(0,50,126,.12),173px 0 0 -6px rgba(0,50,126,.12),174px 0 0 -6px rgba(0,50,126,.12),175px 0 0 -6px rgba(0,50,126,.12),176px 0 0 -6px rgba(0,50,126,.12),177px 0 0 -6px rgba(0,50,126,.12),178px 0 0 -6px rgba(0,50,126,.12),179px 0 0 -6px rgba(0,50,126,.12),180px 0 0 -6px rgba(0,50,126,.12),181px 0 0 -6px rgba(0,50,126,.12),182px 0 0 -6px rgba(0,50,126,.12),183px 0 0 -6px rgba(0,50,126,.12),184px 0 0 -6px rgba(0,50,126,.12),185px 0 0 -6px rgba(0,50,126,.12),186px 0 0 -6px rgba(0,50,126,.12),187px 0 0 -6px rgba(0,50,126,.12),188px 0 0 -6px rgba(0,50,126,.12),189px 0 0 -6px rgba(0,50,126,.12),190px 0 0 -6px rgba(0,50,126,.12),191px 0 0 -6px rgba(0,50,126,.12),192px 0 0 -6px rgba(0,50,126,.12),193px 0 0 -6px rgba(0,50,126,.12),194px 0 0 -6px rgba(0,50,126,.12),195px 0 0 -6px rgba(0,50,126,.12),196px 0 0 -6px rgba(0,50,126,.12),197px 0 0 -6px rgba(0,50,126,.12),198px 0 0 -6px rgba(0,50,126,.12),199px 0 0 -6px rgba(0,50,126,.12),200px 0 0 -6px rgba(0,50,126,.12),201px 0 0 -6px rgba(0,50,126,.12),202px 0 0 -6px rgba(0,50,126,.12),203px 0 0 -6px rgba(0,50,126,.12),204px 0 0 -6px rgba(0,50,126,.12),205px 0 0 -6px rgba(0,50,126,.12),206px 0 0 -6px rgba(0,50,126,.12),207px 0 0 -6px rgba(0,50,126,.12),208px 0 0 -6px rgba(0,50,126,.12),209px 0 0 -6px rgba(0,50,126,.12),210px 0 0 -6px rgba(0,50,126,.12),211px 0 0 -6px rgba(0,50,126,.12),212px 0 0 -6px rgba(0,50,126,.12),213px 0 0 -6px rgba(0,50,126,.12),214px 0 0 -6px rgba(0,50,126,.12),215px 0 0 -6px rgba(0,50,126,.12),216px 0 0 -6px rgba(0,50,126,.12),217px 0 0 -6px rgba(0,50,126,.12),218px 0 0 -6px rgba(0,50,126,.12),219px 0 0 -6px rgba(0,50,126,.12),220px 0 0 -6px rgba(0,50,126,.12),221px 0 0 -6px rgba(0,50,126,.12),222px 0 0 -6px rgba(0,50,126,.12),223px 0 0 -6px rgba(0,50,126,.12),224px 0 0 -6px rgba(0,50,126,.12),225px 0 0 -6px rgba(0,50,126,.12),226px 0 0 -6px rgba(0,50,126,.12),227px 0 0 -6px rgba(0,50,126,.12),228px 0 0 -6px rgba(0,50,126,.12),229px 0 0 -6px rgba(0,50,126,.12),230px 0 0 -6px rgba(0,50,126,.12),231px 0 0 -6px rgba(0,50,126,.12),232px 0 0 -6px rgba(0,50,126,.12),233px 0 0 -6px rgba(0,50,126,.12),234px 0 0 -6px rgba(0,50,126,.12),235px 0 0 -6px rgba(0,50,126,.12),236px 0 0 -6px rgba(0,50,126,.12),237px 0 0 -6px rgba(0,50,126,.12),238px 0 0 -6px rgba(0,50,126,.12),239px 0 0 -6px rgba(0,50,126,.12),240px 0 0 -6px rgba(0,50,126,.12);
 margin-top:-6px;
 border:1px solid rgba(0,30,75,.12);
 transition:.3s border-color,.3s background-color
}
.custom-range::-moz-range-track {
 width:240px;
 height:2px;
 background:rgba(0,50,126,.12)
}
.custom-range::-moz-range-thumb {
 width:14px;
 height:14px;
 background:#fff;
 border-radius:50px;
 border:1px solid rgba(0,30,75,.12);
 position:relative;
 transition:.3s border-color,.3s background-color
}
.custom-range::-moz-range-progress {
 height:2px;
 background:#2185d0;
 border:0;
 margin-top:0
}
.custom-range::-ms-track {
 background:0 0;
 border:0;
 border-color:transparent;
 border-radius:0;
 border-width:0;
 color:transparent;
 height:2px;
 margin-top:10px;
 width:240px
}
.custom-range::-ms-thumb {
 width:240px;
 height:2px;
 background:#fff;
 border-radius:50px;
 border:1px solid rgba(0,30,75,.12);
 transition:.3s border-color,.3s background-color
}
.custom-range::-ms-fill-lower {
 background:#2185d0;
 border-radius:0
}
.custom-range::-ms-fill-upper {
 background:rgba(0,50,126,.12);
 border-radius:0
}
.custom-range::-ms-tooltip {
 display:none
}
.selectgroup {
 display:inline-flex
}
.selectgroup-vertical {
 flex-direction:column
}
.selectgroup-item {
 flex-grow:1;
 position:relative
}
.selectgroup:not(.selectgroup-vertical)>.selectgroup-item+.selectgroup-item {
 margin-left:-1px
}
.selectgroup:not(.selectgroup-vertical)>.selectgroup-item:not(:first-child) .selectgroup-button {
 border-top-left-radius:0;
 border-bottom-left-radius:0
}
.selectgroup:not(.selectgroup-vertical)>.selectgroup-item:not(:last-child) .selectgroup-button {
 border-top-right-radius:0;
 border-bottom-right-radius:0
}
.selectgroup-vertical>.selectgroup-item:not(:last-child) {
 margin-bottom:0
}
.selectgroup-vertical>.selectgroup-item+.selectgroup-item {
 margin-top:-1px;
 margin-left:0
}
.selectgroup-vertical>.selectgroup-item:not(:first-child) .selectgroup-button {
 border-top-left-radius:0;
 border-top-right-radius:0
}
.selectgroup-vertical>.selectgroup-item:not(:last-child) .selectgroup-button {
 border-bottom-left-radius:0;
 border-bottom-right-radius:0
}
.selectgroup-input {
 opacity:0;
 position:absolute;
 z-index:-1;
 top:0;
 left:0
}
.selectgroup-button {
 display:block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:block;
 -webkit-border-radius:3px;
 -moz-border-radius:3px;
 border-radius:3px;
 color:#9aa0ac;
 font-size:14px;
 min-width:2.375rem;
 border:1px solid rgba(0,40,100,.12);
 padding:5px 15px;
 position:relative;
 cursor:pointer;
 user-select:none;
 line-height:1.5rem
}
.selectgroup-button-icon {
 padding-left:.5rem;
 padding-right:.5rem;
 font-size:1rem
}
.selectgroup-input:checked+.selectgroup-button {
 border-color:#2185d0;
 color:#2185d0;
 background:#e9f3fa;
 z-index:1
}
.selectgroup-input:focus+.selectgroup-button {
 border-color:#2185d0;
 color:#2185d0;
 z-index:2
}
.selectgroup-pills {
 flex-wrap:wrap;
 align-items:flex-start
}
.selectgroup-pills .selectgroup-item {
 margin-right:.5rem;
 flex-grow:0
}
.selectgroup-pills .selectgroup-button {
 border-radius:50px!important
}
.custom-switch {
 user-select:none;
 cursor:default;
 display:inline-flex;
 align-items:center;
 padding:0
}
.custom-switch-input {
 position:absolute;
 z-index:-1;
 opacity:0
}
.custom-switches-stacked {
 display:flex;
 flex-direction:column
}
.custom-switches-stacked .custom-switch {
 margin-bottom:.5rem
}
.custom-switch-indicator {
 -webkit-border-radius:50px;
 -moz-border-radius:50px;
 border-radius:50px;
 display:inline-block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:inline;
 height:1.25rem;
 width:2.25rem;
 background:#d1d3d4;
 transition:.3s border-color,.3s background-color;
 position:relative;
 vertical-align:bottom;
 border:1px solid rgba(0,40,100,.12)
}
.custom-switch-indicator:before {
 -webkit-border-radius:50%;
 -moz-border-radius:50%;
 border-radius:50%;
 height:calc(1.25rem - 4px);
 width:calc(1.25rem - 4px);
 top:1px;
 left:1px;
 background:#fff;
 content:'';
 position:absolute;
 transition:.3s left;
 box-shadow:0 1px 2px 0 rgba(0,0,0,.4)
}
.custom-switch-input:checked~.custom-switch-indicator {
 background:#2185d0
}
.custom-switch-input:checked~.custom-switch-indicator:before {
 left:calc(1rem + 1px)
}
.custom-switch-input:focus~.custom-switch-indicator {
 border-color:#2185d0
}
.custom-switch-description {
 color:#666a6d;
 margin-left:.5rem;
 transition:.3s color
}
.custom-switch-input:checked~.custom-switch-description {
 color:#434a54
}
.imagecheck {
 margin:0;
 position:relative;
 cursor:pointer
}
.imagecheck-input {
 position:absolute;
 z-index:-1;
 opacity:0
}
.imagecheck-figure {
 -webkit-border-radius:3px;
 -moz-border-radius:3px;
 border-radius:3px;
 margin:0;
 border:1px solid rgba(0,40,100,.12);
 position:relative
}
.imagecheck-input:focus~.imagecheck-figure {
 border-color:#2185d0
}
.imagecheck-input:checked~.imagecheck-figure {
 border-color:rgba(0,40,100,.24)
}
.imagecheck-figure:before {
 -webkit-border-radius:3px;
 -moz-border-radius:3px;
 border-radius:3px;
 display:block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:block;
 content:'\f14a';
 font-family:fontawesome;
 position:absolute;
 top:.25rem;
 left:.25rem;
 width:1rem;
 height:1rem;
 pointer-events:none;
 user-select:none;
 color:#2185d0;
 z-index:1;
 opacity:0;
 transition:.3s opacity
}
.imagecheck-input:checked~.imagecheck-figure:before {
 opacity:1
}
.imagecheck-image {
 max-width:100%;
 opacity:.64;
 transition:.3s opacity
}
.imagecheck-image:first-child {
 border-top-left-radius:2px;
 border-top-right-radius:2px
}
.imagecheck-image:last-child {
 border-bottom-left-radius:2px;
 border-bottom-right-radius:2px
}
.imagecheck:hover .imagecheck-image,
.imagecheck-input:focus~.imagecheck-figure .imagecheck-image,
.imagecheck-input:checked~.imagecheck-figure .imagecheck-image {
 opacity:1
}
.imagecheck-caption {
 text-align:center;
 padding:.25rem;
 color:#9aa0ac;
 font-size:.875rem;
 transition:.3s color
}
.imagecheck:hover .imagecheck-caption,
.imagecheck-input:focus~.imagecheck-figure .imagecheck-caption,
.imagecheck-input:checked~.imagecheck-figure .imagecheck-caption {
 color:#f4f6f9
}
.colorinput {
 margin:0;
 position:relative;
 cursor:pointer
}
.colorinput-input {
 position:absolute;
 z-index:-1;
 opacity:0
}
.colorinput-color {
 -webkit-border-radius:3px;
 -moz-border-radius:3px;
 border-radius:3px;
 display:inline-block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:inline;
 border:1px solid rgba(0,40,100,.12);
 color:#fff;
 width:1.75rem;
 height:1.75rem;
 box-shadow:0 1px 2px 0 rgba(0,0,0,.05)
}
.colorinput-color:before {
 content:'\e92a';
 font-family:feather!important;
 opacity:0;
 position:absolute;
 top:3px;
 left:6px
}
.colorinput-input:checked~.colorinput-color:before {
 opacity:1
}
.colorinput-input:focus~.colorinput-color {
 border-color:#2185d0
}
.browser {
 width:1.25rem;
 height:1.25rem;
 display:inline-block;
 background:no-repeat center/100% 100%;
 vertical-align:bottom;
 font-style:normal
}
.browser-android-browser {
 background-image:url(../../assets/images/browsers/android-browser.svg)
}
.browser-aol-explorer {
 background-image:url(../../assets/images/browsers/aol-explorer.svg)
}
.browser-blackberry {
 background-image:url(../../assets/images/browsers/blackberry.svg)
}
.browser-camino {
 background-image:url(../../assets/images/browsers/camino.svg)
}
.browser-chrome {
 background-image:url(../../assets/images/browsers/chrome.svg)
}
.browser-chromium {
 background-image:url(../../assets/images/browsers/chromium.svg)
}
.browser-dolphin {
 background-image:url(../../assets/images/browsers/dolphin.svg)
}
.browser-edge {
 background-image:url(../../assets/images/browsers/edge.svg)
}
.browser-firefox {
 background-image:url(../../assets/images/browsers/firefox.svg)
}
.browser-ie {
 background-image:url(../../assets/images/browsers/ie.svg)
}
.browser-maxthon {
 background-image:url(../../assets/images/browsers/maxthon.svg)
}
.browser-mozilla {
 background-image:url(../../assets/images/browsers/mozilla.svg)
}
.browser-netscape {
 background-image:url(../../assets/images/browsers/netscape.svg)
}
.browser-opera {
 background-image:url(../../assets/images/browsers/opera.svg)
}
.browser-safari {
 background-image:url(../../assets/images/browsers/safari.svg)
}
.browser-sleipnir {
 background-image:url(../../assets/images/browsers/sleipnir.svg)
}
.browser-uc-browser {
 background-image:url(../../assets/images/browsers/uc-browser.svg)
}
.browser-vivaldi {
 background-image:url(../../assets/images/browsers/vivaldi.svg)
}
.flag {
 -webkit-border-radius:2px;
 -moz-border-radius:2px;
 border-radius:2px;
 width:1.6rem;
 height:1.2rem;
 display:inline-block;
 background:no-repeat center/100% 100%;
 vertical-align:bottom;
 font-style:normal;
 box-shadow:0 0 1px 1px rgba(0,0,0,.1)
}
.flag-ad {
 background-image:url(../../assets/images/flags/ad.svg)
}
.flag-ae {
 background-image:url(../../assets/images/flags/ae.svg)
}
.flag-af {
 background-image:url(../../assets/images/flags/af.svg)
}
.flag-ag {
 background-image:url(../../assets/images/flags/ag.svg)
}
.flag-ai {
 background-image:url(../../assets/images/flags/ai.svg)
}
.flag-al {
 background-image:url(../../assets/images/flags/al.svg)
}
.flag-am {
 background-image:url(../../assets/images/flags/am.svg)
}
.flag-ao {
 background-image:url(../../assets/images/flags/ao.svg)
}
.flag-aq {
 background-image:url(../../assets/images/flags/aq.svg)
}
.flag-ar {
 background-image:url(../../assets/images/flags/ar.svg)
}
.flag-as {
 background-image:url(../../assets/images/flags/as.svg)
}
.flag-at {
 background-image:url(../../assets/images/flags/at.svg)
}
.flag-au {
 background-image:url(../../assets/images/flags/au.svg)
}
.flag-aw {
 background-image:url(../../assets/images/flags/aw.svg)
}
.flag-ax {
 background-image:url(../../assets/images/flags/ax.svg)
}
.flag-az {
 background-image:url(../../assets/images/flags/az.svg)
}
.flag-ba {
 background-image:url(../../assets/images/flags/ba.svg)
}
.flag-bb {
 background-image:url(../../assets/images/flags/bb.svg)
}
.flag-bd {
 background-image:url(../../assets/images/flags/bd.svg)
}
.flag-be {
 background-image:url(../../assets/images/flags/be.svg)
}
.flag-bf {
 background-image:url(../../assets/images/flags/bf.svg)
}
.flag-bg {
 background-image:url(../../assets/images/flags/bg.svg)
}
.flag-bh {
 background-image:url(../../assets/images/flags/bh.svg)
}
.flag-bi {
 background-image:url(../../assets/images/flags/bi.svg)
}
.flag-bj {
 background-image:url(../../assets/images/flags/bj.svg)
}
.flag-bl {
 background-image:url(../../assets/images/flags/bl.svg)
}
.flag-bm {
 background-image:url(../../assets/images/flags/bm.svg)
}
.flag-bn {
 background-image:url(../../assets/images/flags/bn.svg)
}
.flag-bo {
 background-image:url(../../assets/images/flags/bo.svg)
}
.flag-bq {
 background-image:url(../../assets/images/flags/bq.svg)
}
.flag-br {
 background-image:url(../../assets/images/flags/br.svg)
}
.flag-bs {
 background-image:url(../../assets/images/flags/bs.svg)
}
.flag-bt {
 background-image:url(../../assets/images/flags/bt.svg)
}
.flag-bv {
 background-image:url(../../assets/images/flags/bv.svg)
}
.flag-bw {
 background-image:url(../../assets/images/flags/bw.svg)
}
.flag-by {
 background-image:url(../../assets/images/flags/by.svg)
}
.flag-bz {
 background-image:url(../../assets/images/flags/bz.svg)
}
.flag-ca {
 background-image:url(../../assets/images/flags/ca.svg)
}
.flag-cc {
 background-image:url(../../assets/images/flags/cc.svg)
}
.flag-cd {
 background-image:url(../../assets/images/flags/cd.svg)
}
.flag-cf {
 background-image:url(../../assets/images/flags/cf.svg)
}
.flag-cg {
 background-image:url(../../assets/images/flags/cg.svg)
}
.flag-ch {
 background-image:url(../../assets/images/flags/ch.svg)
}
.flag-ci {
 background-image:url(../../assets/images/flags/ci.svg)
}
.flag-ck {
 background-image:url(../../assets/images/flags/ck.svg)
}
.flag-cl {
 background-image:url(../../assets/images/flags/cl.svg)
}
.flag-cm {
 background-image:url(../../assets/images/flags/cm.svg)
}
.flag-cn {
 background-image:url(../../assets/images/flags/cn.svg)
}
.flag-co {
 background-image:url(../../assets/images/flags/co.svg)
}
.flag-cr {
 background-image:url(../../assets/images/flags/cr.svg)
}
.flag-cu {
 background-image:url(../../assets/images/flags/cu.svg)
}
.flag-cv {
 background-image:url(../../assets/images/flags/cv.svg)
}
.flag-cw {
 background-image:url(../../assets/images/flags/cw.svg)
}
.flag-cx {
 background-image:url(../../assets/images/flags/cx.svg)
}
.flag-cy {
 background-image:url(../../assets/images/flags/cy.svg)
}
.flag-cz {
 background-image:url(../../assets/images/flags/cz.svg)
}
.flag-de {
 background-image:url(../../assets/images/flags/de.svg)
}
.flag-dj {
 background-image:url(../../assets/images/flags/dj.svg)
}
.flag-dk {
 background-image:url(../../assets/images/flags/dk.svg)
}
.flag-dm {
 background-image:url(../../assets/images/flags/dm.svg)
}
.flag-do {
 background-image:url(../../assets/images/flags/do.svg)
}
.flag-dz {
 background-image:url(../../assets/images/flags/dz.svg)
}
.flag-ec {
 background-image:url(../../assets/images/flags/ec.svg)
}
.flag-ee {
 background-image:url(../../assets/images/flags/ee.svg)
}
.flag-eg {
 background-image:url(../../assets/images/flags/eg.svg)
}
.flag-eh {
 background-image:url(../../assets/images/flags/eh.svg)
}
.flag-er {
 background-image:url(../../assets/images/flags/er.svg)
}
.flag-es {
 background-image:url(../../assets/images/flags/es.svg)
}
.flag-et {
 background-image:url(../../assets/images/flags/et.svg)
}
.flag-eu {
 background-image:url(../../assets/images/flags/eu.svg)
}
.flag-fi {
 background-image:url(../../assets/images/flags/fi.svg)
}
.flag-fj {
 background-image:url(../../assets/images/flags/fj.svg)
}
.flag-fk {
 background-image:url(../../assets/images/flags/fk.svg)
}
.flag-fm {
 background-image:url(../../assets/images/flags/fm.svg)
}
.flag-fo {
 background-image:url(../../assets/images/flags/fo.svg)
}
.flag-fr {
 background-image:url(../../assets/images/flags/fr.svg)
}
.flag-ga {
 background-image:url(../../assets/images/flags/ga.svg)
}
.flag-gb-eng {
 background-image:url(../../assets/images/flags/gb-eng.svg)
}
.flag-gb-nir {
 background-image:url(../../assets/images/flags/gb-nir.svg)
}
.flag-gb-sct {
 background-image:url(../../assets/images/flags/gb-sct.svg)
}
.flag-gb-wls {
 background-image:url(../../assets/images/flags/gb-wls.svg)
}
.flag-gb {
 background-image:url(../../assets/images/flags/gb.svg)
}
.flag-gd {
 background-image:url(../../assets/images/flags/gd.svg)
}
.flag-ge {
 background-image:url(../../assets/images/flags/ge.svg)
}
.flag-gf {
 background-image:url(../../assets/images/flags/gf.svg)
}
.flag-gg {
 background-image:url(../../assets/images/flags/gg.svg)
}
.flag-gh {
 background-image:url(../../assets/images/flags/gh.svg)
}
.flag-gi {
 background-image:url(../../assets/images/flags/gi.svg)
}
.flag-gl {
 background-image:url(../../assets/images/flags/gl.svg)
}
.flag-gm {
 background-image:url(../../assets/images/flags/gm.svg)
}
.flag-gn {
 background-image:url(../../assets/images/flags/gn.svg)
}
.flag-gp {
 background-image:url(../../assets/images/flags/gp.svg)
}
.flag-gq {
 background-image:url(../../assets/images/flags/gq.svg)
}
.flag-gr {
 background-image:url(../../assets/images/flags/gr.svg)
}
.flag-gs {
 background-image:url(../../assets/images/flags/gs.svg)
}
.flag-gt {
 background-image:url(../../assets/images/flags/gt.svg)
}
.flag-gu {
 background-image:url(../../assets/images/flags/gu.svg)
}
.flag-gw {
 background-image:url(../../assets/images/flags/gw.svg)
}
.flag-gy {
 background-image:url(../../assets/images/flags/gy.svg)
}
.flag-hk {
 background-image:url(../../assets/images/flags/hk.svg)
}
.flag-hm {
 background-image:url(../../assets/images/flags/hm.svg)
}
.flag-hn {
 background-image:url(../../assets/images/flags/hn.svg)
}
.flag-hr {
 background-image:url(../../assets/images/flags/hr.svg)
}
.flag-ht {
 background-image:url(../../assets/images/flags/ht.svg)
}
.flag-hu {
 background-image:url(../../assets/images/flags/hu.svg)
}
.flag-id {
 background-image:url(../../assets/images/flags/id.svg)
}
.flag-ie {
 background-image:url(../../assets/images/flags/ie.svg)
}
.flag-il {
 background-image:url(../../assets/images/flags/il.svg)
}
.flag-im {
 background-image:url(../../assets/images/flags/im.svg)
}
.flag-in {
 background-image:url(../../assets/images/flags/in.svg)
}
.flag-io {
 background-image:url(../../assets/images/flags/io.svg)
}
.flag-iq {
 background-image:url(../../assets/images/flags/iq.svg)
}
.flag-ir {
 background-image:url(../../assets/images/flags/ir.svg)
}
.flag-is {
 background-image:url(../../assets/images/flags/is.svg)
}
.flag-it {
 background-image:url(../../assets/images/flags/it.svg)
}
.flag-je {
 background-image:url(../../assets/images/flags/je.svg)
}
.flag-jm {
 background-image:url(../../assets/images/flags/jm.svg)
}
.flag-jo {
 background-image:url(../../assets/images/flags/jo.svg)
}
.flag-jp {
 background-image:url(../../assets/images/flags/jp.svg)
}
.flag-ke {
 background-image:url(../../assets/images/flags/ke.svg)
}
.flag-kg {
 background-image:url(../../assets/images/flags/kg.svg)
}
.flag-kh {
 background-image:url(../../assets/images/flags/kh.svg)
}
.flag-ki {
 background-image:url(../../assets/images/flags/ki.svg)
}
.flag-km {
 background-image:url(../../assets/images/flags/km.svg)
}
.flag-kn {
 background-image:url(../../assets/images/flags/kn.svg)
}
.flag-kp {
 background-image:url(../../assets/images/flags/kp.svg)
}
.flag-kr {
 background-image:url(../../assets/images/flags/kr.svg)
}
.flag-kw {
 background-image:url(../../assets/images/flags/kw.svg)
}
.flag-ky {
 background-image:url(../../assets/images/flags/ky.svg)
}
.flag-kz {
 background-image:url(../../assets/images/flags/kz.svg)
}
.flag-la {
 background-image:url(../../assets/images/flags/la.svg)
}
.flag-lb {
 background-image:url(../../assets/images/flags/lb.svg)
}
.flag-lc {
 background-image:url(../../assets/images/flags/lc.svg)
}
.flag-li {
 background-image:url(../../assets/images/flags/li.svg)
}
.flag-lk {
 background-image:url(../../assets/images/flags/lk.svg)
}
.flag-lr {
 background-image:url(../../assets/images/flags/lr.svg)
}
.flag-ls {
 background-image:url(../../assets/images/flags/ls.svg)
}
.flag-lt {
 background-image:url(../../assets/images/flags/lt.svg)
}
.flag-lu {
 background-image:url(../../assets/images/flags/lu.svg)
}
.flag-lv {
 background-image:url(../../assets/images/flags/lv.svg)
}
.flag-ly {
 background-image:url(../../assets/images/flags/ly.svg)
}
.flag-ma {
 background-image:url(../../assets/images/flags/ma.svg)
}
.flag-mc {
 background-image:url(../../assets/images/flags/mc.svg)
}
.flag-md {
 background-image:url(../../assets/images/flags/md.svg)
}
.flag-me {
 background-image:url(../../assets/images/flags/me.svg)
}
.flag-mf {
 background-image:url(../../assets/images/flags/mf.svg)
}
.flag-mg {
 background-image:url(../../assets/images/flags/mg.svg)
}
.flag-mh {
 background-image:url(../../assets/images/flags/mh.svg)
}
.flag-mk {
 background-image:url(../../assets/images/flags/mk.svg)
}
.flag-ml {
 background-image:url(../../assets/images/flags/ml.svg)
}
.flag-mm {
 background-image:url(../../assets/images/flags/mm.svg)
}
.flag-mn {
 background-image:url(../../assets/images/flags/mn.svg)
}
.flag-mo {
 background-image:url(../../assets/images/flags/mo.svg)
}
.flag-mp {
 background-image:url(../../assets/images/flags/mp.svg)
}
.flag-mq {
 background-image:url(../../assets/images/flags/mq.svg)
}
.flag-mr {
 background-image:url(../../assets/images/flags/mr.svg)
}
.flag-ms {
 background-image:url(../../assets/images/flags/ms.svg)
}
.flag-mt {
 background-image:url(../../assets/images/flags/mt.svg)
}
.flag-mu {
 background-image:url(../../assets/images/flags/mu.svg)
}
.flag-mv {
 background-image:url(../../assets/images/flags/mv.svg)
}
.flag-mw {
 background-image:url(../../assets/images/flags/mw.svg)
}
.flag-mx {
 background-image:url(../../assets/images/flags/mx.svg)
}
.flag-my {
 background-image:url(../../assets/images/flags/my.svg)
}
.flag-mz {
 background-image:url(../../assets/images/flags/mz.svg)
}
.flag-na {
 background-image:url(../../assets/images/flags/na.svg)
}
.flag-nc {
 background-image:url(../../assets/images/flags/nc.svg)
}
.flag-ne {
 background-image:url(../../assets/images/flags/ne.svg)
}
.flag-nf {
 background-image:url(../../assets/images/flags/nf.svg)
}
.flag-ng {
 background-image:url(../../assets/images/flags/ng.svg)
}
.flag-ni {
 background-image:url(../../assets/images/flags/ni.svg)
}
.flag-nl {
 background-image:url(../../assets/images/flags/nl.svg)
}
.flag-no {
 background-image:url(../../assets/images/flags/no.svg)
}
.flag-np {
 background-image:url(../../assets/images/flags/np.svg)
}
.flag-nr {
 background-image:url(../../assets/images/flags/nr.svg)
}
.flag-nu {
 background-image:url(../../assets/images/flags/nu.svg)
}
.flag-nz {
 background-image:url(../../assets/images/flags/nz.svg)
}
.flag-om {
 background-image:url(../../assets/images/flags/om.svg)
}
.flag-pa {
 background-image:url(../../assets/images/flags/pa.svg)
}
.flag-pe {
 background-image:url(../../assets/images/flags/pe.svg)
}
.flag-pf {
 background-image:url(../../assets/images/flags/pf.svg)
}
.flag-pg {
 background-image:url(../../assets/images/flags/pg.svg)
}
.flag-ph {
 background-image:url(../../assets/images/flags/ph.svg)
}
.flag-pk {
 background-image:url(../../assets/images/flags/pk.svg)
}
.flag-pl {
 background-image:url(../../assets/images/flags/pl.svg)
}
.flag-pm {
 background-image:url(../../assets/images/flags/pm.svg)
}
.flag-pn {
 background-image:url(../../assets/images/flags/pn.svg)
}
.flag-pr {
 background-image:url(../../assets/images/flags/pr.svg)
}
.flag-ps {
 background-image:url(../../assets/images/flags/ps.svg)
}
.flag-pt {
 background-image:url(../../assets/images/flags/pt.svg)
}
.flag-pw {
 background-image:url(../../assets/images/flags/pw.svg)
}
.flag-py {
 background-image:url(../../assets/images/flags/py.svg)
}
.flag-qa {
 background-image:url(../../assets/images/flags/qa.svg)
}
.flag-re {
 background-image:url(../../assets/images/flags/re.svg)
}
.flag-ro {
 background-image:url(../../assets/images/flags/ro.svg)
}
.flag-rs {
 background-image:url(../../assets/images/flags/rs.svg)
}
.flag-ru {
 background-image:url(../../assets/images/flags/ru.svg)
}
.flag-rw {
 background-image:url(../../assets/images/flags/rw.svg)
}
.flag-sa {
 background-image:url(../../assets/images/flags/sa.svg)
}
.flag-sb {
 background-image:url(../../assets/images/flags/sb.svg)
}
.flag-sc {
 background-image:url(../../assets/images/flags/sc.svg)
}
.flag-sd {
 background-image:url(../../assets/images/flags/sd.svg)
}
.flag-se {
 background-image:url(../../assets/images/flags/se.svg)
}
.flag-sg {
 background-image:url(../../assets/images/flags/sg.svg)
}
.flag-sh {
 background-image:url(../../assets/images/flags/sh.svg)
}
.flag-si {
 background-image:url(../../assets/images/flags/si.svg)
}
.flag-sj {
 background-image:url(../../assets/images/flags/sj.svg)
}
.flag-sk {
 background-image:url(../../assets/images/flags/sk.svg)
}
.flag-sl {
 background-image:url(../../assets/images/flags/sl.svg)
}
.flag-sm {
 background-image:url(../../assets/images/flags/sm.svg)
}
.flag-sn {
 background-image:url(../../assets/images/flags/sn.svg)
}
.flag-so {
 background-image:url(../../assets/images/flags/so.svg)
}
.flag-sr {
 background-image:url(../../assets/images/flags/sr.svg)
}
.flag-ss {
 background-image:url(../../assets/images/flags/ss.svg)
}
.flag-st {
 background-image:url(../../assets/images/flags/st.svg)
}
.flag-sv {
 background-image:url(../../assets/images/flags/sv.svg)
}
.flag-sx {
 background-image:url(../../assets/images/flags/sx.svg)
}
.flag-sy {
 background-image:url(../../assets/images/flags/sy.svg)
}
.flag-sz {
 background-image:url(../../assets/images/flags/sz.svg)
}
.flag-tc {
 background-image:url(../../assets/images/flags/tc.svg)
}
.flag-td {
 background-image:url(../../assets/images/flags/td.svg)
}
.flag-tf {
 background-image:url(../../assets/images/flags/tf.svg)
}
.flag-tg {
 background-image:url(../../assets/images/flags/tg.svg)
}
.flag-th {
 background-image:url(../../assets/images/flags/th.svg)
}
.flag-tj {
 background-image:url(../../assets/images/flags/tj.svg)
}
.flag-tk {
 background-image:url(../../assets/images/flags/tk.svg)
}
.flag-tl {
 background-image:url(../../assets/images/flags/tl.svg)
}
.flag-tm {
 background-image:url(../../assets/images/flags/tm.svg)
}
.flag-tn {
 background-image:url(../../assets/images/flags/tn.svg)
}
.flag-to {
 background-image:url(../../assets/images/flags/to.svg)
}
.flag-tr {
 background-image:url(../../assets/images/flags/tr.svg)
}
.flag-tt {
 background-image:url(../../assets/images/flags/tt.svg)
}
.flag-tv {
 background-image:url(../../assets/images/flags/tv.svg)
}
.flag-tw {
 background-image:url(../../assets/images/flags/tw.svg)
}
.flag-tz {
 background-image:url(../../assets/images/flags/tz.svg)
}
.flag-ua {
 background-image:url(../../assets/images/flags/ua.svg)
}
.flag-ug {
 background-image:url(../../assets/images/flags/ug.svg)
}
.flag-um {
 background-image:url(../../assets/images/flags/um.svg)
}
.flag-un {
 background-image:url(../../assets/images/flags/un.svg)
}
.flag-us {
 background-image:url(../../assets/images/flags/us.svg)
}
.flag-uy {
 background-image:url(../../assets/images/flags/uy.svg)
}
.flag-uz {
 background-image:url(../../assets/images/flags/uz.svg)
}
.flag-va {
 background-image:url(../../assets/images/flags/va.svg)
}
.flag-vc {
 background-image:url(../../assets/images/flags/vc.svg)
}
.flag-ve {
 background-image:url(../../assets/images/flags/ve.svg)
}
.flag-vg {
 background-image:url(../../assets/images/flags/vg.svg)
}
.flag-vi {
 background-image:url(../../assets/images/flags/vi.svg)
}
.flag-vn {
 background-image:url(../../assets/images/flags/vn.svg)
}
.flag-vu {
 background-image:url(../../assets/images/flags/vu.svg)
}
.flag-wf {
 background-image:url(../../assets/images/flags/wf.svg)
}
.flag-ws {
 background-image:url(../../assets/images/flags/ws.svg)
}
.flag-ye {
 background-image:url(../../assets/images/flags/ye.svg)
}
.flag-yt {
 background-image:url(../../assets/images/flags/yt.svg)
}
.flag-za {
 background-image:url(../../assets/images/flags/za.svg)
}
.flag-zm {
 background-image:url(../../assets/images/flags/zm.svg)
}
.flag-zw {
 background-image:url(../../assets/images/flags/zw.svg)
}
.payment {
 width:2.5rem;
 height:1.5rem;
 display:inline-block;
 background:no-repeat center/100% 100%;
 vertical-align:bottom;
 font-style:normal;
 box-shadow:0 0 1px 1px rgba(0,0,0,.1);
 border-radius:2px
}
.payment-2checkout-dark {
 background-image:url(../../assets/images/payments/2checkout-dark.svg)
}
.payment-2checkout {
 background-image:url(../../assets/images/payments/2checkout.svg)
}
.payment-alipay-dark {
 background-image:url(../../assets/images/payments/alipay-dark.svg)
}
.payment-alipay {
 background-image:url(../../assets/images/payments/alipay.svg)
}
.payment-amazon-dark {
 background-image:url(../../assets/images/payments/amazon-dark.svg)
}
.payment-amazon {
 background-image:url(../../assets/images/payments/amazon.svg)
}
.payment-americanexpress-dark {
 background-image:url(../../assets/images/payments/americanexpress-dark.svg)
}
.payment-americanexpress {
 background-image:url(../../assets/images/payments/americanexpress.svg)
}
.payment-applepay-dark {
 background-image:url(../../assets/images/payments/applepay-dark.svg)
}
.payment-applepay {
 background-image:url(../../assets/images/payments/applepay.svg)
}
.payment-bancontact-dark {
 background-image:url(../../assets/images/payments/bancontact-dark.svg)
}
.payment-bancontact {
 background-image:url(../../assets/images/payments/bancontact.svg)
}
.payment-bitcoin-dark {
 background-image:url(../../assets/images/payments/bitcoin-dark.svg)
}
.payment-bitcoin {
 background-image:url(../../assets/images/payments/bitcoin.svg)
}
.payment-bitpay-dark {
 background-image:url(../../assets/images/payments/bitpay-dark.svg)
}
.payment-bitpay {
 background-image:url(../../assets/images/payments/bitpay.svg)
}
.payment-cirrus-dark {
 background-image:url(../../assets/images/payments/cirrus-dark.svg)
}
.payment-cirrus {
 background-image:url(../../assets/images/payments/cirrus.svg)
}
.payment-clickandbuy-dark {
 background-image:url(../../assets/images/payments/clickandbuy-dark.svg)
}
.payment-clickandbuy {
 background-image:url(../../assets/images/payments/clickandbuy.svg)
}
.payment-coinkite-dark {
 background-image:url(../../assets/images/payments/coinkite-dark.svg)
}
.payment-coinkite {
 background-image:url(../../assets/images/payments/coinkite.svg)
}
.payment-dinersclub-dark {
 background-image:url(../../assets/images/payments/dinersclub-dark.svg)
}
.payment-dinersclub {
 background-image:url(../../assets/images/payments/dinersclub.svg)
}
.payment-directdebit-dark {
 background-image:url(../../assets/images/payments/directdebit-dark.svg)
}
.payment-directdebit {
 background-image:url(../../assets/images/payments/directdebit.svg)
}
.payment-discover-dark {
 background-image:url(../../assets/images/payments/discover-dark.svg)
}
.payment-discover {
 background-image:url(../../assets/images/payments/discover.svg)
}
.payment-dwolla-dark {
 background-image:url(../../assets/images/payments/dwolla-dark.svg)
}
.payment-dwolla {
 background-image:url(../../assets/images/payments/dwolla.svg)
}
.payment-ebay-dark {
 background-image:url(../../assets/images/payments/ebay-dark.svg)
}
.payment-ebay {
 background-image:url(../../assets/images/payments/ebay.svg)
}
.payment-eway-dark {
 background-image:url(../../assets/images/payments/eway-dark.svg)
}
.payment-eway {
 background-image:url(../../assets/images/payments/eway.svg)
}
.payment-giropay-dark {
 background-image:url(../../assets/images/payments/giropay-dark.svg)
}
.payment-giropay {
 background-image:url(../../assets/images/payments/giropay.svg)
}
.payment-googlewallet-dark {
 background-image:url(../../assets/images/payments/googlewallet-dark.svg)
}
.payment-googlewallet {
 background-image:url(../../assets/images/payments/googlewallet.svg)
}
.payment-ingenico-dark {
 background-image:url(../../assets/images/payments/ingenico-dark.svg)
}
.payment-ingenico {
 background-image:url(../../assets/images/payments/ingenico.svg)
}
.payment-jcb-dark {
 background-image:url(../../assets/images/payments/jcb-dark.svg)
}
.payment-jcb {
 background-image:url(../../assets/images/payments/jcb.svg)
}
.payment-klarna-dark {
 background-image:url(../../assets/images/payments/klarna-dark.svg)
}
.payment-klarna {
 background-image:url(../../assets/images/payments/klarna.svg)
}
.payment-laser-dark {
 background-image:url(../../assets/images/payments/laser-dark.svg)
}
.payment-laser {
 background-image:url(../../assets/images/payments/laser.svg)
}
.payment-maestro-dark {
 background-image:url(../../assets/images/payments/maestro-dark.svg)
}
.payment-maestro {
 background-image:url(../../assets/images/payments/maestro.svg)
}
.payment-mastercard-dark {
 background-image:url(../../assets/images/payments/mastercard-dark.svg)
}
.payment-mastercard {
 background-image:url(../../assets/images/payments/mastercard.svg)
}
.payment-monero-dark {
 background-image:url(../../assets/images/payments/monero-dark.svg)
}
.payment-monero {
 background-image:url(../../assets/images/payments/monero.svg)
}
.payment-neteller-dark {
 background-image:url(../../assets/images/payments/neteller-dark.svg)
}
.payment-neteller {
 background-image:url(../../assets/images/payments/neteller.svg)
}
.payment-ogone-dark {
 background-image:url(../../assets/images/payments/ogone-dark.svg)
}
.payment-ogone {
 background-image:url(../../assets/images/payments/ogone.svg)
}
.payment-okpay-dark {
 background-image:url(../../assets/images/payments/okpay-dark.svg)
}
.payment-okpay {
 background-image:url(../../assets/images/payments/okpay.svg)
}
.payment-paybox-dark {
 background-image:url(../../assets/images/payments/paybox-dark.svg)
}
.payment-paybox {
 background-image:url(../../assets/images/payments/paybox.svg)
}
.payment-paymill-dark {
 background-image:url(../../assets/images/payments/paymill-dark.svg)
}
.payment-paymill {
 background-image:url(../../assets/images/payments/paymill.svg)
}
.payment-payone-dark {
 background-image:url(../../assets/images/payments/payone-dark.svg)
}
.payment-payone {
 background-image:url(../../assets/images/payments/payone.svg)
}
.payment-payoneer-dark {
 background-image:url(../../assets/images/payments/payoneer-dark.svg)
}
.payment-payoneer {
 background-image:url(../../assets/images/payments/payoneer.svg)
}
.payment-paypal-dark {
 background-image:url(../../assets/images/payments/paypal-dark.svg)
}
.payment-paypal {
 background-image:url(../../assets/images/payments/paypal.svg)
}
.payment-paysafecard-dark {
 background-image:url(../../assets/images/payments/paysafecard-dark.svg)
}
.payment-paysafecard {
 background-image:url(../../assets/images/payments/paysafecard.svg)
}
.payment-payu-dark {
 background-image:url(../../assets/images/payments/payu-dark.svg)
}
.payment-payu {
 background-image:url(../../assets/images/payments/payu.svg)
}
.payment-payza-dark {
 background-image:url(../../assets/images/payments/payza-dark.svg)
}
.payment-payza {
 background-image:url(../../assets/images/payments/payza.svg)
}
.payment-ripple-dark {
 background-image:url(../../assets/images/payments/ripple-dark.svg)
}
.payment-ripple {
 background-image:url(../../assets/images/payments/ripple.svg)
}
.payment-sage-dark {
 background-image:url(../../assets/images/payments/sage-dark.svg)
}
.payment-sage {
 background-image:url(../../assets/images/payments/sage.svg)
}
.payment-sepa-dark {
 background-image:url(../../assets/images/payments/sepa-dark.svg)
}
.payment-sepa {
 background-image:url(../../assets/images/payments/sepa.svg)
}
.payment-shopify-dark {
 background-image:url(../../assets/images/payments/shopify-dark.svg)
}
.payment-shopify {
 background-image:url(../../assets/images/payments/shopify.svg)
}
.payment-skrill-dark {
 background-image:url(../../assets/images/payments/skrill-dark.svg)
}
.payment-skrill {
 background-image:url(../../assets/images/payments/skrill.svg)
}
.payment-solo-dark {
 background-image:url(../../assets/images/payments/solo-dark.svg)
}
.payment-solo {
 background-image:url(../../assets/images/payments/solo.svg)
}
.payment-square-dark {
 background-image:url(../../assets/images/payments/square-dark.svg)
}
.payment-square {
 background-image:url(../../assets/images/payments/square.svg)
}
.payment-stripe-dark {
 background-image:url(../../assets/images/payments/stripe-dark.svg)
}
.payment-stripe {
 background-image:url(../../assets/images/payments/stripe.svg)
}
.payment-switch-dark {
 background-image:url(../../assets/images/payments/switch-dark.svg)
}
.payment-switch {
 background-image:url(../../assets/images/payments/switch.svg)
}
.payment-ukash-dark {
 background-image:url(../../assets/images/payments/ukash-dark.svg)
}
.payment-ukash {
 background-image:url(../../assets/images/payments/ukash.svg)
}
.payment-unionpay-dark {
 background-image:url(../../assets/images/payments/unionpay-dark.svg)
}
.payment-unionpay {
 background-image:url(../../assets/images/payments/unionpay.svg)
}
.payment-verifone-dark {
 background-image:url(../../assets/images/payments/verifone-dark.svg)
}
.payment-verifone {
 background-image:url(../../assets/images/payments/verifone.svg)
}
.payment-verisign-dark {
 background-image:url(../../assets/images/payments/verisign-dark.svg)
}
.payment-verisign {
 background-image:url(../../assets/images/payments/verisign.svg)
}
.payment-visa-dark {
 background-image:url(../../assets/images/payments/visa-dark.svg)
}
.payment-visa {
 background-image:url(../../assets/images/payments/visa.svg)
}
.payment-webmoney-dark {
 background-image:url(../../assets/images/payments/webmoney-dark.svg)
}
.payment-webmoney {
 background-image:url(../../assets/images/payments/webmoney.svg)
}
.payment-westernunion-dark {
 background-image:url(../../assets/images/payments/westernunion-dark.svg)
}
.payment-westernunion {
 background-image:url(../../assets/images/payments/westernunion.svg)
}
.payment-worldpay-dark {
 background-image:url(../../assets/images/payments/worldpay-dark.svg)
}
.payment-worldpay {
 background-image:url(../../assets/images/payments/worldpay.svg)
}
.selectize-control.plugin-drag_drop.multi>.selectize-input>div.ui-sortable-placeholder {
 visibility:visible!important;
 background:#f2f2f2!important;
 background:rgba(0,0,0,.06)!important;
 border:0!important;
 box-shadow:inset 0 0 12px 4px #fff
}
.selectize-control.plugin-drag_drop .ui-sortable-placeholder::after {
 content:'!';
 visibility:hidden
}
.selectize-control.plugin-drag_drop .ui-sortable-helper {
 box-shadow:0 2px 5px rgba(0,0,0,.2)
}
.selectize-dropdown-header {
 position:relative;
 padding:5px 8px;
 border-bottom:1px solid #d0d0d0;
 background:#f8f8f8;
 border-radius:3px 3px 0 0
}
.selectize-dropdown-header-close {
 position:absolute;
 right:8px;
 top:50%;
 color:#f4f6f9;
 opacity:.4;
 margin-top:-12px;
 line-height:20px;
 font-size:20px!important
}
.selectize-dropdown-header-close:hover {
 color:#000
}
.selectize-dropdown.plugin-optgroup_columns .optgroup {
 border-right:1px solid #f2f2f2;
 border-top:0;
 float:left;
 box-sizing:border-box
}
.selectize-dropdown.plugin-optgroup_columns .optgroup:last-child {
 border-right:0
}
.selectize-dropdown.plugin-optgroup_columns .optgroup:before {
 display:none
}
.selectize-dropdown.plugin-optgroup_columns .optgroup-header {
 border-top:0
}
.selectize-control.plugin-remove_button [data-value] {
 position:relative;
 padding-right:24px!important
}
.selectize-control.plugin-remove_button [data-value] .remove {
 z-index:1;
 position:absolute;
 top:0;
 right:0;
 bottom:0;
 width:17px;
 text-align:center;
 font-weight:700;
 font-size:12px;
 color:inherit;
 text-decoration:none;
 vertical-align:middle;
 display:inline-block;
 padding:2px 0 0;
 border-left:1px solid #d0d0d0;
 border-radius:0 2px 2px 0;
 box-sizing:border-box
}
.selectize-control.plugin-remove_button [data-value] .remove:hover {
 background:rgba(0,0,0,.05)
}
.selectize-control.plugin-remove_button [data-value].active .remove {
 border-left-color:#cacaca
}
.selectize-control.plugin-remove_button .disabled [data-value] .remove:hover {
 background:0 0
}
.selectize-control.plugin-remove_button .disabled [data-value] .remove {
 border-left-color:#fff
}
.selectize-control.plugin-remove_button .remove-single {
 position:absolute;
 right:28px;
 top:6px;
 font-size:23px
}
.selectize-control {
 position:relative;
 padding:0;
 border:0
}
.selectize-dropdown,
.selectize-input,
.selectize-input input {
 color:#f4f6f9;
 font-family:inherit;
 font-size:15px;
 line-height:18px;
 -webkit-font-smoothing:inherit
}
.selectize-input,
.selectize-control.single .selectize-input.input-active {
 background:#fff;
 cursor:text;
 display:inline-block
}
.selectize-input {
 border:1px solid rgba(0,40,100,.12);
 padding:.5625rem .75rem;
 display:inline-block;
 display:block;
 width:100%;
 overflow:hidden;
 position:relative;
 z-index:1;
 box-sizing:border-box;
 border-radius:3px;
 transition:.3s border-color,.3s box-shadow
}
.selectize-control.multi .selectize-input.has-items {
 padding:7px .75rem 4px 7px
}
.selectize-input.full {
 background-color:#fff
}
.selectize-input.disabled,
.selectize-input.disabled * {
 cursor:default!important
}
.selectize-input.focus {
 border-color:#2185d0
}
.selectize-input.dropdown-active {
 border-radius:3px 3px 0 0
}
.selectize-input>* {
 vertical-align:baseline;
 display:-moz-inline-stack;
 display:inline-block;
 zoom:1;
 *display:inline
}
.selectize-control.multi .selectize-input>div {
 cursor:pointer;
 margin:0 3px 3px 0;
 padding:2px 6px;
 background:#d1d3d4;
 color:#333537;
 font-size:13px;
 border:0 solid rgba(0,40,100,.12);
 border-radius:3px;
 font-weight:400
}
.selectize-control.multi .selectize-input>div.active {
 background:#e8e8e8;
 color:#303030;
 border:0 solid #cacaca
}
.selectize-control.multi .selectize-input.disabled>div,
.selectize-control.multi .selectize-input.disabled>div.active {
 color:#7d7d7d;
 background:#fff;
 border:0 solid #fff
}
.selectize-input>input {
 display:inline-block!important;
 padding:0!important;
 min-height:0!important;
 max-height:none!important;
 max-width:100%!important;
 margin:0 2px 0 0!important;
 text-indent:0!important;
 border:0!important;
 background:0 0!important;
 line-height:inherit!important;
 box-shadow:none!important
}
.selectize-input>input::-ms-clear {
 display:none
}
.selectize-input>input:focus {
 outline:none!important
}
.selectize-input::after {
 content:' ';
 display:block;
 clear:left
}
.selectize-input.dropdown-active::before {
 content:' ';
 display:block;
 position:absolute;
 background:#f0f0f0;
 height:1px;
 bottom:0;
 left:0;
 right:0
}
.selectize-dropdown {
 position:absolute;
 z-index:10;
 border:1px solid rgba(0,40,100,.12);
 background:#fff;
 margin:-1px 0 0;
 border-top:0;
 box-sizing:border-box;
 border-radius:0 0 3px 3px;
 height:auto;
 padding:0
}
.selectize-dropdown [data-selectable] {
 cursor:pointer;
 overflow:hidden
}
.selectize-dropdown [data-selectable] .highlight {
 background:rgba(125,168,208,.2);
 border-radius:1px
}
.selectize-dropdown [data-selectable],
.selectize-dropdown .optgroup-header {
 padding:6px .75rem
}
.selectize-dropdown .optgroup:first-child .optgroup-header {
 border-top:0
}
.selectize-dropdown .optgroup-header {
 color:#f4f6f9;
 background:#fff;
 cursor:default
}
.selectize-dropdown .active {
 background-color:#f1f4f8;
 color:#2185d0
}
.selectize-dropdown .active.create {
 color:#f4f6f9
}
.selectize-dropdown .create {
 color:rgba(48,48,48,.5)
}
.selectize-dropdown-content {
 overflow-y:auto;
 overflow-x:hidden;
 max-height:200px;
 -webkit-overflow-scrolling:touch
}
.selectize-control.single .selectize-input,
.selectize-control.single .selectize-input input {
 cursor:pointer
}
.selectize-control.single .selectize-input.input-active,
.selectize-control.single .selectize-input.input-active input {
 cursor:text
}
.selectize-control.single .selectize-input:after {
 content:'';
 display:block;
 position:absolute;
 top:13px;
 right:12px;
 width:8px;
 height:10px;
 background:#fff url(data:image/svg+xml;charset=utf8;base64,PHN2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIHZpZXdCb3g9JzAgMCAxMCA1Jz48cGF0aCBmaWxsPScjOTk5JyBkPSdNMCAwTDEwIDBMNSA1TDAgMCcvPjwvc3ZnPg==) no-repeat center;
 background-size:8px 10px;
 transition:.3s transform
}
.selectize-control.single .selectize-input.dropdown-active:after {
 transform:rotate(180deg)
}
.selectize-control .selectize-input.disabled {
 opacity:.5;
 background-color:#fafafa
}
.selectize-dropdown .image,
.selectize-input .image {
 width:1.25rem;
 height:1.25rem;
 background-size:contain;
 margin:-1px .5rem -1px -4px;
 line-height:1.25rem;
 float:left;
 display:flex;
 align-items:center;
 justify-content:center
}
.selectize-dropdown .image img,
.selectize-input .image img {
 max-width:100%;
 box-shadow:0 1px 2px 0 rgba(0,0,0,.4);
 border-radius:2px
}
.selectize-input .image {
 width:1.5rem;
 height:1.5rem;
 margin:-3px .75rem -3px -5px
}
.wizard .content {
 -webkit-border-radius:0;
 -moz-border-radius:0;
 border-radius:0;
 min-height:245px;
 overflow-y:auto
}
.wizard .content .body {
 padding:15px
}
.wizard .content .body label.error {
 color:#db2828
}
.wizard .content .body input[type=checkbox] {
 display:none
}
.wizard .actions {
 display:block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:block;
 position:relative;
 width:100%;
 margin-top:10px!important
}
.wizard .actions ul {
 display:inline-block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:inline
}
.wizard .actions ul>li {
 float:left;
 margin:0!important
}
.wizard .actions a {
 display:block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:block;
 color:#fff;
 text-decoration:none
}
.wizard .actions a:hover,
.wizard .actions a:active {
 display:block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:block;
 color:#fff;
 text-decoration:none
}
.wizard .actions .disabled a:hover,
.wizard .actions .disabled a:active {
 background:#e8e9e9;
 color:#666a6d
}
.wizard .steps {
 display:block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:block;
 position:relative;
 width:100%;
 margin-bottom:2px
}
.wizard .steps a {
 display:block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:block;
 -webkit-border-radius:0;
 -moz-border-radius:0;
 border-radius:0;
 width:auto;
 margin:0 2px 0 0;
 padding:10px;
 text-decoration:none
}
.wizard .steps a:hover,
.wizard .steps a:active {
 display:block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:block;
 -webkit-border-radius:0;
 -moz-border-radius:0;
 border-radius:0;
 width:auto;
 margin:0 2px 0 0;
 padding:10px;
 text-decoration:none
}
.wizard .steps .disabled a {
 cursor:default
}
.wizard .steps .disabled a:hover,
.wizard .steps .disabled a:active {
 background:#d1d3d4;
 color:#808488;
 cursor:default
}
.wizard .steps .current a {
 color:#fff;
 cursor:default
}
.wizard .steps .current a:hover,
.wizard .steps .current a:active {
 color:#fff;
 cursor:default
}
.wizard .steps .done a {
 color:#fff;
 opacity:.7
}
.wizard .steps .done a:hover,
.wizard .steps .done a:active {
 color:#fff;
 opacity:.7
}
.wizard .steps>ul>li {
 width:25%;
 float:left
}
.wizard .steps>ul>li:last-child a {
 margin:0
}
.wizard.vertical>.steps {
 float:left;
 width:30%
}
.wizard.vertical>.steps>ul>li {
 float:none;
 width:100%
}
.wizard.vertical>.steps>ul>li a {
 margin:0 0 2px
}
.wizard.vertical>.content {
 float:left;
 width:70%;
 margin:0
}
.wizard.vertical>.actions {
 float:right;
 width:100%;
 margin:0
}
.wizard_validation .wizard .steps>ul>li {
 width:auto!important
}
@media screen and (max-width:767px) {
 .wizard>.steps>ul>li {
  width:100%;
  margin-bottom:2px
 }
 .wizard>.steps a {
  margin:0
 }
 .wizard.wizard.vertical>.content,
 .wizard.wizard.vertical>.steps {
  width:100%;
  padding:0
 }
 .wizard_validation .wizard .steps>ul>li {
  width:100%!important
 }
}
.right_sidebar {
 -moz-box-shadow:-2px 2px 5px rgba(41,43,48,.1);
 -webkit-box-shadow:-2px 2px 5px rgba(41,43,48,.1);
 box-shadow:-2px 2px 5px rgba(41,43,48,.1);
 -webkit-transition:all .4s ease-in-out;
 -moz-transition:all .4s ease-in-out;
 -ms-transition:all .4s ease-in-out;
 -o-transition:all .4s ease-in-out;
 transition:all .4s ease-in-out;
 background:#fff;
 width:280px;
 height:100vh;
 position:fixed;
 right:-300px;
 top:0;
 z-index:9999!important;
 overflow-y:scroll;
 scrollbar-width:none;
 -ms-overflow-style:none
}
.right_sidebar::-webkit-scrollbar {
 width:0
}
@media screen and (max-width:767px) {
 .right_sidebar {
  padding-bottom:40px
 }
}
.right_sidebar.open {
 right:0
}
.right_sidebar .settingbar {
 position:absolute;
 right:0
}
.right_sidebar .nav-tabs {
 margin:0
}
.right_sidebar .nav-tabs+.tab-content {
 padding:20px
}
.choose-skin li,
.sidebar-skin li {
 -webkit-transition:all .3s ease-in-out;
 -moz-transition:all .3s ease-in-out;
 -ms-transition:all .3s ease-in-out;
 -o-transition:all .3s ease-in-out;
 transition:all .3s ease-in-out;
 display:inline-block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:inline;
 position:relative;
 cursor:pointer;
 font-size:0
}
.choose-skin li.active:after,
.choose-skin li:hover:after,
.sidebar-skin li.active:after,
.sidebar-skin li:hover:after {
 color:#fff;
 font-family:fontawesome;
 position:absolute;
 top:3px;
 left:5px;
 content:'\f00c'
}
.choose-skin li div,
.sidebar-skin li div {
 -webkit-border-radius:2px;
 -moz-border-radius:2px;
 border-radius:2px;
 display:inline-block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:inline;
 border:1px solid #e8e9e9;
 width:20px;
 height:20px
}
.choose-skin li div.black,
.sidebar-skin li div.black {
 background:#292b30
}
.choose-skin li div.azure,
.sidebar-skin li div.azure {
 background:#45aaf2
}
.choose-skin li div.indigo,
.sidebar-skin li div.indigo {
 background:#6435c9
}
.choose-skin li div.purple,
.sidebar-skin li div.purple {
 background:#a333c8
}
.choose-skin li div.orange,
.sidebar-skin li div.orange {
 background:#f2711c
}
.choose-skin li div.green,
.sidebar-skin li div.green {
 background:#21ba45
}
.choose-skin li div.cyan,
.sidebar-skin li div.cyan {
 background:#17a2b8
}
.choose-skin li div.blush,
.sidebar-skin li div.blush {
 background:#de5d83
}
.contact-list li .contact-img img {
 width:30px
}
.contact-list li .contact-name span {
 font-weight:400
}
.contact-list li .action {
 margin-left:auto
}
.theme_div {
 -moz-box-shadow:-2px 2px 5px rgba(41,43,48,.1);
 -webkit-box-shadow:-2px 2px 5px rgba(41,43,48,.1);
 box-shadow:-2px 2px 5px rgba(41,43,48,.1);
 -webkit-transition:all .3s ease-in-out;
 -moz-transition:all .3s ease-in-out;
 -ms-transition:all .3s ease-in-out;
 -o-transition:all .3s ease-in-out;
 transition:all .3s ease-in-out;
 background:#fff;
 width:278px;
 height:100vh;
 position:fixed;
 right:-280px;
 top:0;
 z-index:9999!important;
 overflow-x:auto;
 scrollbar-width:none;
 -ms-overflow-style:none
}
.theme_div::-webkit-scrollbar {
 width:0
}
.theme_div.open {
 right:0
}
.theme_div .card {
 border:0
}
.theme_div .card .list-group a {
 display:block
}
.theme_div .card .list-group a img {
 border:1px solid #e8e9e9
}
.sparkline {
 display:inline-block;
 height:2rem
}
.jqstooltip {
 box-sizing:content-box;
 font-family:inherit!important;
 background:#333!important;
 border:none!important;
 border-radius:3px;
 font-size:11px!important;
 font-weight:700!important;
 line-height:1!important;
 padding:6px!important
}
.jqstooltip .jqsfield {
 font:inherit!important
}
#jqstooltip {
 background-color:#fff;
 border-color:#808488;
 color:#434a54
}
#jqstooltip .jqsfield {
 color:#434a54
}
.c3-area {
 opacity:1!important
}
.ct-chart {
 position:relative
}
.ct-chart .ct-grid {
 stroke:rgba(41,43,48,.1);
 stroke-dasharray:1px
}
.ct-series .ct-line {
 stroke-width:1px
}
.ct-series .ct-bar {
 stroke-width:15px
}
.ct-series .ct-point {
 stroke-width:5px;
 stroke-linecap:circle
}
.c3_chart {
 filter:drop-shadow(-4px 4px 2px rgba(41,42,51,0.2))
}
.ct-series-a .ct-line,
.ct-series-a .ct-bar,
.ct-series-a .ct-point {
 stroke:#f79647
}
.ct-series-a .ct-area,
.ct-series-a .ct-slice-donut-solid,
.ct-series-a .ct-slice-pie,
.ct-series-a .ct-bar {
 fill:#f79647
}
.ct-series-b .ct-line,
.ct-series-b .ct-bar,
.ct-series-b .ct-point {
 stroke:#4aacc7
}
.ct-series-b .ct-area,
.ct-series-b .ct-slice-donut-solid,
.ct-series-b .ct-slice-pie,
.ct-series-b .ct-bar {
 fill:#4aacc7
}
.ct-series-c .ct-line,
.ct-series-c .ct-bar,
.ct-series-c .ct-point {
 stroke:#9bbb58
}
.ct-series-c .ct-area,
.ct-series-c .ct-slice-donut-solid,
.ct-series-c .ct-slice-pie,
.ct-series-c .ct-bar {
 fill:#9bbb58
}
.ct-series-d .ct-line,
.ct-series-d .ct-bar,
.ct-series-d .ct-point {
 stroke:#c0504e
}
.ct-series-d .ct-area,
.ct-series-d .ct-slice-donut-solid,
.ct-series-d .ct-slice-pie,
.ct-series-d .ct-bar {
 fill:#c0504e
}
.ct-series-e .ct-line,
.ct-series-e .ct-bar,
.ct-series-e .ct-point {
 stroke:#4f81be
}
.ct-series-e .ct-area,
.ct-series-e .ct-slice-donut-solid,
.ct-series-e .ct-slice-pie,
.ct-series-e .ct-bar {
 fill:#4f81be
}
.ct-series-f .ct-line,
.ct-series-f .ct-bar,
.ct-series-f .ct-point {
 stroke:#8064a1
}
.ct-series-f .ct-area,
.ct-series-f .ct-slice-donut-solid,
.ct-series-f .ct-slice-pie,
.ct-series-f .ct-bar {
 fill:#8064a1
}
.ct-series-g .ct-line,
.ct-series-g .ct-bar,
.ct-series-g .ct-point {
 stroke:#77933e
}
.ct-series-g .ct-area,
.ct-series-g .ct-slice-donut-solid,
.ct-series-g .ct-slice-pie,
.ct-series-g .ct-bar {
 fill:#77933e
}
.ct-series-h .ct-line,
.ct-series-h .ct-bar,
.ct-series-h .ct-point {
 stroke:#ffc200
}
.ct-series-h .ct-area,
.ct-series-h .ct-slice-donut-solid,
.ct-series-h .ct-slice-pie,
.ct-series-h .ct-bar {
 fill:#ffc200
}
.ct-series-i .ct-line,
.ct-series-i .ct-bar,
.ct-series-i .ct-point {
 stroke:#0544d3
}
.ct-series-i .ct-area,
.ct-series-i .ct-slice-donut-solid,
.ct-series-i .ct-slice-pie,
.ct-series-i .ct-bar {
 fill:#0544d3
}
.ct-series-j .ct-line,
.ct-series-j .ct-bar,
.ct-series-j .ct-point {
 stroke:#6b0392
}
.ct-series-j .ct-area,
.ct-series-j .ct-slice-donut-solid,
.ct-series-j .ct-slice-pie,
.ct-series-j .ct-bar {
 fill:#6b0392
}
.ct-series-k .ct-line,
.ct-series-k .ct-bar,
.ct-series-k .ct-point {
 stroke:#f05b4f
}
.ct-series-k .ct-area,
.ct-series-k .ct-slice-donut-solid,
.ct-series-k .ct-slice-pie,
.ct-series-k .ct-bar {
 fill:#f05b4f
}
.ct-series-l .ct-line,
.ct-series-l .ct-bar,
.ct-series-l .ct-point {
 stroke:#dda458
}
.ct-series-l .ct-area,
.ct-series-l .ct-slice-donut-solid,
.ct-series-l .ct-slice-pie,
.ct-series-l .ct-bar {
 fill:#dda458
}
.ct-series-m .ct-line,
.ct-series-m .ct-bar,
.ct-series-m .ct-point {
 stroke:#eacf7d
}
.ct-series-m .ct-area,
.ct-series-m .ct-slice-donut-solid,
.ct-series-m .ct-slice-pie,
.ct-series-m .ct-bar {
 fill:#eacf7d
}
.ct-series-n .ct-line,
.ct-series-n .ct-bar,
.ct-series-n .ct-point {
 stroke:#86797d
}
.ct-series-n .ct-area,
.ct-series-n .ct-slice-donut-solid,
.ct-series-n .ct-slice-pie,
.ct-series-n .ct-bar {
 fill:#86797d
}
.ct-series-o .ct-line,
.ct-series-o .ct-bar,
.ct-series-o .ct-point {
 stroke:#b2c326
}
.ct-series-o .ct-area,
.ct-series-o .ct-slice-donut-solid,
.ct-series-o .ct-slice-pie,
.ct-series-o .ct-bar {
 fill:#b2c326
}
.chartist-tooltip {
 -webkit-border-radius:3px;
 -moz-border-radius:3px;
 border-radius:3px;
 background:#333537;
 color:#fff;
 min-width:3.5em
}
.chartist-tooltip:before {
 border-top-color:#333537;
 margin-left:-8px;
 border-width:8px
}
.ct-axis-title {
 fill:#666a6d
}
.ct-label {
 font-size:15px;
 color:#434a54
}
.ct-legend {
 position:relative;
 z-index:1
}
.ct-legend li {
 display:inline-block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:inline;
 position:relative;
 padding-left:18px;
 margin-bottom:3px;
 list-style-type:none
}
.ct-legend li:before {
 -webkit-border-radius:2px;
 -moz-border-radius:2px;
 border-radius:2px;
 width:12px;
 height:12px;
 position:absolute;
 top:5px;
 left:0;
 content:'';
 border:3px solid transparent
}
.ct-legend li.inactive:before {
 background:0 0
}
.ct-legend.ct-legend-inside {
 position:absolute;
 top:0;
 right:0
}
.ct-legend .ct-series-0:before {
 background-color:#f79647;
 border-color:#f79647
}
.ct-legend .ct-series-1:before {
 background-color:#4aacc7;
 border-color:#4aacc7
}
.ct-legend .ct-series-2:before {
 background-color:#9bbb58;
 border-color:#9bbb58
}
.ct-legend .ct-series-3:before {
 background-color:#c0504e;
 border-color:#c0504e
}
.ct-legend .ct-series-4:before {
 background-color:#4f81be;
 border-color:#4f81be
}
.ct-legend .ct-series-5:before {
 background-color:#8064a1;
 border-color:#8064a1
}
.ct-legend .ct-series-6:before {
 background-color:#77933e;
 border-color:#77933e
}
.ct-legend .ct-series-7:before {
 background-color:#ffc200;
 border-color:#ffc200
}
.ct-legend .ct-series-8:before {
 background-color:#0544d3;
 border-color:#0544d3
}
.ct-legend .ct-series-9:before {
 background-color:#6b0392;
 border-color:#6b0392
}
.ct-legend .ct-series-10:before {
 background-color:#f05b4f;
 border-color:#f05b4f
}
.ct-legend .ct-series-11:before {
 background-color:#dda458;
 border-color:#dda458
}
.ct-legend .ct-series-12:before {
 background-color:#eacf7d;
 border-color:#eacf7d
}
.ct-legend .ct-series-13:before {
 background-color:#86797d;
 border-color:#86797d
}
.ct-legend .ct-series-14:before {
 background-color:#b2c326;
 border-color:#b2c326
}
.chart-circle {
 display:block;
 height:8rem;
 width:8rem;
 position:relative
}
.chart-circle canvas {
 margin:0 auto;
 display:block;
 max-width:100%;
 max-height:100%
}
.chart-circle-xs {
 height:2.5rem;
 width:2.5rem;
 font-size:.8rem
}
.chart-circle-sm {
 height:4rem;
 width:4rem;
 font-size:.8rem
}
.chart-circle-lg {
 height:10rem;
 width:10rem;
 font-size:.8rem
}
.chart-circle-value {
 position:absolute;
 top:0;
 left:0;
 right:0;
 margin-left:auto;
 margin-right:auto;
 bottom:0;
 display:flex;
 justify-content:center;
 align-items:center;
 flex-direction:column;
 line-height:1
}
.chart-circle-value small {
 display:block;
 color:#9aa0ac;
 font-size:.9375rem
}
.flot-chart {
 width:100%;
 height:320px
}
svg {
 touch-action:none
}
.jvectormap-container {
 width:100%;
 height:100%;
 position:relative;
 overflow:hidden;
 touch-action:none
}
.jvectormap-tip {
 position:absolute;
 display:none;
 border-radius:3px;
 background:#1c1d1e;
 color:#fff;
 padding:6px;
 font-size:11px;
 line-height:1;
 font-weight:700
}
.jvectormap-tip small {
 font-size:inherit;
 font-weight:400
}
.jvectormap-zoomin,
.jvectormap-zoomout,
.jvectormap-goback {
 position:absolute;
 left:10px;
 border-radius:3px;
 background:#292929;
 padding:3px;
 color:#fff;
 cursor:pointer;
 line-height:10px;
 text-align:center;
 box-sizing:content-box
}
.jvectormap-zoomin,
.jvectormap-zoomout {
 width:10px;
 height:10px
}
.jvectormap-zoomin {
 top:10px
}
.jvectormap-zoomout {
 top:30px
}
.jvectormap-goback {
 bottom:10px;
 z-index:1000;
 padding:6px
}
.jvectormap-spinner {
 position:absolute;
 left:0;
 top:0;
 right:0;
 bottom:0;
 background:center no-repeat url(data:image/gif;base64,R0lGODlhIAAgAPMAAP///wAAAMbGxoSEhLa2tpqamjY2NlZWVtjY2OTk5Ly8vB4eHgQEBAAAAAAAAAAAACH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAIAAgAAAE5xDISWlhperN52JLhSSdRgwVo1ICQZRUsiwHpTJT4iowNS8vyW2icCF6k8HMMBkCEDskxTBDAZwuAkkqIfxIQyhBQBFvAQSDITM5VDW6XNE4KagNh6Bgwe60smQUB3d4Rz1ZBApnFASDd0hihh12BkE9kjAJVlycXIg7CQIFA6SlnJ87paqbSKiKoqusnbMdmDC2tXQlkUhziYtyWTxIfy6BE8WJt5YJvpJivxNaGmLHT0VnOgSYf0dZXS7APdpB309RnHOG5gDqXGLDaC457D1zZ/V/nmOM82XiHRLYKhKP1oZmADdEAAAh+QQJCgAAACwAAAAAIAAgAAAE6hDISWlZpOrNp1lGNRSdRpDUolIGw5RUYhhHukqFu8DsrEyqnWThGvAmhVlteBvojpTDDBUEIFwMFBRAmBkSgOrBFZogCASwBDEY/CZSg7GSE0gSCjQBMVG023xWBhklAnoEdhQEfyNqMIcKjhRsjEdnezB+A4k8gTwJhFuiW4dokXiloUepBAp5qaKpp6+Ho7aWW54wl7obvEe0kRuoplCGepwSx2jJvqHEmGt6whJpGpfJCHmOoNHKaHx61WiSR92E4lbFoq+B6QDtuetcaBPnW6+O7wDHpIiK9SaVK5GgV543tzjgGcghAgAh+QQJCgAAACwAAAAAIAAgAAAE7hDISSkxpOrN5zFHNWRdhSiVoVLHspRUMoyUakyEe8PTPCATW9A14E0UvuAKMNAZKYUZCiBMuBakSQKG8G2FzUWox2AUtAQFcBKlVQoLgQReZhQlCIJesQXI5B0CBnUMOxMCenoCfTCEWBsJColTMANldx15BGs8B5wlCZ9Po6OJkwmRpnqkqnuSrayqfKmqpLajoiW5HJq7FL1Gr2mMMcKUMIiJgIemy7xZtJsTmsM4xHiKv5KMCXqfyUCJEonXPN2rAOIAmsfB3uPoAK++G+w48edZPK+M6hLJpQg484enXIdQFSS1u6UhksENEQAAIfkECQoAAAAsAAAAACAAIAAABOcQyEmpGKLqzWcZRVUQnZYg1aBSh2GUVEIQ2aQOE+G+cD4ntpWkZQj1JIiZIogDFFyHI0UxQwFugMSOFIPJftfVAEoZLBbcLEFhlQiqGp1Vd140AUklUN3eCA51C1EWMzMCezCBBmkxVIVHBWd3HHl9JQOIJSdSnJ0TDKChCwUJjoWMPaGqDKannasMo6WnM562R5YluZRwur0wpgqZE7NKUm+FNRPIhjBJxKZteWuIBMN4zRMIVIhffcgojwCF117i4nlLnY5ztRLsnOk+aV+oJY7V7m76PdkS4trKcdg0Zc0tTcKkRAAAIfkECQoAAAAsAAAAACAAIAAABO4QyEkpKqjqzScpRaVkXZWQEximw1BSCUEIlDohrft6cpKCk5xid5MNJTaAIkekKGQkWyKHkvhKsR7ARmitkAYDYRIbUQRQjWBwJRzChi9CRlBcY1UN4g0/VNB0AlcvcAYHRyZPdEQFYV8ccwR5HWxEJ02YmRMLnJ1xCYp0Y5idpQuhopmmC2KgojKasUQDk5BNAwwMOh2RtRq5uQuPZKGIJQIGwAwGf6I0JXMpC8C7kXWDBINFMxS4DKMAWVWAGYsAdNqW5uaRxkSKJOZKaU3tPOBZ4DuK2LATgJhkPJMgTwKCdFjyPHEnKxFCDhEAACH5BAkKAAAALAAAAAAgACAAAATzEMhJaVKp6s2nIkolIJ2WkBShpkVRWqqQrhLSEu9MZJKK9y1ZrqYK9WiClmvoUaF8gIQSNeF1Er4MNFn4SRSDARWroAIETg1iVwuHjYB1kYc1mwruwXKC9gmsJXliGxc+XiUCby9ydh1sOSdMkpMTBpaXBzsfhoc5l58Gm5yToAaZhaOUqjkDgCWNHAULCwOLaTmzswadEqggQwgHuQsHIoZCHQMMQgQGubVEcxOPFAcMDAYUA85eWARmfSRQCdcMe0zeP1AAygwLlJtPNAAL19DARdPzBOWSm1brJBi45soRAWQAAkrQIykShQ9wVhHCwCQCACH5BAkKAAAALAAAAAAgACAAAATrEMhJaVKp6s2nIkqFZF2VIBWhUsJaTokqUCoBq+E71SRQeyqUToLA7VxF0JDyIQh/MVVPMt1ECZlfcjZJ9mIKoaTl1MRIl5o4CUKXOwmyrCInCKqcWtvadL2SYhyASyNDJ0uIiRMDjI0Fd30/iI2UA5GSS5UDj2l6NoqgOgN4gksEBgYFf0FDqKgHnyZ9OX8HrgYHdHpcHQULXAS2qKpENRg7eAMLC7kTBaixUYFkKAzWAAnLC7FLVxLWDBLKCwaKTULgEwbLA4hJtOkSBNqITT3xEgfLpBtzE/jiuL04RGEBgwWhShRgQExHBAAh+QQJCgAAACwAAAAAIAAgAAAE7xDISWlSqerNpyJKhWRdlSAVoVLCWk6JKlAqAavhO9UkUHsqlE6CwO1cRdCQ8iEIfzFVTzLdRAmZX3I2SfZiCqGk5dTESJeaOAlClzsJsqwiJwiqnFrb2nS9kmIcgEsjQydLiIlHehhpejaIjzh9eomSjZR+ipslWIRLAgMDOR2DOqKogTB9pCUJBagDBXR6XB0EBkIIsaRsGGMMAxoDBgYHTKJiUYEGDAzHC9EACcUGkIgFzgwZ0QsSBcXHiQvOwgDdEwfFs0sDzt4S6BK4xYjkDOzn0unFeBzOBijIm1Dgmg5YFQwsCMjp1oJ8LyIAACH5BAkKAAAALAAAAAAgACAAAATwEMhJaVKp6s2nIkqFZF2VIBWhUsJaTokqUCoBq+E71SRQeyqUToLA7VxF0JDyIQh/MVVPMt1ECZlfcjZJ9mIKoaTl1MRIl5o4CUKXOwmyrCInCKqcWtvadL2SYhyASyNDJ0uIiUd6GGl6NoiPOH16iZKNlH6KmyWFOggHhEEvAwwMA0N9GBsEC6amhnVcEwavDAazGwIDaH1ipaYLBUTCGgQDA8NdHz0FpqgTBwsLqAbWAAnIA4FWKdMLGdYGEgraigbT0OITBcg5QwPT4xLrROZL6AuQAPUS7bxLpoWidY0JtxLHKhwwMJBTHgPKdEQAACH5BAkKAAAALAAAAAAgACAAAATrEMhJaVKp6s2nIkqFZF2VIBWhUsJaTokqUCoBq+E71SRQeyqUToLA7VxF0JDyIQh/MVVPMt1ECZlfcjZJ9mIKoaTl1MRIl5o4CUKXOwmyrCInCKqcWtvadL2SYhyASyNDJ0uIiUd6GAULDJCRiXo1CpGXDJOUjY+Yip9DhToJA4RBLwMLCwVDfRgbBAaqqoZ1XBMHswsHtxtFaH1iqaoGNgAIxRpbFAgfPQSqpbgGBqUD1wBXeCYp1AYZ19JJOYgH1KwA4UBvQwXUBxPqVD9L3sbp2BNk2xvvFPJd+MFCN6HAAIKgNggY0KtEBAAh+QQJCgAAACwAAAAAIAAgAAAE6BDISWlSqerNpyJKhWRdlSAVoVLCWk6JKlAqAavhO9UkUHsqlE6CwO1cRdCQ8iEIfzFVTzLdRAmZX3I2SfYIDMaAFdTESJeaEDAIMxYFqrOUaNW4E4ObYcCXaiBVEgULe0NJaxxtYksjh2NLkZISgDgJhHthkpU4mW6blRiYmZOlh4JWkDqILwUGBnE6TYEbCgevr0N1gH4At7gHiRpFaLNrrq8HNgAJA70AWxQIH1+vsYMDAzZQPC9VCNkDWUhGkuE5PxJNwiUK4UfLzOlD4WvzAHaoG9nxPi5d+jYUqfAhhykOFwJWiAAAIfkECQoAAAAsAAAAACAAIAAABPAQyElpUqnqzaciSoVkXVUMFaFSwlpOCcMYlErAavhOMnNLNo8KsZsMZItJEIDIFSkLGQoQTNhIsFehRww2CQLKF0tYGKYSg+ygsZIuNqJksKgbfgIGepNo2cIUB3V1B3IvNiBYNQaDSTtfhhx0CwVPI0UJe0+bm4g5VgcGoqOcnjmjqDSdnhgEoamcsZuXO1aWQy8KAwOAuTYYGwi7w5h+Kr0SJ8MFihpNbx+4Erq7BYBuzsdiH1jCAzoSfl0rVirNbRXlBBlLX+BP0XJLAPGzTkAuAOqb0WT5AH7OcdCm5B8TgRwSRKIHQtaLCwg1RAAAOwAAAAAAAAAAAA==)
}
.jvectormap-legend-title {
 font-weight:700;
 font-size:14px;
 text-align:center
}
.jvectormap-legend-cnt {
 position:absolute
}
.jvectormap-legend-cnt-h {
 bottom:0;
 right:0
}
.jvectormap-legend-cnt-v {
 top:0;
 right:0
}
.jvectormap-legend {
 background:#000;
 color:#fff;
 border-radius:3px
}
.jvectormap-legend-cnt-h .jvectormap-legend {
 float:left;
 margin:0 10px 10px 0;
 padding:3px 3px 1px
}
.jvectormap-legend-cnt-h .jvectormap-legend .jvectormap-legend-tick {
 float:left
}
.jvectormap-legend-cnt-v .jvectormap-legend {
 margin:10px 10px 0 0;
 padding:3px
}
.jvectormap-legend-cnt-h .jvectormap-legend-tick {
 width:40px
}
.jvectormap-legend-cnt-h .jvectormap-legend-tick-sample {
 height:15px
}
.jvectormap-legend-cnt-v .jvectormap-legend-tick-sample {
 height:20px;
 width:20px;
 display:inline-block;
 vertical-align:middle
}
.jvectormap-legend-tick-text {
 font-size:12px
}
.jvectormap-legend-cnt-h .jvectormap-legend-tick-text {
 text-align:center
}
.jvectormap-legend-cnt-v .jvectormap-legend-tick-text {
 display:inline-block;
 vertical-align:middle;
 line-height:20px;
 padding-left:3px
}
.social-links li a {
 background:#f8f8f8;
 border-radius:50%;
 color:#9aa0ac;
 display:inline-block;
 height:1.75rem;
 width:1.75rem;
 line-height:1.75rem;
 text-align:center
}
.chat_app {
 height:100vh
}
@media screen and (max-width:767px) {
 .chat_app {
  height:auto
 }
}
.chat_app .chat_windows ul {
 padding:20px 0;
 height:calc(100vh - 210px);
 overflow-y:scroll;
 scrollbar-width:none;
 -ms-overflow-style:none
}
.chat_app .chat_windows ul::-webkit-scrollbar {
 width:0
}
@media screen and (max-width:767px) {
 .chat_app .chat_windows ul {
  height:calc(100vh - 260px)
 }
}
.chat_app .chat_windows ul li {
 list-style:none
}
.chat_app .chat_windows .message {
 display:inline-block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:inline;
 position:relative
}
.chat_app .chat_windows .message p {
 -webkit-border-radius:60px 60px 60px 0;
 -moz-border-radius:60px 60px 60px 0;
 border-radius:60px 60px 60px 0;
 width:max-content;
 padding:8px 15px
}
@media screen and (max-width:992px) {
 .chat_app .chat_windows .message p {
  width:fit-content
 }
}
.chat_app .chat_windows .message .time {
 display:block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:block
}
.chat_app .chat_windows .my-message {
 justify-content:flex-end
}
.chat_app .chat_windows .my-message p {
 -webkit-border-radius:60px 60px 0 60px;
 -moz-border-radius:60px 60px 0 60px;
 border-radius:60px 60px 0 60px
}
@media screen and (max-width:767px) {
 .chat_app .chat_windows .my-message .message {
  width:calc(100% - 0)
 }
}
@media screen and (max-width:767px) {
 .chat_app .chat_windows .other-message .message {
  width:calc(100% - 70px)
 }
}
.chat_app .chat_windows .chat-message {
 -webkit-border-radius:3px;
 -moz-border-radius:3px;
 border-radius:3px;
 padding:20px 10px;
 border:1px solid #e8e9e9
}
.chat_app .chat_windows .chat-message>a {
 padding:10px 15px
}
.chat_app .chat_windows .chat-message .form-control,
.chat_app .chat_windows .chat-message .dataTables_wrapper .dataTables_filter,
.dataTables_wrapper .chat_app .chat_windows .chat-message .dataTables_filter {
 border:0;
 margin-top:15px;
 background:0 0
}
.chat_app .chat_windows .chat-message .form-control:focus,
.chat_app .chat_windows .chat-message .dataTables_wrapper .dataTables_filter:focus,
.dataTables_wrapper .chat_app .chat_windows .chat-message .dataTables_filter:focus {
 box-shadow:none
}
.chat_app .chat_windows .file_folder {
 margin:0
}
.chat_app .chat_windows .file_folder .file-name {
 text-align:left;
 float:left
}
.chat_app .chat_windows .file_folder .file-name p {
 margin:0;
 width:100%!important;
 padding:0
}
.chat_app .chat_list {
 -webkit-transition:all .5s ease-in-out;
 -moz-transition:all .5s ease-in-out;
 -ms-transition:all .5s ease-in-out;
 -o-transition:all .5s ease-in-out;
 transition:all .5s ease-in-out;
 border-left:1px solid #e6e9ed;
 width:300px;
 height:100vh;
 position:fixed;
 right:0;
 top:0;
 padding:10px;
 z-index:7
}
.chat_app .chat_list.open {
 right:0
}
@media screen and (max-width:1023px) {
 .chat_app .chat_list {
  right:-320px
 }
}
@media screen and (max-width:767px) {
 .chat_app .chat_list {
  display:none
 }
}
.chat_app .chat_list .right_chat {
 height:calc(100vh - 160px);
 overflow-y:auto;
 overflow-y:scroll;
 scrollbar-width:none;
 -ms-overflow-style:none
}
.chat_app .chat_list .right_chat::-webkit-scrollbar {
 width:0
}
.chat_app .chat_list_btn {
 display:none
}
@media screen and (max-width:992px) {
 .chat_app .chat_list_btn {
  display:block
 }
}
.right_chat li {
 -webkit-border-radius:3px;
 -moz-border-radius:3px;
 border-radius:3px;
 padding:10px;
 margin-bottom:5px;
 position:relative;
 background:#f8f9fa
}
.right_chat li:hover {
 background:#e8e9e9
}
.right_chat li.offline .status {
 background:#fbbd08
}
.right_chat li.online .status {
 background:#21ba45
}
.right_chat li.me .status {
 background:#17a2b8
}
.right_chat .media .media-object {
 -webkit-transition:all .3s ease-in-out;
 -moz-transition:all .3s ease-in-out;
 -ms-transition:all .3s ease-in-out;
 -o-transition:all .3s ease-in-out;
 transition:all .3s ease-in-out;
 -webkit-border-radius:40px;
 -moz-border-radius:40px;
 border-radius:40px;
 width:40px;
 height:40px;
 border:2px solid transparent
}
.right_chat .media .name {
 display:block;
 color:#292b30;
 line-height:normal
}
.right_chat .media .message {
 color:#808488
}
.right_chat .media .status {
 -webkit-border-radius:40px;
 -moz-border-radius:40px;
 border-radius:40px;
 display:inline-block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:inline;
 position:absolute;
 left:40px;
 top:38px;
 width:11px;
 height:11px;
 min-width:inherit;
 border:3px solid #fff
}
.timeline {
 position:relative;
 margin:0 0 2rem;
 padding:0;
 list-style:none
}
.timeline:before {
 display:block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:block;
 background-color:#d1d3d4;
 position:absolute;
 content:'';
 width:1px;
 height:100%;
 top:0;
 bottom:0;
 left:4px
}
.timeline-item {
 position:relative;
 display:flex;
 padding-left:2rem;
 margin:.5rem 0
}
.timeline-item:first-child:before,
.timeline-item:last-child:before {
 background:#fff;
 content:'';
 position:absolute;
 width:1px;
 left:.25rem
}
.timeline-item:first-child {
 margin-top:0
}
.timeline-item:first-child:before {
 top:0;
 height:.5rem
}
.timeline-item:last-child {
 margin-bottom:0
}
.timeline-item:last-child:before {
 top:.5rem;
 bottom:0
}
.timeline-badge {
 display:block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:block;
 border:1px solid #fff;
 background:#666a6d;
 position:absolute;
 width:.4375rem;
 height:.4375rem;
 left:1px;
 top:.5rem;
 border-radius:100%
}
.timeline-time {
 color:#9aa0ac;
 font-size:87.5%;
 white-space:nowrap;
 margin-left:auto
}
.timeline_item {
 border-left:1px solid #d1d3d4;
 padding:20px 30px;
 position:relative
}
.timeline_item .tl_avatar {
 -webkit-border-radius:30px;
 -moz-border-radius:30px;
 border-radius:30px;
 position:absolute;
 left:-15px;
 width:30px;
 border:2px solid #fff;
 top:20px;
 padding:2px
}
.timeline_item .msg {
 margin:15px 0
}
.example {
 padding:1.5rem;
 border:1px solid rgba(0,40,100,.12);
 border-radius:3px 3px 0 0;
 font-size:.9375rem
}
.example-bg {
 background:#f5f7fb
}
.example+.highlight {
 border-top:none;
 margin-top:0;
 border-radius:0 0 3px 3px
}
.highlight {
 margin:1rem 0 2rem;
 border:1px solid rgba(0,40,100,.12);
 border-radius:3px;
 font-size:.9375rem;
 max-height:40rem;
 overflow:auto;
 background:#fcfcfc
}
.highlight pre {
 margin-bottom:0;
 background-color:transparent
}
.example-column {
 margin:0 auto
}
.example-column>.card:last-of-type {
 margin-bottom:0
}
.example-column-1 {
 max-width:20rem
}
.example-column-2 {
 max-width:40rem
}
.inbox .card-header {
 padding:10px 20px
}
.inbox .card-header .custom-checkbox .custom-control-label:before,
.inbox .card-header .custom-checkbox .custom-control-label:after {
 top:2px
}
.inbox .card-header .card-options>a {
 font-size:15px;
 padding:0 5px;
 margin-left:10px
}
.inbox .card-header h5 {
 white-space:nowrap
}
.inbox .first {
 width:70px
}
.inbox .custom-control {
 display:inline-block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:inline
}
.inbox .custom-control .custom-control-label::before,
.inbox .custom-control .custom-control-label::after {
 top:2px
}
.inbox .from a {
 color:#333537
}
.inbox .msg {
 width:800px
}
@media screen and (max-width:1440px) {
 .inbox .msg {
  width:600px
 }
}
@media screen and (max-width:1024px) {
 .inbox .msg {
  width:510px
 }
}
@media screen and (max-width:992px) {
 .inbox .msg {
  width:350px
 }
}
@media screen and (max-width:767px) {
 .inbox .msg {
  width:220px
 }
}
.inbox .detail {
 background:#e6e9ed
}
.inbox .detail .detail-header {
 padding:15px;
 background:#fff
}
.inbox .detail .detail-header .float-left img {
 border-radius:.1875rem;
 max-width:63px
}
@media screen and (max-width:640px) {
 .inbox .detail .detail-header small,
 .inbox .detail .detail-header span {
  display:none
 }
}
.inbox .detail .media-body p a {
 color:#434a54
}
.inbox .detail .mail-cnt {
 padding:20px 15px
}
@media screen and (max-width:640px) {
 .inbox .detail .mail-cnt {
  padding:20px 0
 }
}
.inbox.unread .btn-link {
 font-weight:700
}
.inbox.unread .from a {
 color:#333537;
 font-weight:700
}
.mail-star {
 color:#666a6d
}
.mail-star.active {
 color:#fbbd08
}
.mail-star.love {
 color:#de5d83
}
.file_folder a {
 display:inline-block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:inline;
 border-radius:.1875rem;
 border:1px solid #d1d3d4;
 position:relative;
 overflow:hidden;
 width:220px
}
@media screen and (max-width:668px) {
 .file_folder a {
  width:100%;
  display:block
 }
}
.file_folder .icon {
 float:left;
 width:60px
}
.file_folder .icon i {
 vertical-align:middle;
 line-height:65px
}
.file_folder .file-name {
 padding:10px
}
.file_folder .file-name .date {
 float:right
}
.fc-overlay {
 display:none;
 position:absolute;
 min-width:260px;
 padding:15px 0;
 top:auto;
 left:50%;
 margin-left:-150px;
 z-index:1000;
 color:#292b30!important
}
.fc-overlay.left {
 left:100%;
 top:-15px;
 padding:0 10px
}
.fc-overlay.right {
 left:auto;
 right:100%;
 top:-15px;
 padding:0 10px
}
.fc-overlay .panel {
 padding:10px
}
#calendar.fc .fc-toolbar {
 -webkit-border-radius:0;
 -moz-border-radius:0;
 border-radius:0;
 color:#292b30;
 background:0 0
}
#calendar.fc .fc-toolbar h2 {
 text-transform:uppercase
}
#calendar.fc .fc-toolbar .fc-today-button,
#calendar.fc .fc-toolbar .fc-state-default {
 background:0 0;
 color:#808488;
 padding:4px 10px;
 height:auto;
 border:none;
 box-shadow:none;
 text-shadow:none
}
@media screen and (max-width:640px) {
 #calendar.fc .fc-toolbar {
  padding-top:0
 }
 #calendar.fc .fc-toolbar .fc-right {
  width:100%;
  text-align:center
 }
 #calendar.fc .fc-toolbar .fc-left {
  width:100%;
  text-align:center
 }
}
#calendar.fc .fc-view-container .fc-event {
 padding:5px;
 font-size:13px;
 border-radius:.1875rem;
 border:0;
 color:#f8f9fa
}
#calendar.fc .fc-view-container .fc-event.fc-event-end:not(.fc-event-start) {
 border:0!important
}
#calendar.fc .fc-view-container .fc-event:focus,
#calendar.fc .fc-view-container .fc-event:hover,
#calendar.fc .fc-view-container .fc-event:active {
 z-index:1000;
 color:#fff
}
#calendar.fc .fc-view-container .fc-event:focus .fc-overlay,
#calendar.fc .fc-view-container .fc-event:hover .fc-overlay,
#calendar.fc .fc-view-container .fc-event:active .fc-overlay {
 display:block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:block
}
#calendar.fc .fc-view-container .fc-view.fc-basic-view>table>thead tr th.fc-widget-header,
#calendar.fc .fc-view-container .fc-view.fc-basic-view>table>thead tr td.fc-widget-header,
#calendar.fc .fc-view-container .fc-view.fc-agenda>table>thead tr th.fc-widget-header,
#calendar.fc .fc-view-container .fc-view.fc-agenda>table>thead tr td.fc-widget-header {
 color:#333537;
 background:#e8e9e9;
 border:1px solid #f8f9fa;
 padding:5px
}
@media screen and (max-width:640px) {
 #calendar.fc .fc-view-container .fc-view.fc-basic-view>table>thead tr th.fc-widget-header,
 #calendar.fc .fc-view-container .fc-view.fc-basic-view>table>thead tr td.fc-widget-header,
 #calendar.fc .fc-view-container .fc-view.fc-agenda>table>thead tr th.fc-widget-header,
 #calendar.fc .fc-view-container .fc-view.fc-agenda>table>thead tr td.fc-widget-header {
  font-size:10px
 }
}
#calendar.fc .fc-view-container .fc-view.fc-basic-view>table>thead tr th.fc-agenda-gutter,
#calendar.fc .fc-view-container .fc-view.fc-basic-view>table>thead tr td.fc-agenda-gutter,
#calendar.fc .fc-view-container .fc-view.fc-agenda>table>thead tr th.fc-agenda-gutter,
#calendar.fc .fc-view-container .fc-view.fc-agenda>table>thead tr td.fc-agenda-gutter {
 display:block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:block
}
#calendar.fc .fc-view-container .fc-view.fc-basic-view>table tbody tr td.fc-widget-content,
#calendar.fc .fc-view-container .fc-view.fc-agenda>table tbody tr td.fc-widget-content {
 border:0;
 border-bottom:1px solid #f8f9fa;
 border-right:1px solid #f8f9fa
}
#calendar.fc .fc-view-container .fc-view.fc-basic-view>table tbody tr td.fc-widget-content.fc-state-highlight,
#calendar.fc .fc-view-container .fc-view.fc-agenda>table tbody tr td.fc-widget-content.fc-state-highlight {
 background:#fff
}
#calendar.fc .fc-view-container .fc-view.fc-basic-view>table tbody tr td.fc-day-number,
#calendar.fc .fc-view-container .fc-view.fc-agenda>table tbody tr td.fc-day-number {
 color:#292b30;
 padding:5px 10px;
 margin:5px
}
#calendar.fc .fc-view-container .fc-view.fc-basic-view>table tbody tr td.fc-day-number.fc-state-highlight,
#calendar.fc .fc-view-container .fc-view.fc-agenda>table tbody tr td.fc-day-number.fc-state-highlight {
 -webkit-border-radius:50%;
 -moz-border-radius:50%;
 border-radius:50%;
 background-color:#db2828;
 color:#fff;
 padding:4px 6px;
 float:right
}
#calendar.fc .fc-view-container .fc-view.fc-basic-view>table tbody tr td:first-child.fc-widget-content,
#calendar.fc .fc-view-container .fc-view.fc-agenda>table tbody tr td:first-child.fc-widget-content {
 border-left:1px solid #f8f9fa
}
#calendar.fc .fc-view-container .fc-view.fc-basic-view .fc-body .fc-row .fc-bg,
#calendar.fc .fc-view-container .fc-view.fc-agenda .fc-body .fc-row .fc-bg {
 border-bottom:1px solid #f8f9fa
}
#calendar.fc .fc-view-container .fc-view.fc-basic-view .fc-body .fc-row:last-of-type .fc-bg,
#calendar.fc .fc-view-container .fc-view.fc-agenda .fc-body .fc-row:last-of-type .fc-bg {
 border-bottom:0
}
#calendar.fc .fc-view-container .fc-view.fc-basic-view .fc-agenda-allday .fc-agenda-axis,
#calendar.fc .fc-view-container .fc-view.fc-basic-view .fc-agenda-allday .fc-agenda-gutter,
#calendar.fc .fc-view-container .fc-view.fc-agenda .fc-agenda-allday .fc-agenda-axis,
#calendar.fc .fc-view-container .fc-view.fc-agenda .fc-agenda-allday .fc-agenda-gutter {
 background-color:#d1d3d4;
 color:#292b30;
 border-left:1px solid #f8f9fa;
 border-right:1px solid #f8f9fa;
 font-weight:100;
 padding:10px 5px
}
#calendar.fc .fc-view-container .fc-view.fc-basic-view>table>tbody>tr>td.fc-state-highlight,
#calendar.fc .fc-view-container .fc-view.fc-agenda>table>tbody>tr>td.fc-state-highlight {
 background:#d1d3d4
}
#calendar.fc .fc-view-container .fc-view.fc-basic-view>table>tbody>tr>td.fc-sat,
#calendar.fc .fc-view-container .fc-view.fc-agenda>table>tbody>tr>td.fc-sat {
 border-right:0
}
#calendar.fc .fc-view-container .fc-view.fc-basic-view .fc-agenda-slots tr,
#calendar.fc .fc-view-container .fc-view.fc-agenda .fc-agenda-slots tr {
 line-height:35px
}
#calendar.fc .fc-view-container .fc-view.fc-basic-view .fc-agenda-slots tr th,
#calendar.fc .fc-view-container .fc-view.fc-agenda .fc-agenda-slots tr th {
 background-color:#d1d3d4;
 color:#292b30;
 border:0;
 border-left:1px solid #f8f9fa;
 border-right:1px solid #f8f9fa;
 font-weight:100;
 padding-top:10px
}
#calendar.fc .fc-view-container .fc-view.fc-basic-view .fc-agenda-slots tr td.fc-widget-content,
#calendar.fc .fc-view-container .fc-view.fc-agenda .fc-agenda-slots tr td.fc-widget-content {
 border-bottom:1px solid #f8f9fa;
 line-height:50px
}
#calendar.fc .fc-view-container .fc-view.fc-basic-view .fc-agenda-slots tr td.fc-widget-content:last-child,
#calendar.fc .fc-view-container .fc-view.fc-agenda .fc-agenda-slots tr td.fc-widget-content:last-child {
 border-right:0
}
#calendar.fc .fc-view-container .fc-view.fc-basic-view .fc-agenda-slots tr.fc-minor td.fc-widget-content,
#calendar.fc .fc-view-container .fc-view.fc-agenda .fc-agenda-slots tr.fc-minor td.fc-widget-content {
 border-bottom:1px solid #f8f9fa
}
#calendar.fc .fc-view-container .fc-view.fc-basic-view .fc-agenda-divider,
#calendar.fc .fc-view-container .fc-view.fc-agenda .fc-agenda-divider {
 border:1px solid #f8f9fa
}
#calendar.fc .fc-view-container .fc-view.fc-basic-view .fc-agenda-divider .fc-agenda-divider-inner,
#calendar.fc .fc-view-container .fc-view.fc-agenda .fc-agenda-divider .fc-agenda-divider-inner {
 background-color:#d1d3d4;
 height:3px
}
#calendar.fc .fc-view-container .fc-list-view .fc-list-item {
 color:#d1d3d4
}
#calendar.fc .fc-view-container .fc-other-month {
 background:#f3f9ff
}
#calendar.fc .fc-view-container .fc-basic-view .fc-day-number,
#calendar.fc .fc-view-container .fc-basic-view .fc-week-number {
 float:left;
 padding:10px 0 5px 10px
}
#calendar.fc .fc-popover {
 border-radius:.55rem;
 box-shadow:0 10px 50px 0 rgba(41,43,48,.2);
 border:none;
 padding:10px
}
#calendar.fc .fc-popover .fc-event {
 padding:4px 8px;
 margin:2px 0
}
#calendar.fc .fc-agendaWeek-view .fc-head .fc-widget-header span,
#calendar.fc .fc-agendaDay-view .fc-head .fc-widget-header span,
#calendar.fc .fc-listWeek-view .fc-head .fc-widget-header span {
 display:inline-block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:inline;
 padding:10px
}
#calendar.fc .fc-unthemed td {
 border-color:#f8f9fa
}
.fc-unthemed .fc-row,
.fc-unthemed thead,
.fc-unthemed td,
.fc-unthemed th,
.fc-unthemed .fc-divider {
 border-color:#e6e9ed
}
.fc-agendaWeek-view tr.fc-minor {
 display:none
}
.fc-agendaWeek-view .fc-axis {
 padding:5px
}
.fc-agendaWeek-view .fc-head .fc-widget-header {
 background:#e6e9ed
}
.fc-agendaWeek-view .fc-head .fc-widget-header span {
 font-weight:600
}
.fc.event_list .fc-event {
 border:0;
 padding:5px 15px
}
.blog_left .blog_post {
 overflow:hidden
}
.blog_left .blog_post .post_img {
 max-height:400px;
 overflow:hidden
}
.blog_left .blog_post .content {
 padding-left:80px;
 position:relative
}
@media screen and (max-width:767px) {
 .blog_left .blog_post .content {
  padding-left:0
 }
}
.blog_left .blog_post .content .actions_sidebar {
 position:absolute;
 top:0;
 left:0;
 width:60px
}
@media screen and (max-width:767px) {
 .blog_left .blog_post .content .actions_sidebar {
  position:relative;
  width:100%
 }
}
.blog_left .blog_post .content .actions_sidebar a {
 display:inline-block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:inline;
 width:100%;
 height:60px;
 line-height:60px;
 border-right:1px solid #e8e9e9
}
@media screen and (max-width:767px) {
 .blog_left .blog_post .content .actions_sidebar a {
  width:50px;
  display:inline-block
 }
}
.blog_left .blog_post .content .title {
 font-weight:300
}
.blog_left .blog_post ul li {
 line-height:30px
}
.blog_left .blog_comment {
 display:flex;
 border-bottom:1px solid #e8e9e9
}
.blog_left .blog_comment .blog_comment {
 border-top:1px solid #e8e9e9;
 border-bottom:0
}
.social_link li {
 display:inline-block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:inline
}
.blog_right .widget.categories_clouds a {
 display:block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:block;
 color:#666a6d;
 position:relative;
 padding:5px 20px;
 font-size:16px
}
.blog_right .widget.categories_clouds a:hover {
 color:#292b30
}
.blog_right .widget.categories_clouds a::before {
 content:"\f105";
 position:absolute;
 left:0;
 font-family:fontawesome
}
.blog_right .widget.popular_post .single_post {
 position:relative
}
.blog_right .widget.popular_post .single_post .post_detail {
 background:#fff;
 padding:5px 10px;
 position:absolute;
 bottom:10px
}
.blog_right .widget.popular_post .single_post .post_detail p {
 font-weight:600
}
.blog_right .widget.instagram_plugin ul {
 font-size:0
}
.blog_right .widget.instagram_plugin ul li {
 display:inline-table;
 width:33.33%;
 border-spacing:3px
}
.blog_right .widget.instagram_plugin ul li:hover {
 opacity:.7
}
.profile_page .nav-item {
 padding:0
}
.profile_page .nav-link {
 padding:.5rem 1rem
}
.blog_single_post {
 overflow:hidden
}
.blog_single_post .img-post {
 overflow:hidden;
 max-height:400px
}
.blog_single_post .footer {
 padding:20px;
 display:flex;
 justify-content:space-between
}
.blog_single_post .stats li {
 display:inline-block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:inline;
 padding:0 20px
}
.page-loader-wrapper {
 text-align:center;
 z-index:99999999;
 position:fixed;
 top:0;
 left:0;
 bottom:0;
 right:0;
 width:100%;
 height:100%;
 overflow:hidden;
 background:#e8e9e9;
 display:flex
}
.page-loader-wrapper .loader {
 position:relative;
 top:calc(40% - 30px);
 justify-content:center;
 width:100%
}
.page-loader-wrapper img {
 width:38px;
 height:38px
}
.top_state {
 background:#e8e9e9
}
.dropify-wrapper {
 border-width:1px;
 border-color:#e8e9e9
}
.new_timeline {
 padding:0 0 0 5px;
 list-style:none;
 position:relative
}
.new_timeline::before {
 background-color:#d1d3d4;
 content:' ';
 height:100%;
 width:1px;
 position:absolute;
 top:0;
 left:10px;
 z-index:1
}
.new_timeline .bullet {
 -webkit-border-radius:10px;
 -moz-border-radius:10px;
 border-radius:10px;
 background:#fff;
 left:5px;
 width:10px;
 height:10px;
 z-index:2;
 position:absolute;
 border:2px solid
}
.new_timeline .bullet.pink {
 border-color:#de5d83
}
.new_timeline .bullet.green {
 border-color:#21ba45
}
.new_timeline .bullet.orange {
 border-color:#f2711c
}
.new_timeline h3 {
 font-weight:600
}
.new_timeline h4 {
 font-weight:400;
 color:#4d5052
}
.team-info li {
 -webkit-transition:all .3s ease-in-out;
 -moz-transition:all .3s ease-in-out;
 -ms-transition:all .3s ease-in-out;
 -o-transition:all .3s ease-in-out;
 transition:all .3s ease-in-out;
 display:inline-block
}
.team-info li+li {
 margin-left:-10px
}
.team-info li img {
 width:32px;
 -webkit-border-radius:50%;
 -moz-border-radius:50%;
 border-radius:50%;
 border:2px solid #fff;
 box-shadow:0 2px 10px 0 rgba(0,0,0,.2)
}
.team-info li:hover {
 -webkit-transform:translateY(-4px) scale(1.02);
 -moz-transform:translateY(-4px) scale(1.02);
 -ms-transform:translateY(-4px) scale(1.02);
 -o-transform:translateY(-4px) scale(1.02);
 transform:translateY(-4px) scale(1.02);
 z-index:999
}
.team-info li:hover img {
 -webkit-box-shadow:0 14px 24px rgba(62,57,107,.2);
 box-shadow:0 14px 24px rgba(62,57,107,.2)
}
.taskboard .dd-handle {
 -webkit-transition:all .4s ease-in-out;
 -moz-transition:all .4s ease-in-out;
 -ms-transition:all .4s ease-in-out;
 -o-transition:all .4s ease-in-out;
 transition:all .4s ease-in-out;
 -webkit-border-radius:3px;
 -moz-border-radius:3px;
 border-radius:3px;
 color:#4d5052;
 padding:20px;
 position:relative
}
.taskboard .dd-handle::after {
 content:"\f02e";
 font-family:fontawesome;
 position:absolute;
 top:-5px;
 right:20px
}
.taskboard .dd-handle:hover {
 color:#292b30
}
.taskboard .dd-handle h6 {
 font-weight:600
}
.taskboard .dd-handle .time {
 display:block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:block
}
.taskboard .planned_task .dd-handle::after {
 color:#17a2b8
}
.taskboard .planned_task .dd-handle:hover {
 border-color:#17a2b8
}
.taskboard .progress_task .dd-handle::after {
 color:#fbbd08
}
.taskboard .progress_task .dd-handle:hover {
 border-color:#fbbd08
}
.taskboard .completed_task .dd-handle::after {
 color:#21ba45
}
.taskboard .completed_task .dd-handle:hover {
 border-color:#21ba45
}
.taskboard .dd-item:hover {
 cursor:move
}
.taskboard .dd-item>button {
 margin:19px 0 9px 9px
}
.taskboard .dd-item>button:before {
 z-index:1
}
.table_e2 img {
 width:35px
}
.table_e2 .c_name {
 font-weight:700
}
.w_color div {
 height:25px;
 width:25px
}
.modal .modal-header .close:before {
 display:none
}
.top_banner {
 padding-top:80px!important;
 padding-bottom:150px!important
}
.top_banner .banner_report {
 width:460px
}
.my_sort_cut {
 padding-top:15px;
 min-height:80px;
 display:block;
 text-align:center
}
.my_sort_cut:hover i {
 font-size:40px
}
.my_sort_cut i {
 font-size:30px;
 -webkit-transition:font-size .2s;
 -moz-transition:font-size .2s;
 -ms-transition:font-size .2s;
 -o-transition:font-size .2s;
 transition:font-size .2s
}
.my_sort_cut span {
 display:block
}
.ribbon {
 position:relative
}
.ribbon .ribbon-box {
 color:#fff;
 right:auto;
 left:0;
 top:15px;
 position:absolute;
 height:32px;
 min-width:30px;
 padding:0 5px;
 text-align:center;
 line-height:32px
}
.ribbon .ribbon-box::before {
 position:absolute;
 display:block;
 width:0;
 height:0;
 content:'';
 top:0;
 right:-8px;
 height:32px;
 border:16px solid;
 border-left-width:0;
 border-right-width:8px
}
.ribbon .ribbon-box.green {
 background:#21ba45
}
.ribbon .ribbon-box.green::before {
 border-color:#21ba45;
 border-right-color:transparent
}
.ribbon .ribbon-box.cyan {
 background:#17a2b8
}
.ribbon .ribbon-box.cyan::before {
 border-color:#17a2b8;
 border-right-color:transparent
}
.ribbon .ribbon-box.pink {
 background:#e03997
}
.ribbon .ribbon-box.pink::before {
 border-color:#e03997;
 border-right-color:transparent
}
.ribbon .ribbon-box.orange {
 background:#f2711c
}
.ribbon .ribbon-box.orange::before {
 border-color:#f2711c;
 border-right-color:transparent
}
.ribbon .ribbon-box.info {
 background:#17a2b8
}
.ribbon .ribbon-box.info::before {
 border-color:#17a2b8;
 border-right-color:transparent
}
.ribbon .ribbon-box.indigo {
 background:#6435c9
}
.ribbon .ribbon-box.indigo::before {
 border-color:#6435c9;
 border-right-color:transparent
}
.box-icon.sm {
 width:30px;
 height:30px;
 line-height:30px;
 text-align:center
}
.box-icon.md {
 width:40px;
 height:40px;
 line-height:40px;
 text-align:center
}
.box-icon.lg {
 width:80px;
 height:80px;
 line-height:80px;
 text-align:center
}
.box-icon i {
 color:#fff;
 font-size:18px
}
.note-editor .btn.btn-default,
.note-editor .dataTables_wrapper .dataTables_paginate .btn-default.paginate_button,
.dataTables_wrapper .dataTables_paginate .note-editor .btn-default.paginate_button {
 border:0!important;
 background-color:transparent!important;
 padding:5px 10px!important;
 box-shadow:none!important;
 font-size:12px
}
.avtar-pic {
 color:#fff;
 border-radius:3px
}
.widgets1 {
 display:flex;
 align-items:center
}
.widgets1 .icon {
 width:80px;
 text-align:center
}
.widgets2 {
 display:flex;
 justify-content:space-between
}
.top_counter {
 display:flex;
 align-items:center
}
.top_counter .icon {
 border-radius:.125rem;
 width:50px;
 height:50px;
 line-height:50px;
 text-align:center
}
.top_counter .icon i {
 color:#fff
}
.w_sparkline {
 display:flex;
 justify-content:space-between;
 align-items:center
}
.currency_state {
 display:flex;
 align-items:center
}
.currency_state .icon img {
 width:40px
}
.gender_overview {
 display:flex;
 justify-content:center;
 padding:20px 0;
 background:#f8f9fa
}
.gender_overview .widgets1 {
 margin:0 20px
}
.gender_overview .widgets1 .icon {
 width:40px
}
.feeds_widget li {
 padding:12px 15px;
 border-bottom:1px solid #e8e9e9;
 display:flex;
 justify-content:flex-start
}
.feeds_widget li:last-child {
 border:none
}
.feeds_widget li .feeds-left {
 font-size:18px;
 float:left;
 width:40px
}
.feeds_widget li .feeds-body {
 width:100%
}
.feeds_widget li .feeds-body .title {
 font-size:16px
}
.feeds_widget li .feeds-body>small {
 display:block;
 vertical-align:middle;
 *vertical-align:auto;
 *zoom:1;
 *display:block;
 font-size:13px;
 width:80%;
 color:#4d5052
}
.list-widget a {
 padding:15px;
 border-left:0;
 border-right:0;
 border-color:#e8e9e9
}
.list-widget a:first-child {
 border-top:0
}
.list-widget a:last-child {
 border-bottom:0
}
.list-widget a i {
 width:35px
}
.list-widget a .badge {
 float:right
}
.recent_comments li {
 display:flex;
 justify-content:flex-start;
 border-bottom:1px solid #e8e9e9
}
.recent_comments li:last-child {
 border-bottom:0
}
.recent_comments li .avatar_img {
 width:50px
}
.recent_comments li .comment_body {
 width:100%
}
.recent_comments li .comment_body h6 {
 margin:0
}
.recent_comments li .comment_body .badge {
 float:right
}
.todo_list li {
 border-bottom:1px solid #e8e9e9
}
.todo_list li:last-child {
 border-bottom:0
}
.todo_list .custom-checkbox input[type=checkbox]:checked+span {
 text-decoration:line-through
}
.w_social {
 color:#fff;
 padding:25px
}
.w_social.google {
 background:#dc4e41
}
.w_social.twitter {
 background:#1da1f2
}
.w_social.facebook {
 background:#3b5998
}
.w_social_state {
 display:flex
}
.w_social_state .icon {
 width:45px
}
.w_social_state .content {
 width:100%
}
.w_social_state2 {
 text-align:center
}
.w_social_state2 .icon {
 color:#fff!important;
 border-radius:.1875rem;
 width:60px;
 height:60px;
 display:flex;
 justify-content:center;
 align-items:center;
 margin:0 auto
}
.w_social_state2 .icon.facebook {
 background:#3b5998
}
.w_social_state2 .icon.twitter {
 background:#1da1f2
}
.w_social_state2 .icon.instagram {
 background:#e4405f
}
.w_social_state2 .icon.google {
 background:#dc4e41
}
.w_social_state2 .icon.linkedin {
 background:#0077b5
}
.w_social_state2 .icon.behance {
 background:#053eff
}
.w_user {
 display:flex
}
.w_user .user_avtar {
 width:70px
}
.w_user .wid-u-info {
 width:calc(100% - 90px)
}
.w_user ul {
 display:flex
}
.w_user ul li {
 width:100%
}
.dark-mode {
 background:#272c31;
 color:#7d8490
}
.dark-mode ::selection {
 background:#fff;
 color:#272c31
}
.dark-mode .loader {
 color:#272c31
}
.dark-mode .page .section-gray {
 background:#272c31
}
.dark-mode .page .section-white {
 background:#2b3035
}
.dark-mode .page .section-light {
 background:#2b3035
}
.dark-mode .page .section-body {
 background:#272c31
}
.dark-mode .page .section-dark {
 background:#272c31
}
.dark-mode #left-sidebar,
.dark-mode .user_div {
 background:#272c31;
 border-color:#343a40
}
.dark-mode #left-sidebar .brand-name,
.dark-mode .user_div .brand-name {
 color:#fff
}
.dark-mode #left-sidebar .card,
.dark-mode .user_div .card {
 background:0 0
}
.dark-mode .theme_div .card {
 background:#fff
}
.dark-mode #header_top {
 background:#272c31
}
.dark-mode #header_top .brand-logo {
 background:#343a40
}
.dark-mode #header_top .nav-link {
 color:#7d8490
}
.dark-mode .metismenu .active>a {
 color:#c8cfd6
}
.dark-mode .metismenu .active ul .active a {
 color:#c8cfd6
}
.dark-mode .metismenu a,
.dark-mode .metismenu ul a {
 color:#80868e
}
.dark-mode .metismenu .has-arrow:after {
 color:rgba(255,255,255,.2)
}
.dark-mode .metismenu.grid>li>a {
 border-color:#343a40
}
.dark-mode .header {
 background:#272c31
}
.dark-mode .header .nav-tabs .nav-link {
 color:#fff
}
.dark-mode .header .nav-tabs .nav-link.active {
 border-color:#fff
}
.dark-mode .header .dropdown-menu .dropdown-item:hover,
.dark-mode .header .dropdown-menu .dropdown-item.active {
 color:#272c31
}
.dark-mode .card {
 background:#2b3035;
 border-color:#343a40;
 color:#7d8490
}
.dark-mode .card-header {
 border-color:#343a40
}
.dark-mode .card-header.bline {
 border-color:#343a40
}
.dark-mode .page-title,
.dark-mode .form-control-plaintext {
 color:#c8cfd6
}
.dark-mode .table thead th {
 border-color:#585858
}
.dark-mode .table td,
.dark-mode .table th {
 border-color:#343a40
}
.dark-mode .table.table_custom thead tr {
 background:0 0
}
.dark-mode .table.table_custom thead tr th {
 color:#80868e
}
.dark-mode .table.table_custom tr {
 background:#2b3035
}
.dark-mode .table.table_custom.border-style tr td {
 border-color:#343a40
}
.dark-mode .table.table_custom.border-style tr:hover td {
 border-top-color:#2185d0;
 border-bottom-color:#2185d0
}
.dark-mode .table.table_custom.border-style tr:hover td:first-child {
 border-left-color:#2185d0
}
.dark-mode .table.table_custom.border-style tr:hover td:last-child {
 border-right-color:#2185d0
}
.dark-mode .table.table-custom td,
.dark-mode .table.table-custom th {
 background:#2b3035
}
.dark-mode .form-control:disabled,
.dark-mode .dataTables_wrapper .dataTables_filter:disabled,
.dataTables_wrapper .dark-mode .dataTables_filter:disabled,
.dark-mode .form-control[readonly],
.dark-mode .dataTables_wrapper .dataTables_filter[readonly],
.dataTables_wrapper .dark-mode .dataTables_filter[readonly] {
 background:#272c31
}
.dark-mode .gender_overview {
 background:#343a40
}
.dark-mode .selectize-input {
 background:0 0;
 border-color:#343a40
}
.dark-mode .selectize-input.full {
 background:0 0;
 border-color:#343a40
}
.dark-mode .multiselect_div>.btn-group .btn,
.dark-mode .multiselect_div>.btn-group .dataTables_wrapper .dataTables_paginate .paginate_button,
.dataTables_wrapper .dataTables_paginate .dark-mode .multiselect_div>.btn-group .paginate_button {
 background:0 0;
 border-color:#343a40;
 color:#80868e
}
.dark-mode .multiselect_div>.btn-group .btn.btn-success,
.dark-mode .multiselect_div>.btn-group .dataTables_wrapper .dataTables_paginate .btn-success.paginate_button,
.dataTables_wrapper .dataTables_paginate .dark-mode .multiselect_div>.btn-group .btn-success.paginate_button {
 background:#21ba45;
 color:#fff
}
.dark-mode .multiselect_div>.btn-group .btn.btn-primary,
.dark-mode .multiselect_div>.btn-group .dataTables_wrapper .dataTables_paginate .btn-primary.paginate_button,
.dataTables_wrapper .dataTables_paginate .dark-mode .multiselect_div>.btn-group .btn-primary.paginate_button {
 background:#17a2b8;
 color:#fff
}
.dark-mode .form-control,
.dark-mode .dataTables_wrapper .dataTables_filter,
.dataTables_wrapper .dark-mode .dataTables_filter,
.dark-mode .input-group-append>.btn,
.dark-mode .dataTables_wrapper .dataTables_paginate .input-group-append>.paginate_button,
.dataTables_wrapper .dataTables_paginate .dark-mode .input-group-append>.paginate_button,
.dark-mode .custom-select {
 background:0 0;
 border-color:#343a40
}
.dark-mode .custom-checkbox .custom-control-label:before {
 background-color:#343a40
}
.dark-mode .input-group-text,
.dark-mode .page-header,
.dark-mode .timeline_item,
.dark-mode .timeline_item .tl_avatar,
.dark-mode .recent_comments li,
.dark-mode .feeds_widget li,
.dark-mode .list-group-item,
.dark-mode .progress,
.dark-mode .file_folder a,
.dark-mode .chat_app .chat_list,
.dark-mode .selectgroup-button,
.dark-mode .card-footer {
 border-color:#343a40
}
.dark-mode .btn.btn-default,
.dark-mode .dataTables_wrapper .dataTables_paginate .btn-default.paginate_button,
.dataTables_wrapper .dataTables_paginate .dark-mode .btn-default.paginate_button,
.dark-mode .dataTables_wrapper .dataTables_paginate .btn-default.paginate_button {
 border-color:#343a40;
 background:0 0
}
.dark-mode .todo_list li,
.dark-mode .nav-tabs,
.dark-mode .chat_app .chat_windows .chat-message {
 border-color:#343a40
}
.dark-mode .right_chat li {
 background:#343a40
}
.dark-mode .right_chat .media .name {
 color:#c8cfd6
}
.dark-mode .offcanvas-active #header_top {
 background:#2b3035
}
.dark-mode .list-widget a {
 border-color:#343a40;
 color:#c8cfd6
}
.dark-mode .dropify-wrapper {
 background-color:#272c31;
 border-color:#343a40
}
.dark-mode .dropify-wrapper:hover {
 background-image:linear-gradient(-45deg,#2b3035 25%,transparent 25%,transparent 50%,#2b3035 50%,#2b3035 75%,transparent 75%,transparent)
}
.dark-mode .list-group-item {
 background:#2b3035
}
.dark-mode .new_timeline:before {
 background-color:#343a40
}
.dark-mode .new_timeline h4 {
 color:#7d8490
}
.dark-mode .right_chat li:hover {
 background:#272c31
}
.dark-mode #calendar.fc .fc-toolbar h2 {
 color:#c8cfd6
}
.dark-mode #calendar.fc .fc-view-container .fc-view.fc-basic-view>table tbody tr td.fc-widget-content,
.dark-mode #calendar.fc .fc-view-container .fc-view.fc-agenda>table tbody tr td.fc-widget-content,
.dark-mode #calendar.fc .fc-view-container .fc-view.fc-basic-view .fc-body .fc-row .fc-bg,
.dark-mode #calendar.fc .fc-view-container .fc-view.fc-agenda .fc-body .fc-row .fc-bg {
 border-color:#343a40!important
}
.dark-mode #calendar.fc .fc-view-container .fc-other-month {
 background:#272c31
}
.dark-mode .inbox .detail {
 background:#2b3035
}
.dark-mode .inbox .detail .detail-header {
 background:#272c31
}
.dark-mode .note-editor.note-frame {
 background:#272c31;
 border-color:#343a40
}
.dark-mode .note-editor.note-frame .note-editing-area .note-editable {
 background:#272c31;
 color:#7d8490
}
.dark-mode .wizard>.steps .disabled a,
.dark-mode .wizard>.steps .disabled a:hover,
.dark-mode .wizard>.steps .disabled a:active {
 background:#272c31
}
.dark-mode .wizard>.content {
 background:#272c31
}
.dark-mode .progress {
 background:#343a40
}
.dark-mode #page_top .right_chat li {
 background:inherit
}
.dark-mode #page_top .right_chat .media .name {
 color:#333537
}
.dark-mode #page_top .feeds_widget li {
 border-color:#e8e9e9
}
.dark-mode .apexcharts-canvas .apexcharts-yaxis .apexcharts-yaxis-label,
.dark-mode .apexcharts-canvas .apexcharts-yaxis .apexcharts-xaxis-label,
.dark-mode .apexcharts-canvas .apexcharts-xaxis .apexcharts-yaxis-label,
.dark-mode .apexcharts-canvas .apexcharts-xaxis .apexcharts-xaxis-label {
 fill:#80868e!important
}
.dark-mode .apexcharts-canvas .apexcharts-legend .apexcharts-legend-text {
 color:#80868e!important
}
.dark-mode .apexcharts-canvas .apexcharts-gridline {
 stroke:#343a40!important
}
.dark-mode .apexcharts-canvas .apexcharts-pie-series path {
 stroke:#2b3035!important
}
.dark-mode .apexcharts-canvas .apexcharts-radialbar-track path {
 stroke:#343a40!important
}
.dark-mode .apexcharts-canvas .apexcharts-radar-series polygon {
 fill:#2b3035!important;
 stroke:#343a40!important
}
.dark-mode .apexcharts-canvas .apexcharts-radar-series line {
 stroke:#343a40!important
}
.dark-mode .page-header .right .nav-pills .nav-link {
 color:#80868e
}

    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>

<div class="card">
<h3 class="card-title">Events Details </h3> 

<div class="container">


    <div id="calendar"  class="fc fc-unthemed fc-ltr"></div>

</div>

<script>
$(document).ready(function () {   

var SITEURL = "{{ url('/') }}"; 

$.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});  

var calendar = $('#calendar').fullCalendar({
                    editable: true,
                    events: SITEURL + "/event",
                    displayEventTime: false,
                    editable: true,
                    eventRender: function (event, element, view) {
                        if (event.allDay === 'true') {
                                event.allDay = true;
                        } else {
                                event.allDay = false;
                        }
                    },
                    selectable: true,
                    selectHelper: true,
                    select: function (start, end, allDay) {
                        var title = prompt('Event Title:');
                        if (title) {
                            var start = $.fullCalendar.formatDate(start, "Y-MM-DD");
                            var end = $.fullCalendar.formatDate(end, "Y-MM-DD");
                            $.ajax({
                                url: SITEURL + "/event_save",
                                data: {
                                    title: title,
                                    start: start,
                                    end: end,
                                    type: 'add'
                                },
                                type: "POST",
                                success: function (data) {
                                    displayMessage("Event Created Successfully");
                                    calendar.fullCalendar('renderEvent',
                                        {
                                            id: data.id,
                                            title: title,
                                            start: start,
                                            end: end,
                                            allDay: allDay
                                        },true); 
                                    calendar.fullCalendar('unselect');
                                }
                            });
                        }
                    },

                    eventDrop: function (event, delta) {
                        var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                        var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
                        $.ajax({
                            url: SITEURL + '/event_save',
                            data: {
                                title: event.title,
                                start: start,
                                end: end,
                                id: event.id,
                                type: 'update'
                            },

                            type: "POST",

                            success: function (response) {

                                displayMessage("Event Updated Successfully");

                            }

                        });

                    },

                    eventClick: function (event) {

                        var deleteMsg = confirm("Do you really want to delete?");

                        if (deleteMsg) {

                            $.ajax({
                                type: "POST",
                                url: SITEURL + '/event_save',
                                data: {
                                        id: event.id,
                                        type: 'delete'
                                },
                                success: function (response) {
                                    calendar.fullCalendar('removeEvents', event.id);
                                    displayMessage("Event Deleted Successfully");

                                }

                            });

                        }

                    }

 

                });

 

});

 

function displayMessage(message) {

    toastr.success(message, 'Event');

} 

  

</script>

  

</body>

</html>