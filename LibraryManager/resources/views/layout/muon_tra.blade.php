
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Quản lý thư viện</title>
    {{--    <link rel="stylesheet" href="assets/stylesheets/main.css">--}}
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css'>
    <style>
        {{--/* @include transform(rotate(30deg)); */--}}
        {{--/* @include centerAbsolute(top); */--}}
        {{--/* @include flexbox; */--}}
        {{--/* @include justify-content(space-between); */--}}
        /*.color{
            color: map-get($color, red);
        }*/
        .of-cv {
            width: 100%;
            object-fit: cover; }

        /*text line*/
        .tl-1 {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical; }

        .tl-2 {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical; }

        .tl-3 {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical; }

        .tl-4 {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical; }

        .tl-5 {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 5;
            -webkit-box-orient: vertical; }

        .tl-6 {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 6;
            -webkit-box-orient: vertical; }

        .ta-justify {
            text-align: justify; }

        {{--/* @include transform(rotate(30deg)); */--}}
        {{--/* @include centerAbsolute(top); */--}}
        {{--/* @include flexbox; */--}}
        {{--/* @include justify-content(space-between); */--}}
        /*@font-face {*/
        /*    font-family: Averta;*/
        /*    src: url("../fonts/Averta.otf"); }*/
        /*@font-face {*/
        /*    font-family: Averta-Bold;*/
        /*    src: url("../fonts/Averta-Bold.otf"); }*/
        /*@font-face {*/
        /*    font-family: Averta-Extra-Bold;*/
        /*    src: url("../fonts/Averta-Extra-Bold.otf"); }*/
        /*@font-face {*/
        /*    font-family: Averta-Semibold;*/
        /*    src: url("../fonts/Averta-Semibold.otf"); }*/
        /*@font-face {*/
        /*    font-family: Averta-Black;*/
        /*    src: url("../fonts/Averta-Black.otf"); }*/
        /*@font-face {*/
        /*    font-family: Averta-Light;*/
        /*    src: url("../fonts/Averta-Light.otf"); }*/
        /*@font-face {*/
        /*    font-family: Averta-Light;*/
        /*    src: url("../fonts/Averta-Light.otf"); }*/
        /*@font-face {*/
        /*    font-family: Averta-Thin-Italic;*/
        /*    src: url("../fonts/Averta-Thin-Italic.otf"); }*/
        /*@font-face {*/
        /*    font-family: Averta-Bold-Italic;*/
        /*    src: url("../fonts/Averta-Bold-Italic.otf"); }*/
        *,
        *::before,
        *::after {
            box-sizing: border-box; }

        :root {
            font-size: 16px;
            font-family: Averta;
            font-weight: 400;
            line-height: 1.5; }
        @media (max-width: 767.98px) {
            :root {
                font-size: 14px; } }

        html {
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0); }

        body {
            margin: 0;
            background-color: #ffffff;
            color: #242424; }

        article,
        aside,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        main,
        nav,
        section {
            display: block; }

        [tabindex='-1']:focus {
            outline: 0 !important; }

        hr {
            box-sizing: content-box;
            height: 0;
            overflow: visible; }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-top: 0;
            margin-bottom: 0; }

        p {
            margin-top: 0;
            margin-bottom: 0; }

        abbr[title],
        abbr[data-original-title] {
            text-decoration: underline;
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted;
            cursor: help;
            border-bottom: 0;
            -webkit-text-decoration-skip-ink: none;
            text-decoration-skip-ink: none; }

        address {
            margin-bottom: 0;
            font-style: normal;
            line-height: inherit; }

        ol,
        ul,
        dl {
            margin-top: 0;
            margin-bottom: 0; }

        ol ol,
        ul ul,
        ol ul,
        ul ol {
            margin-bottom: 0; }

        dt {
            font-weight: 700; }

        dd {
            margin-bottom: 0;
            margin-left: 0; }

        blockquote {
            margin: 0; }

        b,
        strong {
            font-weight: bolder;
            font-weight: 700; }

        small {
            font-size: 80%; }

        sub,
        sup {
            position: relative;
            font-size: 75%;
            line-height: 0;
            vertical-align: baseline; }

        sub {
            bottom: -0.25em; }

        sup {
            top: -0.5em; }

        a {
            color: #242424;
            text-decoration: none;
            background-color: transparent; }

        pre,
        code,
        kbd,
        samp {
            font-family: SFMono-Regular, Menlo, Monaco, Consolas, 'Liberation Mono', 'Courier New', monospace;
            font-size: 1em; }

        pre {
            margin-top: 0;
            margin-bottom: 0;
            overflow: auto; }

        figure {
            margin: 0; }

        img {
            vertical-align: middle;
            border-style: none;
            max-width: 100%; }

        svg {
            overflow: hidden;
            vertical-align: middle; }

        table {
            border-collapse: collapse; }

        caption {
            padding-top: 0;
            padding-bottom: 0;
            color: #6c757d;
            text-align: left;
            caption-side: bottom; }

        th {
            text-align: inherit; }

        label {
            display: inline-block;
            margin-bottom: 0; }

        button {
            border-radius: 0; }

        input,
        button,
        select,
        optgroup,
        textarea {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit; }

        button,
        input {
            overflow: visible; }

        button,
        select {
            text-transform: none; }

        select {
            word-wrap: normal; }

        button,
        [type='button'],
        [type='reset'],
        [type='submit'] {
            -webkit-appearance: button; }

        button:not(:disabled),
        [type='button']:not(:disabled),
        [type='reset']:not(:disabled),
        [type='submit']:not(:disabled) {
            cursor: pointer; }

        button::-moz-focus-inner,
        [type='button']::-moz-focus-inner,
        [type='reset']::-moz-focus-inner,
        [type='submit']::-moz-focus-inner {
            padding: 0;
            border-style: none; }

        input[type='radio'],
        input[type='checkbox'] {
            box-sizing: border-box;
            padding: 0; }

        input[type='date'],
        input[type='time'],
        input[type='datetime-local'],
        input[type='month'] {
            -webkit-appearance: listbox; }

        textarea {
            overflow: auto;
            resize: vertical; }

        fieldset {
            min-width: 0;
            padding: 0;
            margin: 0;
            border: 0; }

        legend {
            display: block;
            width: 100%;
            max-width: 100%;
            padding: 0;
            margin-bottom: 0;
            font-size: 1.5rem;
            line-height: inherit;
            color: inherit;
            white-space: normal; }

        progress {
            vertical-align: baseline; }

        [type='number']::-webkit-inner-spin-button,
        [type='number']::-webkit-outer-spin-button {
            height: auto; }

        [type='search'] {
            outline-offset: -2px;
            -webkit-appearance: none; }

        [type='search']::-webkit-search-decoration {
            -webkit-appearance: none; }

        ::-webkit-file-upload-button {
            font: inherit;
            -webkit-appearance: button; }

        output {
            display: inline-block; }

        summary {
            display: list-item;
            cursor: pointer; }

        template {
            display: none; }

        *:focus,
        *:active {
            outline: none; }

        .container {
            width: 100%;
            padding-right: 10px;
            padding-left: 10px;
            margin-right: auto;
            margin-left: auto;
            position: relative; }

        @media (min-width: 1025px) {
            .container {
                max-width: 990px; } }
        @media (min-width: 1200px) {
            .container {
                max-width: 1140px; } }
        @media (min-width: 1440px) {
            .container {
                max-width: 1360px; } }
        @media (min-width: 1600px) {
            .container {
                max-width: 1560px; } }
        @media (min-width: 1720px) {
            .container {
                max-width: 1640px; } }
        .container-fluid {
            width: 100%; }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -10px;
            margin-left: -10px;
            display: -ms-flexbox;
            -ms-flex-wrap: wrap; }

        .no-gutters {
            margin-right: 0;
            margin-left: 0; }

        .no-gutters > .col,
        .no-gutters > [class*='col-'] {
            padding-right: 0;
            padding-left: 0; }

        .col-1,
        .col-2,
        .col-3,
        .col-4,
        .col-5,
        .col-6,
        .col-7,
        .col-8,
        .col-9,
        .col-10,
        .col-11,
        .col-12,
        .col-20,
        .col,
        .col-auto,
        .col-sm-1,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-sm-20,
        .col-sm,
        .col-sm-auto,
        .col-md-1,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-md-20,
        .col-md,
        .col-md-auto,
        .col-lg-1,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12,
        .col-lg-20,
        .col-lg,
        .col-lg-auto,
        .col-xl-1,
        .col-xl-2,
        .col-xl-3,
        .col-xl-4,
        .col-xl-5,
        .col-xl-6,
        .col-xl-7,
        .col-xl-8,
        .col-xl-9,
        .col-xl-10,
        .col-xl-11,
        .col-xl-12,
        .col-xl-20,
        .col-xl,
        .col-xl-auto,
        .col-2xl-1,
        .col-2xl-2,
        .col-2xl-3,
        .col-2xl-4,
        .col-2xl-5,
        .col-2xl-6,
        .col-2xl-7,
        .col-2xl-8,
        .col-2xl-9,
        .col-2xl-10,
        .col-2xl-11,
        .col-2xl-12,
        .col-2xl-20,
        .col-2xl,
        .col-2xl-auto {
            position: relative;
            width: 100%; }

        .col {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%; }

        .col-auto {
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
            max-width: 100%; }

        .col-1 {
            -ms-flex: 0 0 8.333333%;
            flex: 0 0 8.333333%;
            max-width: 8.333333%; }

        .col-2 {
            -ms-flex: 0 0 16.666667%;
            flex: 0 0 16.666667%;
            max-width: 16.666667%; }

        .col-3 {
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%; }

        .col-4 {
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%; }

        .col-5 {
            -ms-flex: 0 0 41.666667%;
            flex: 0 0 41.666667%;
            max-width: 41.666667%; }

        .col-6 {
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%; }

        .col-7 {
            -ms-flex: 0 0 58.333333%;
            flex: 0 0 58.333333%;
            max-width: 58.333333%; }

        .col-8 {
            -ms-flex: 0 0 66.666667%;
            flex: 0 0 66.666667%;
            max-width: 66.666667%; }

        .col-9 {
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%; }

        .col-10 {
            -ms-flex: 0 0 83.333333%;
            flex: 0 0 83.333333%;
            max-width: 83.333333%; }

        .col-11 {
            -ms-flex: 0 0 91.666667%;
            flex: 0 0 91.666667%;
            max-width: 91.666667%; }

        .col-12 {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%; }

        .col-20 {
            -ms-flex: 0 0 100%;
            flex: 0 0 20%;
            max-width: 20%; }

        @media (min-width: 576px) {
            .col-sm {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%; }

            .col-sm-auto {
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: 100%; }

            .col-sm-1 {
                -ms-flex: 0 0 8.333333%;
                flex: 0 0 8.333333%;
                max-width: 8.333333%; }

            .col-sm-2 {
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%; }

            .col-sm-3 {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%; }

            .col-sm-4 {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%; }

            .col-sm-5 {
                -ms-flex: 0 0 41.666667%;
                flex: 0 0 41.666667%;
                max-width: 41.666667%; }

            .col-sm-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%; }

            .col-sm-7 {
                -ms-flex: 0 0 58.333333%;
                flex: 0 0 58.333333%;
                max-width: 58.333333%; }

            .col-sm-8 {
                -ms-flex: 0 0 66.666667%;
                flex: 0 0 66.666667%;
                max-width: 66.666667%; }

            .col-sm-9 {
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%; }

            .col-sm-10 {
                -ms-flex: 0 0 83.333333%;
                flex: 0 0 83.333333%;
                max-width: 83.333333%; }

            .col-sm-11 {
                -ms-flex: 0 0 91.666667%;
                flex: 0 0 91.666667%;
                max-width: 91.666667%; }

            .col-sm-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%; }

            .col-sm-20 {
                -ms-flex: 0 0 100%;
                flex: 0 0 20%;
                max-width: 20%; } }
        @media (min-width: 768px) {
            .col-md {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%; }

            .col-md-auto {
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: 100%; }

            .col-md-1 {
                -ms-flex: 0 0 8.333333%;
                flex: 0 0 8.333333%;
                max-width: 8.333333%; }

            .col-md-2 {
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%; }

            .col-md-3 {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%; }

            .col-md-4 {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%; }

            .col-md-5 {
                -ms-flex: 0 0 41.666667%;
                flex: 0 0 41.666667%;
                max-width: 41.666667%; }

            .col-md-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%; }

            .col-md-7 {
                -ms-flex: 0 0 58.333333%;
                flex: 0 0 58.333333%;
                max-width: 58.333333%; }

            .col-md-8 {
                -ms-flex: 0 0 66.666667%;
                flex: 0 0 66.666667%;
                max-width: 66.666667%; }

            .col-md-9 {
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%; }

            .col-md-10 {
                -ms-flex: 0 0 83.333333%;
                flex: 0 0 83.333333%;
                max-width: 83.333333%; }

            .col-md-11 {
                -ms-flex: 0 0 91.666667%;
                flex: 0 0 91.666667%;
                max-width: 91.666667%; }

            .col-md-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%; }

            .col-md-20 {
                -ms-flex: 0 0 100%;
                flex: 0 0 20%;
                max-width: 20%; } }
        @media (min-width: 1025px) {
            .col-lg {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%; }

            .col-lg-auto {
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: 100%; }

            .col-lg-1 {
                -ms-flex: 0 0 8.333333%;
                flex: 0 0 8.333333%;
                max-width: 8.333333%; }

            .col-lg-2 {
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%; }

            .col-lg-3 {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%; }

            .col-lg-4 {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%; }

            .col-lg-5 {
                -ms-flex: 0 0 41.666667%;
                flex: 0 0 41.666667%;
                max-width: 41.666667%; }

            .col-lg-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%; }

            .col-lg-7 {
                -ms-flex: 0 0 58.333333%;
                flex: 0 0 58.333333%;
                max-width: 58.333333%; }

            .col-lg-8 {
                -ms-flex: 0 0 66.666667%;
                flex: 0 0 66.666667%;
                max-width: 66.666667%; }

            .col-lg-9 {
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%; }

            .col-lg-10 {
                -ms-flex: 0 0 83.333333%;
                flex: 0 0 83.333333%;
                max-width: 83.333333%; }

            .col-lg-11 {
                -ms-flex: 0 0 91.666667%;
                flex: 0 0 91.666667%;
                max-width: 91.666667%; }

            .col-lg-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%; }

            .col-lg-20 {
                -ms-flex: 0 0 100%;
                flex: 0 0 20%;
                max-width: 20%; } }
        @media (min-width: 1200px) {
            .col-xl {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%; }

            .col-xl-auto {
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: 100%; }

            .col-xl-1 {
                -ms-flex: 0 0 8.333333%;
                flex: 0 0 8.333333%;
                max-width: 8.333333%; }

            .col-xl-2 {
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%; }

            .col-xl-3 {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%; }

            .col-xl-4 {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%; }

            .col-xl-5 {
                -ms-flex: 0 0 41.666667%;
                flex: 0 0 41.666667%;
                max-width: 41.666667%; }

            .col-xl-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%; }

            .col-xl-7 {
                -ms-flex: 0 0 58.333333%;
                flex: 0 0 58.333333%;
                max-width: 58.333333%; }

            .col-xl-8 {
                -ms-flex: 0 0 66.666667%;
                flex: 0 0 66.666667%;
                max-width: 66.666667%; }

            .col-xl-9 {
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%; }

            .col-xl-10 {
                -ms-flex: 0 0 83.333333%;
                flex: 0 0 83.333333%;
                max-width: 83.333333%; }

            .col-xl-11 {
                -ms-flex: 0 0 91.666667%;
                flex: 0 0 91.666667%;
                max-width: 91.666667%; }

            .col-xl-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%; }

            .col-xl-20 {
                -ms-flex: 0 0 100%;
                flex: 0 0 20%;
                max-width: 20%; } }
        @media (min-width: 1440px) {
            .col-2xl {
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                -ms-flex-positive: 1;
                flex-grow: 1;
                max-width: 100%; }

            .col-2xl-auto {
                -ms-flex: 0 0 auto;
                flex: 0 0 auto;
                width: auto;
                max-width: 100%; }

            .col-2xl-1 {
                -ms-flex: 0 0 8.333333%;
                flex: 0 0 8.333333%;
                max-width: 8.333333%; }

            .col-2xl-2 {
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%; }

            .col-2xl-3 {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%; }

            .col-2xl-4 {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%; }

            .col-2xl-5 {
                -ms-flex: 0 0 41.666667%;
                flex: 0 0 41.666667%;
                max-width: 41.666667%; }

            .col-2xl-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%; }

            .col-2xl-7 {
                -ms-flex: 0 0 58.333333%;
                flex: 0 0 58.333333%;
                max-width: 58.333333%; }

            .col-2xl-8 {
                -ms-flex: 0 0 66.666667%;
                flex: 0 0 66.666667%;
                max-width: 66.666667%; }

            .col-2xl-9 {
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%; }

            .col-2xl-10 {
                -ms-flex: 0 0 83.333333%;
                flex: 0 0 83.333333%;
                max-width: 83.333333%; }

            .col-2xl-11 {
                -ms-flex: 0 0 91.666667%;
                flex: 0 0 91.666667%;
                max-width: 91.666667%; }

            .col-2xl-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%; }

            .col-2xl-20 {
                -ms-flex: 0 0 100%;
                flex: 0 0 20%;
                max-width: 20%; } }
        /*footer{
            custom
        }*/
        /*header{
            custom
        }*/
        /*loading{
            custom
        }*/
        /*banner{
            custom
        }*/
        /*titlePage,
        titleBanner{
            custom
        }*/
        body, html {
            text-transform: capitalize;
            font-family: Arial, Helvetica, sans-serif;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            -o-user-select: none;
            user-select: none; }

        a {
            text-decoration: none; }

        ul {
            margin: 0;
            padding: 0; }
        ul li {
            list-style-type: none; }

        .container-fluid {
            display: -webkit-box;
            display: -moz-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            width: 100%; }
        .container-fluid ._menu {
            text-align: center;
            height: 100vh;
            background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%);
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%;
            color: #4b4b4b;
            box-shadow: 0px 2px 16px 2px rgba(0, 0, 0, 0.75);
            -webkit-box-shadow: 0px 2px 16px 2px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 0px 2px 16px 2px rgba(0, 0, 0, 0.75); }
        .container-fluid ._menu a {
            color: #4b4b4b; }
        .container-fluid ._menu .menu__logo {
            padding: 50px 0;
            text-align: center;
            font-size: 70px; }
        .container-fluid ._menu .menu__list ul li {
            width: 80%;
            margin: auto;
            border-bottom: 1px solid #718093; }
        .container-fluid ._menu .menu__list ul li a {
            font-size: 17px; }
        .container-fluid ._menu .menu__list ul li a article {
            display: -webkit-box;
            display: -moz-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            padding: 10px 5px; }
        .container-fluid ._menu .menu__list ul li a article section {
            width: 60px;
            margin-right: 10px; }
        .container-fluid ._menu .menu__list ul li a:hover {
            text-shadow: -1px -1px 2px rgba(245, 246, 250, 0.6);
            color: #718093; }

        .button {
            display: block;
            position: fixed;
            width: 40px;
            height: 40px;
            top: 0;
            left: 0;
            background: #313539;
            margin: 0 auto;
            padding-top: 12px;
            transition: all 500ms cubic-bezier(1, 0, 0.645, 0.65);
            opacity: 0;
            display: none;
            z-index: 101; }

        .sr {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            border: 0; }

        .menu-bar {
            display: block;
            position: relative;
            background: #fff;
            width: 26px;
            height: 2px;
            border-radius: 1px;
            transition: all 300ms;
            margin: 0 auto; }

        .bar1 {
            top: 0;
            animation: topbar-back 500ms;
            animation-fill-mode: both;
            animation-play-state: initial !important; }

        .bar2 {
            opacity: 1; }

        .bar3 {
            bottom: 0;
            animation: bottombar-back 500ms;
            animation-fill-mode: both;
            animation-play-state: initial !important; }

        .menu-bar + .menu-bar {
            margin-top: 5px; }

        .toggled .bar1 {
            top: 25%;
            animation: topbar-x 500ms;
            animation-fill-mode: both; }

        .toggled .bar2 {
            opacity: 0; }

        .toggled .bar3 {
            bottom: 25%;
            animation: bottombar-x 500ms;
            animation-fill-mode: both; }

        @keyframes topbar-x {
            0% {
                top: 0;
                -webkit-transform: rotate(0deg); }
            45% {
                top: 25%;
                -webkit-transform: rotate(145deg); }
            75% {
                -webkit-transform: rotate(130deg); }
            100% {
                -webkit-transform: rotate(135deg); } }
        @keyframes topbar-back {
            0% {
                top: 25%;
                -webkit-transform: rotate(135deg); }
            45% {
                -webkit-transform: rotate(-10deg); }
            75% {
                -webkit-transform: rotate(5deg); }
            100% {
                top: 0;
                -webkit-transform: rotate(0); } }
        @keyframes bottombar-x {
            0% {
                bottom: 0;
                -webkit-transform: rotate(0deg); }
            45% {
                bottom: 25%;
                -webkit-transform: rotate(-145deg); }
            75% {
                -webkit-transform: rotate(-130deg); }
            100% {
                -webkit-transform: rotate(-135deg); } }
        @keyframes bottombar-back {
            0% {
                bottom: 25%;
                -webkit-transform: rotate(-135deg); }
            45% {
                -webkit-transform: rotate(10deg); }
            75% {
                -webkit-transform: rotate(-5deg); }
            100% {
                bottom: 0;
                -webkit-transform: rotate(0); } }
        .edit_card, .create_card,
        .create-borrow_book,
        .edit_user,
        .create_user {
            position: fixed;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            width: 0;
            height: 0;
            opacity: 0;
            overflow: hidden;
            background: rgba(0, 0, 0, 0.1);
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease; }
        .edit_card.edit_card--show, .create_card.edit_card--show,
        .create-borrow_book.edit_card--show,
        .edit_user.edit_card--show,
        .create_user.edit_card--show {
            width: 100vw;
            height: 100vh;
            opacity: 1; }
        .edit_card > form, .create_card > form,
        .create-borrow_book > form,
        .edit_user > form,
        .create_user > form {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            width: 60%;
            background-image: linear-gradient(-20deg, #e9defa 0%, #fbfcdb 100%);
            padding: 40px 20px;
            border-radius: 10px;
            box-shadow: 0px 2px 16px 2px rgba(0, 0, 0, 0.5);
            -webkit-box-shadow: 0px 2px 16px 2px rgba(0, 0, 0, 0.5);
            -moz-box-shadow: 0px 2px 16px 2px rgba(0, 0, 0, 0.5);
            border: 1px solid #4b4b4b; }
        .edit_card > form > h2, .create_card > form > h2,
        .create-borrow_book > form > h2,
        .edit_user > form > h2,
        .create_user > form > h2 {
            text-align: center;
            margin-bottom: 30px; }

        ._card--form {
            display: -webkit-box;
            display: -moz-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            -webkit-justify-content: space-between;
            -moz-justify-content: space-between;
            -ms-justify-content: space-between;
            -o-justify-content: space-between;
            justify-content: space-between; }

        .input-contact {
            position: relative;
            margin-bottom: 30px;
            flex: 0 0 50%;
            -ms-flex: 0 0 50%;
            max-width: 50%;
            padding: 2px 20px; }

        .input-book {
            position: relative;
            margin-bottom: 30px;
            flex: 0 0 100%;
            -ms-flex: 0 0 100%;
            max-width: 100%;
            padding: 4px 20px; }

        .input-contact label,
        .input-book label {
            width: 100%; }

        .input-contact input,
        .input-book input {
            width: 100%;
            outline: none;
            border: none;
            border-bottom: 1px solid #191818;
            background: none;
            padding-top: 20px; }

        .input-contact section,
        .input-book section {
            position: absolute;
            top: 0;
            left: 20px;
            font-weight: 600; }

        .input-checkbox,
        .input-file {
            flex: 0 0 50%;
            -ms-flex: 0 0 50%;
            max-width: 50%;
            padding: 2px 20px;
            text-align: left;
            margin-bottom: 30px; }
        .input-checkbox section,
        .input-file section {
            font-weight: 600; }

        .input-checkbox label:first-child {
            margin-right: 20px; }

        .button_edit {
            padding-left: 10px;
            font-weight: 600;
            width: 100%;
            display: -webkit-box;
            display: -moz-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-justify-content: space-between;
            -moz-justify-content: space-between;
            -ms-justify-content: space-between;
            -o-justify-content: space-between;
            justify-content: space-between; }
        .button_edit > div {
            flex: 0 0 49%;
            -ms-flex: 0 0 49%;
            max-width: 49%; }
        .button_edit button {
            width: 100%;
            padding: 5px 0;
            border-radius: 5px;
            outline: none;
            background: none;
            box-shadow: 0px 1px 6px 3px rgba(0, 0, 0, 0.24);
            -webkit-box-shadow: 0px 1px 6px 3px rgba(0, 0, 0, 0.24);
            -moz-box-shadow: 0px 1px 6px 3px rgba(0, 0, 0, 0.24); }
        .button_edit button:active {
            box-shadow: 0px 1px 6px 2px rgba(0, 0, 0, 0.07);
            -webkit-box-shadow: 0px 1px 6px 2px rgba(0, 0, 0, 0.07);
            -moz-box-shadow: 0px 1px 6px 2px rgba(0, 0, 0, 0.07); }
        .button_edit .button--submit button {
            border: 1px solid #1289A7;
            background: #1289A7;
            color: #ffffff; }
        .button_edit .button--submit button:hover {
            color: #1289A7;
            background: none; }
        .button_edit .button--close button {
            border: 1px solid #ff3838;
            background: #ff3838;
            color: #ffffff; }
        .button_edit .button--close button:hover {
            color: #ff3838;
            background: none; }

        @media only screen and (max-width: 991px) {
            .container-fluid ._menu {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                z-index: 100;
                flex: 0 0 100%;
                -ms-flex: 0 0 100%;
                max-width: 100%;
                height: 100vh;
                -webkit-transform: translateX(-110%);
                transform: translateX(-110%);
                -webkit-transition: transform 0.5s ease;
                -moz-transition: transform 0.5s ease;
                -ms-transition: transform 0.5s ease;
                -o-transition: transform 0.5s ease;
                transition: transform 0.5s ease; }
            .container-fluid ._menu._menu--show {
                -webkit-transform: translateX(0%);
                transform: translateX(0%); }

            .button {
                opacity: 1;
                display: block; }

            .edit_card > form,
            .create-borrow_book > form,
            .create_card > form,
            .edit_user > form,
            .create_user > form {
                width: 80%; }

            .input-contact,
            .input-checkbox,
            .input-file {
                flex: 0 0 100%;
                -ms-flex: 0 0 100%;
                max-width: 100%;
                padding: 2px 0px; }

            .input-contact section {
                left: 0; } }
        .content {
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%;
            height: 100vh;
            padding-bottom: 40px;
            overflow-y: scroll; }
        .content::-webkit-scrollbar {
            width: 6px;
            background-color: #F5F5F5; }
        .content::-webkit-scrollbar-thumb {
            background-color: #000000; }
        .content .home-page__products {
            display: -webkit-box;
            display: -moz-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            padding-left: 20px; }
        .content .home-page__products .create-book {
            padding: 20px;
            -ms-flex: 0 0 20%;
            flex: 0 0 20%;
            max-width: 20%; }
        .content .home-page__products .create-book > button {
            padding: 2px 10px;
            border-radius: 5px;
            outline: none;
            background: none;
            box-shadow: 0px 1px 6px 3px rgba(0, 0, 0, 0.24);
            -webkit-box-shadow: 0px 1px 6px 3px rgba(0, 0, 0, 0.24);
            -moz-box-shadow: 0px 1px 6px 3px rgba(0, 0, 0, 0.24);
            background: #7158e2;
            color: #ffffff;
            border: 1px solid #7158e2; }
        .content .home-page__products .create-book > button:active {
            box-shadow: 0px 1px 6px 2px rgba(0, 0, 0, 0.07);
            -webkit-box-shadow: 0px 1px 6px 2px rgba(0, 0, 0, 0.07);
            -moz-box-shadow: 0px 1px 6px 2px rgba(0, 0, 0, 0.07); }
        .content .home-page__products .create-book > button:hover {
            background: #ffffff;
            color: #7158e2; }
        .content .home-page__products .home-page__filter {
            padding: 20px;
            -ms-flex: 0 0 80%;
            flex: 0 0 80%;
            max-width: 80%; }
        .content .home-page__products .home-page__filter > section {
            width: 100%;
            display: -webkit-box;
            display: -moz-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            -webkit-justify-content: flex-end;
            -moz-justify-content: flex-end;
            -ms-justify-content: flex-end;
            -o-justify-content: flex-end;
            justify-content: flex-end; }
        .content .home-page__products .home-page__filter > section > button {
            margin-left: 10px;
            padding: 2px 10px;
            border-radius: 5px;
            outline: none;
            background: none;
            box-shadow: 0px 1px 6px 3px rgba(0, 0, 0, 0.24);
            -webkit-box-shadow: 0px 1px 6px 3px rgba(0, 0, 0, 0.24);
            -moz-box-shadow: 0px 1px 6px 3px rgba(0, 0, 0, 0.24);
            background: #4b4b4b;
            color: #ffffff;
            border: 1px solid #4b4b4b; }
        .content .home-page__products .home-page__filter > section > button:active {
            box-shadow: 0px 1px 6px 2px rgba(0, 0, 0, 0.07);
            -webkit-box-shadow: 0px 1px 6px 2px rgba(0, 0, 0, 0.07);
            -moz-box-shadow: 0px 1px 6px 2px rgba(0, 0, 0, 0.07); }
        .content .home-page__products .home-page__filter > section > button:hover {
            background: #ffffff;
            color: #4b4b4b; }
        .content .home-page__products .home-page__filter > section > button.active {
            border: 1px solid #3ae374;
            background: #3ae374;
            color: #ffffff;
            pointer-events: none; }
        .content .home-page__products .result__item {
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
            padding: 0 15px; }
        .content .home-page__products .cardCustom20--content.card {
            width: 100%; }
        .content .home-page__products .cardCustom20--content.card .blog-card {
            flex-wrap: wrap;
            grid-template-columns: auto;
            grid-template-rows: 12rem 1fr; }
        .content .home-page__products .cardCustom20--content.card .post-edit,
        .content .home-page__products .cardCustom20--content.card .post-id,
        .content .home-page__products .cardCustom20--content.card .post-author,
        .content .home-page__products .cardCustom20--content.card .post-category,
        .content .home-page__products .cardCustom20--content.card .post-status {
            width: 100%;
            line-height: 1.8rem;
            margin: 0; }
        .content .home-page__products .cardCustom20--content.card .post__link--edit,
        .content .home-page__products .cardCustom20--content.card .post__link--delete {
            padding: 2px 10px;
            width: 100%;
            text-align: center; }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .content {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
                height: auto;
                padding-bottom: 40px;
                overflow-y: visible; }
            .content .home-page__products {
                padding-left: 0; }
            .content .home-page__products .result__item {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
                padding: 0 15px; } }
        @media only screen and (max-width: 767px) {
            .content {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
                height: auto;
                padding-bottom: 40px;
                overflow-y: visible; }
            .content .home-page__products {
                padding-left: 0; }
            .content .home-page__products .create-book {
                padding: 40px 0 20px 20px;
                -ms-flex: 0 0 35%;
                flex: 0 0 35%;
                max-width: 35%; }
            .content .home-page__products .home-page__filter {
                -ms-flex: 0 0 65%;
                flex: 0 0 65%;
                max-width: 65%;
                padding: 40px 0 20px 0; }
            .content .home-page__products .home-page__filter > section > button {
                margin-bottom: 10px; }
            .content .home-page__products .result__item {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
                padding: 0 15px; } }
        .search--form {
            display: -webkit-box;
            display: -moz-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -moz-align-items: center;
            -ms-align-items: center;
            -o-align-items: center;
            align-items: center;
            -webkit-justify-content: flex-end;
            -moz-justify-content: flex-end;
            -ms-justify-content: flex-end;
            -o-justify-content: flex-end;
            justify-content: flex-end;
            margin: 15px; }
        .search--form > form {
            position: relative; }
        .search--form > form > label:nth-child(1) input {
            padding: 5px 10px;
            outline: none;
            border: none;
            border-radius: 15px;
            width: 35vw;
            border: 1px solid #b2b2b2; }
        .search--form > form > label:nth-child(2) {
            position: absolute;
            top: 0;
            right: 0; }
        .search--form > form > label:nth-child(2) button {
            outline: none;
            background: none;
            border: none;
            padding: 5px;
            font-size: 16px;
            padding: 5px 7px; }

        .cardCustom20--content.card {
            width: 85%;
            margin: auto;
            height: 100%;
            margin-top: 30px; }
        .cardCustom20--content.card .blog-card {
            display: flex;
            flex-direction: row;
            background: #ffffff;
            box-shadow: 0 0.1875rem 1.5rem rgba(0, 0, 0, 0.2);
            border-radius: 0.375rem;
            overflow: hidden;
            /*flex-wrap: wrap;*/ }
        .cardCustom20--content.card .post-image {
            height: 100%;
            transition: opacity 0.3s ease;
            display: block;
            width: 100%;
            object-fit: cover; }
        .cardCustom20--content.card .blog-card {
            display: grid;
            grid-template-columns: 1fr 3fr;
            grid-template-rows: 1fr; }
        .cardCustom20--content.card .article-details {
            padding: 1rem;
            display: -webkit-box;
            display: -moz-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap; }
        .cardCustom20--content.card .post-title {
            transition: color 0.3s ease;
            font-size: 1.125rem;
            line-height: 1.4rem;
            color: #121212;
            font-weight: 700;
            width: 100%; }
        .cardCustom20--content.card .post-edit,
        .cardCustom20--content.card .post-id,
        .cardCustom20--content.card .post-author,
        .cardCustom20--content.card .post-category,
        .cardCustom20--content.card .post-status,
        .cardCustom20--content.card .post-time,
        .cardCustom20--content.card .post-admin {
            width: 50%;
            line-height: 1.4rem;
            margin: 0.5rem 0 0 0; }
        .cardCustom20--content.card .post-edit {
            width: 100%;
            font-size: 0.875rem;
            line-height: 1;
            margin: 0.5rem 0 0 0;
            padding: 1.1rem 0 0 0;
            border-top: 0.0625rem solid #ebebeb;
            display: -webkit-box;
            display: -moz-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-justify-content: flex-end;
            -moz-justify-content: flex-end;
            -ms-justify-content: flex-end;
            -o-justify-content: flex-end;
            justify-content: flex-end; }
        .cardCustom20--content.card .post__link--edit {
            padding: 10px 20px;
            border: 1px solid #3ae374;
            margin-right: 10px;
            border-radius: 10px;
            cursor: pointer;
            background: #3ae374;
            color: #ffffff;
            box-shadow: 0px 1px 6px 3px rgba(0, 0, 0, 0.24);
            -webkit-box-shadow: 0px 1px 6px 3px rgba(0, 0, 0, 0.24);
            -moz-box-shadow: 0px 1px 6px 3px rgba(0, 0, 0, 0.24); }
        .cardCustom20--content.card .post__link--edit:hover {
            background: #ffffff;
            color: #3ae374; }
        .cardCustom20--content.card .post__link--edit:active {
            box-shadow: 0px 1px 6px 2px rgba(0, 0, 0, 0.07);
            -webkit-box-shadow: 0px 1px 6px 2px rgba(0, 0, 0, 0.07);
            -moz-box-shadow: 0px 1px 6px 2px rgba(0, 0, 0, 0.07); }
        .cardCustom20--content.card .post__link--delete {
            padding: 10px 20px;
            border: 1px solid #ff4d4d;
            border-radius: 10px;
            cursor: pointer;
            color: #ffffff;
            background: #ff4d4d;
            box-shadow: 0px 1px 6px 3px rgba(0, 0, 0, 0.24);
            -webkit-box-shadow: 0px 1px 6px 3px rgba(0, 0, 0, 0.24);
            -moz-box-shadow: 0px 1px 6px 3px rgba(0, 0, 0, 0.24); }
        .cardCustom20--content.card .post__link--delete:hover {
            background: #ffffff;
            color: #ff4d4d; }
        .cardCustom20--content.card .post__link--delete:active {
            box-shadow: 0px 1px 6px 2px rgba(0, 0, 0, 0.07);
            -webkit-box-shadow: 0px 1px 6px 2px rgba(0, 0, 0, 0.07);
            -moz-box-shadow: 0px 1px 6px 2px rgba(0, 0, 0, 0.07); }
        @media (max-width: 40rem) {
            .cardCustom20--content.card .blog-card {
                flex-wrap: wrap;
                grid-template-columns: auto;
                grid-template-rows: 12rem 1fr; } }

        @media only screen and (max-width: 767px) {
            .search--form {
                margin: 0 auto;
                margin-top: 40px;
                width: 100%; }
            .search--form > form {
                margin: auto; }
            .search--form > form > label:nth-child(1) input {
                padding: 5px 10px;
                width: 85vw; }

            .cardCustom20--content.card .post-edit,
            .cardCustom20--content.card .post-id,
            .cardCustom20--content.card .post-author,
            .cardCustom20--content.card .post-category,
            .cardCustom20--content.card .post-status,
            .cardCustom20--content.card .post-time,
            .cardCustom20--content.card .post-admin {
                width: 100%;
                margin: 0; } }
        .result_user {
            padding: 30px; }
        .result_user h2 {
            font-weight: 600;
            text-transform: uppercase;
            margin-bottom: 20px;
            border-bottom: 2px solid #b2b2b2;
            display: inline-block; }
        .result_user .cardCustom20--content.card {
            width: 98%; }

        .user--info {
            margin-bottom: 30px; }
        .user--info > ul {
            display: -webkit-box;
            display: -moz-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-justify-content: space-between;
            -moz-justify-content: space-between;
            -ms-justify-content: space-between;
            -o-justify-content: space-between;
            justify-content: space-between;
            flex-wrap: wrap; }
        .user--info > ul > li {
            width: 48%;
            margin-bottom: 20px;
            border-bottom: 1px solid #b2b2b2; }
        .user--info > ul > li > article {
            font-weight: 600;
            margin-bottom: 3px; }
        .user--info > ul > li > section {
            margin-left: 20px; }
        .user--info .btn--borrow_book {
            width: 60%;
            margin: 30px auto; }
        .user--info .btn {
            width: 100%;
            padding: 5px 0;
            border-radius: 5px;
            outline: none;
            box-shadow: 0px 1px 6px 3px rgba(0, 0, 0, 0.24);
            -webkit-box-shadow: 0px 1px 6px 3px rgba(0, 0, 0, 0.24);
            -moz-box-shadow: 0px 1px 6px 3px rgba(0, 0, 0, 0.24);
            border: 1px solid #1289A7;
            background: #1289A7;
            color: #ffffff; }
        .user--info .btn:hover {
            color: #1289A7;
            background: none; }
        .user--info .btn:active {
            box-shadow: 0px 1px 6px 2px rgba(0, 0, 0, 0.07);
            -webkit-box-shadow: 0px 1px 6px 2px rgba(0, 0, 0, 0.07);
            -moz-box-shadow: 0px 1px 6px 2px rgba(0, 0, 0, 0.07); }

        .bts_books {
            padding: 10px 20px;
            border: 1px solid #ff4d4d;
            border-radius: 10px;
            cursor: pointer;
            color: #ffffff;
            background: #ff4d4d;
            box-shadow: 0px 1px 6px 3px rgba(0, 0, 0, 0.24);
            -webkit-box-shadow: 0px 1px 6px 3px rgba(0, 0, 0, 0.24);
            -moz-box-shadow: 0px 1px 6px 3px rgba(0, 0, 0, 0.24); }
        .bts_books:hover {
            background: #ffffff;
            color: #ff4d4d; }
        .bts_books:active {
            box-shadow: 0px 1px 6px 2px rgba(0, 0, 0, 0.07);
            -webkit-box-shadow: 0px 1px 6px 2px rgba(0, 0, 0, 0.07);
            -moz-box-shadow: 0px 1px 6px 2px rgba(0, 0, 0, 0.07); }

        @media only screen and (max-width: 767px) {
            .user--info {
                margin-bottom: 15px; }
            .user--info > ul > li {
                width: 90%;
                margin-bottom: 10px; }
            .user--info .btn--borrow_book {
                width: 90%;
                margin: 10px auto; } }
        .list_user {
            padding: 40px 20px; }
        .list_user > h2 {
            text-align: center;
            margin-bottom: 30px; }
        .list_user > article {
            display: -webkit-box;
            display: -moz-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-justify-content: space-between;
            -moz-justify-content: space-between;
            -ms-justify-content: space-between;
            -o-justify-content: space-between;
            justify-content: space-between;
            flex-wrap: wrap; }

        ._user--item {
            -ms-flex: 0 0 31%;
            flex: 0 0 31%;
            max-width: 31%;
            background-image: linear-gradient(to top, #e6e9f0 0%, #eef1f5 100%);
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0px 2px 16px 2px rgba(0, 0, 0, 0.5);
            -webkit-box-shadow: 0px 2px 16px 2px rgba(0, 0, 0, 0.5);
            -moz-box-shadow: 0px 2px 16px 2px rgba(0, 0, 0, 0.5); }
        ._user--item > ul {
            margin-left: 20px; }

        ._user--name {
            font-weight: 600;
            font-size: 20px; }

        ._user--borrow_book {
            text-decoration: underline;
            margin-left: 20px; }

        .btn-edit_user {
            text-align: right; }
        .btn-edit_user > button {
            padding: 2px 20px;
            margin-top: 5px;
            border-radius: 5px;
            outline: none;
            box-shadow: 0px 1px 6px 3px rgba(0, 0, 0, 0.24);
            -webkit-box-shadow: 0px 1px 6px 3px rgba(0, 0, 0, 0.24);
            -moz-box-shadow: 0px 1px 6px 3px rgba(0, 0, 0, 0.24);
            background: #7158e2;
            color: #ffffff;
            border: 1px solid #7158e2; }
        .btn-edit_user > button:active {
            box-shadow: 0px 1px 6px 2px rgba(0, 0, 0, 0.07);
            -webkit-box-shadow: 0px 1px 6px 2px rgba(0, 0, 0, 0.07);
            -moz-box-shadow: 0px 1px 6px 2px rgba(0, 0, 0, 0.07); }
        .btn-edit_user > button:hover {
            background: #ffffff;
            color: #7158e2; }

        .create-user > button {
            padding: 2px 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            outline: none;
            box-shadow: 0px 1px 6px 3px rgba(0, 0, 0, 0.24);
            -webkit-box-shadow: 0px 1px 6px 3px rgba(0, 0, 0, 0.24);
            -moz-box-shadow: 0px 1px 6px 3px rgba(0, 0, 0, 0.24);
            background: #1289A7;
            color: #ffffff;
            border: 1px solid #1289A7; }
        .create-user > button:active {
            box-shadow: 0px 1px 6px 2px rgba(0, 0, 0, 0.07);
            -webkit-box-shadow: 0px 1px 6px 2px rgba(0, 0, 0, 0.07);
            -moz-box-shadow: 0px 1px 6px 2px rgba(0, 0, 0, 0.07); }
        .create-user > button:hover {
            background: #ffffff;
            color: #1289A7; }

        @media only screen and (min-width: 768px) and (max-width: 992px) {
            ._user--item {
                -ms-flex: 0 0 48%;
                flex: 0 0 48%;
                max-width: 48%;
                margin-bottom: 20px; }
            ._user--item > ul {
                margin-left: 20px; } }
        @media only screen and (max-width: 767px) {
            ._user--item {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
                margin-bottom: 20px; } }
        .btn {
            display: inline-block;
            *display: inline;
            *zoom: 1;
            padding: 4px 10px 4px;
            margin-bottom: 0;
            font-size: 13px;
            line-height: 18px;
            color: #333333;
            text-align: center;
            text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
            vertical-align: middle;
            background-color: #f5f5f5;
            background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6);
            background-image: -ms-linear-gradient(top, #ffffff, #e6e6e6);
            background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6));
            background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6);
            background-image: -o-linear-gradient(top, #ffffff, #e6e6e6);
            background-image: linear-gradient(top, #ffffff, #e6e6e6);
            background-repeat: repeat-x;
            filter: progid:dximagetransform.microsoft.gradient(startColorstr=#ffffff, endColorstr=#e6e6e6, GradientType=0);
            border-color: #e6e6e6 #e6e6e6 #e6e6e6;
            border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
            border: 1px solid #e6e6e6;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
            -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
            cursor: pointer;
            *margin-left: .3em; }

        .btn:hover, .btn:active, .btn.active, .btn.disabled, .btn[disabled] {
            background-color: #e6e6e6; }

        .btn-large {
            padding: 9px 14px;
            font-size: 15px;
            line-height: normal;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px; }

        .btn:hover {
            color: #333333;
            text-decoration: none;
            background-color: #e6e6e6;
            background-position: 0 -15px;
            -webkit-transition: background-position 0.1s linear;
            -moz-transition: background-position 0.1s linear;
            -ms-transition: background-position 0.1s linear;
            -o-transition: background-position 0.1s linear;
            transition: background-position 0.1s linear; }

        .btn-primary, .btn-primary:hover {
            text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
            color: #ffffff; }

        .btn-primary.active {
            color: rgba(255, 255, 255, 0.75); }

        .btn-primary {
            background-color: #4a77d4;
            background-image: -moz-linear-gradient(top, #6eb6de, #4a77d4);
            background-image: -ms-linear-gradient(top, #6eb6de, #4a77d4);
            background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#6eb6de), to(#4a77d4));
            background-image: -webkit-linear-gradient(top, #6eb6de, #4a77d4);
            background-image: -o-linear-gradient(top, #6eb6de, #4a77d4);
            background-image: linear-gradient(top, #6eb6de, #4a77d4);
            background-repeat: repeat-x;
            filter: progid:dximagetransform.microsoft.gradient(startColorstr=#6eb6de, endColorstr=#4a77d4, GradientType=0);
            border: 1px solid #3762bc;
            text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.4);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.5); }

        .btn-primary:hover, .btn-primary:active, .btn-primary.active, .btn-primary.disabled, .btn-primary[disabled] {
            filter: none;
            background-color: #4a77d4; }

        .btn-block {
            width: 100%;
            display: block; }

        .login_form {
            position: relative;
            width: 100%;
            height: 100vh;
            background-image: linear-gradient(-20deg, #e9defa 0%, #fbfcdb 100%); }

        .login {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            width: 30%; }

        .login h1 {
            margin-bottom: 20px;
            color: #1e272e;
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            letter-spacing: 1px;
            text-align: center; }

        .login_password,
        .login_name {
            width: 100%;
            margin-bottom: 10px;
            border: none;
            outline: none;
            padding: 10px;
            font-size: 13px;
            color: #ffffff;
            border: 1px solid rgba(0, 0, 0, 0.3);
            border-radius: 4px; }

        input:focus {
            box-shadow: inset 0 -5px 45px rgba(100, 100, 100, 0.4), 0 1px 1px rgba(255, 255, 255, 0.2); }

        @media only screen and (max-width: 767px) {
            .login {
                position: absolute;
                top: 50%;
                left: 50%;
                -webkit-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
                width: 80%; } }

        /*# sourceMappingURL=main.css.map */

    </style>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body>
<div class="container-fluid">
    <!-- PHẦN MENU -->
    <nav>
        <a id="menu-toggle" href="#" class="button">
            <span class="sr">Toggle Navigation</span>
            <span class="menu-bar bar1"></span>
            <span class="menu-bar bar2"></span>
            <span class="menu-bar bar3"></span>
        </a>
    </nav>
    <div class="_menu">
        <div class="menu__logo">
            <i class="fas fa-home"></i>
        </div>
        <section class="menu__list">
            <ul>
                <li>
                    <a href="{{url('/')}}">
                        <article>
                            <section>
                                <i class="fas fa-book"></i>
                            </section>
                            <span>
                                    Quản lý
                                </span>
                        </article>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents">
                        <i class="fas fa-book-open" style="padding-right: 25px"></i>
                        <span class="nav-link-text" style="padding-right: 135px">Thể loại </span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseComponents">
                        <li>
                            <a href="{{url('/theloai/truyentranh')}}">Truyện tranh</a>
                        </li>
                        <li>
                            <a href="{{url('/theloai/khoahoc')}}">khoa học </a>
                        </li>
                        <li>
                            <a href="{{url('/theloai/daoly')}}"> Đạo lý </a>
                        </li>
                        <li>
                            <a href="{{url('/theloai/kinhdoanh')}}"> Kinh doanh </a>
                        </li>
                        <li>
                            <a href="{{url('/theloai/truyen18')}}"> Truyện 18+</a>
                        </li>
                        <li>
                            <a href="{{url('/theloai/truyenthieunhi')}}"> Truyện Thiếu Nhi </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{url('/muon-tra')}}">
                        <article>
                            <section>
                                <i class="fas fa-handshake-slash"></i>
                            </section>
                            <span>
                                    Mượn trả
                                </span>
                        </article>
                    </a>
                </li>
                <li>
                    <a href="{{url('/doc-gia')}}">
                        <article>
                            <section>
                                <i class="fas fa-user-check"></i>
                            </section>
                            <span>
                                    Độc giả
                                </span>
                        </article>
                    </a>
                </li>
            </ul>
        </section>
    </div>
    <!-- ***************************************************************************************************************** -->
    <!-- PHẦN NỘI DUNG -->
    <div class="content">
        <div class="search--form">
            <form>
                <label>
                    <input type="text" placeholder="Nhập mã số...">
                </label>
                <label>
                    <button>
                        <i class="fas fa-search"></i>
                    </button>
                </label>
            </form>
        </div>
        <div class="result_user">
            <section class="user--info">
                <h2>Thông tin độc giả</h2>
                <form action="{{url('/add-muon')}}" method="post">
                    @csrf
                    <div class="_card--form">
                        <div class="input-contact">
                            <label><b>Tên Độc Giả :</b>
                                <input type="text" name="tendocgia" placeholder="Nguyễn Văn A">
                            </label>
                        </div>
                        <div class="input-contact">
                            <label><b>Mã Độc Giả :</b>
                                <input type="text" name="madocgia" placeholder="DG1">
                            </label>
                        </div>
                        <div class="input-contact">
                            <label><b>Lớp :</b>
                                <input type="text" name="lop" placeholder="IT18A1.11">
                            </label>
                        </div>
                        <div class="input-contact">
                            <label><b>Số Điện Thoại :</b>
                                <input type="text" name="sodienthoai" placeholder="013456789">
                            </label>
                        </div>
                        <div class="input-contact">
                            <label><b>Tên Sách :</b>
                                <input type="text" name="tensach" placeholder="Toán">
                            </label>
                        </div>
                        <div class="input-contact">
                            <label><b>Mã Sách :</b>
                                <input type="text" name="masach" placeholder="T01">
                            </label>
                        </div>
                        <div class="input-contact">
                            <label><b>Số Phiếu :</b>
                                <input type="text" name="sophieu" placeholder="- 01">
                            </label>
                        </div>
                        <div class="input-contact">
                            <label><b>Thủ Thư :</b>
                                <input type="text" name="thuthu" placeholder="Nguyễn Văn B">
                            </label>
                        </div>
                    </div>
                        <button type="submit" class="btn">
                            Mượn sách
                        </button>
                </form>
            </section>
            <section class="user--borrow_books">
                <h2>Sách đã mượn</h2>
                <table class="table table-bordered" >
                    <thead class="thead-dark" >
                    <tr >
                        <th scope="col">STT</th>
                        <th scope="col">Tên Độc Giả</th>
                        <th scope="col">Mã Độc Giả</th>
                        <th scope="col">Lớp :</th>
                        <th scope="col">Số Điện Thoại</th>
                        <th scope="col">Tên Sách</th>
                        <th scope="col">Mã Sách</th>
                        <th scope="col">Số Phiếu</th>
                        <th scope="col">Thủ Thư</th>
                        <th scope="col">Trả Sách</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($Tbl_muon as $mt)
                    <tr>
                        <th>{{$mt -> id}}</th>
                        <td>{{$mt -> tendocgia}}</td>
                        <td>{{$mt -> madocgia}}</td>
                        <td>{{$mt -> lop}}</td>
                        <td>{{$mt -> sodienthoai}}</td>
                        <td>{{$mt -> tensach}}</td>
                        <td>{{$mt -> masach}}</td>
                        <td>{{$mt -> sophieu}}</td>
                        <td>{{$mt -> thuthu}}</td>
                        <td>
                            <form action="/muon-tra/delete/{{$mt -> id}}" method="post" onsubmit="return ConfirmDelete( this )">
                                @method('DELETE')
                                @csrf
                                <section class="btn-edit_user">
                                    <button type="submit">
                                        Trả Sách
                                    </button>
                                </section>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </section>
        </div>
    </div>

    <!-- ********************************************************************************************************************* -->
    <!-- PHẦN TRẢ SÁCH -->




    <!-- ********************************************************************************************************************* -->
    <!-- PHẦN MƯỢN SÁCH -->
    <div class="create-borrow_book">
        <form action="">
            <h2>Mượn sách</h2>
            <div class="_card--form">
                <div class="input-book">
                    <label>
                        <input type="text" name="name" placeholder="Nhập tên sách hoặc mã sách...">
                        <section>
                            Tên sách hoặc mã sách
                        </section>
                    </label>
                </div>

                <div class="button_edit">
                    <div class="button--close">
                        <button type="button" class="close-edit-card">Thoát</button>
                    </div>
                    <div class="button--submit">
                        <button type="submit">Xác nhận</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    document.addEventListener("DOMContentLoaded",function(){
        var menu = document.getElementById('menu-toggle'),
            toggled = false;

        menu.addEventListener( 'click', function() {
            if ( !toggled ) {
                this.className += " toggled";
                toggled = true;
                document.querySelector("._menu").classList.add("_menu--show");
            } else {
                this.className = this.className.replace(/\b\stoggled\b/, "");
                toggled = false;
                document.querySelector("._menu").classList.remove("_menu--show");
            }
        }, false );

        const editItems = document.querySelectorAll(".post__link--edit");

        editItems.forEach(function(item) {
            item.addEventListener('click', () => {
                document.querySelector(".edit_card").classList.add("edit_card--show");
            });
        });

        const closeEditCard = document.querySelector(".edit_card .button--close > button");
        if (closeEditCard != null) {
            closeEditCard.addEventListener('click', () => {
                document.querySelector(".edit_card").classList.remove("edit_card--show");
            });
        }
        const createBookCard = document.querySelector(".create-book > button");
        if (createBookCard != null) {
            createBookCard.addEventListener('click', () => {
                document.querySelector(".create_card").classList.add("edit_card--show");
            });
        }
        const closeCreateBookCard = document.querySelector(".create_card .button--close > button");
        if (closeCreateBookCard != null) {
            closeCreateBookCard.addEventListener('click', () => {
                document.querySelector(".create_card").classList.remove("edit_card--show");
            });
        }

        const borrowBook = document.querySelector(".btn--borrow_book > button");
        if (borrowBook != null) {
            borrowBook.addEventListener('click', () => {
                document.querySelector(".create-borrow_book").classList.add("edit_card--show");
            });
        }

        const closeBorrowBook = document.querySelector(".create-borrow_book .button--close > button");
        if (closeBorrowBook != null) {
            closeBorrowBook.addEventListener('click', () => {
                document.querySelector(".create-borrow_book").classList.remove("edit_card--show");
            });
        }


        const createUser = document.querySelector(".create-user > button");
        if (createUser != null) {
            createUser.addEventListener('click', () => {
                document.querySelector(".create_user").classList.add("edit_card--show");
            });
        }

        const closeCreateUser = document.querySelector(".create_user .button--close > button");
        if (closeCreateUser != null) {
            closeCreateUser.addEventListener('click', () => {
                document.querySelector(".create_user").classList.remove("edit_card--show");
            });
        }



        const editUser = document.querySelectorAll(".btn-edit_user > button");

        editUser.forEach(function(item) {
            item.addEventListener('click', () => {
                document.querySelector(".edit_user").classList.add("edit_card--show");
            });
        });

        const closeEditUser = document.querySelector(".edit_user .button--close > button");
        if (closeEditUser != null) {
            closeEditUser.addEventListener('click', () => {
                document.querySelector(".edit_user").classList.remove("edit_card--show");
            });
        }

    },false);
</script>
<script src="assets/javascripts/main.js"></script>
</body>

</html>
