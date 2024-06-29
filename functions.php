<?php

//Adding custom text to the footer of your WordPress dashboard can be done by adding a small piece of code to your theme's functions.php file. Here's how you can do it:

function custom_admin_footer_text() {
    echo '<style>
            .custom-footer-text {
                font-family: Arial, sans-serif;
                font-size: 14px;
                color: #0073aa;
                background: #f1f1f1;
                padding: 10px;
                border-top: 1px solid #e5e5e5;
                margin-top: 20px;
                text-align: center;
            }
            .custom-footer-text a {
                color: #0073aa;
                text-decoration: none;
            }
            .custom-footer-text a:hover {
                text-decoration: underline;
            }
            marquee {
                display: block;
                width: 100%;
                white-space: nowrap;
            }
          </style>
          <div class="custom-footer-text">
              <marquee behavior="scroll" direction="left">Your custom text here. <a href="https://example.com" target="_blank">Learn more</a></marquee>
          </div>';
}
add_filter('admin_footer_text', 'custom_admin_footer_text');





