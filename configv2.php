<?php
date_default_timezone_set("Asia/Bangkok");
error_reporting(0);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$mail = new PHPMailer(true);
$host = explode("|", $argv[1])[0];
$port  = explode("|", $argv[1])[1];
$user = explode("|", $argv[1])[2];
$password = explode("|", $argv[1])[3];
$mailfrom = explode("|", $argv[1])[4];

$letter = <<<EOD
<table class="email-body-container" style="border-collapse: collapse; border-spacing: 0; border: none;" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
      <tbody><tr>
        <td>
          <div class="email-body" style="
                            max-width: 620px;
                            min-width: 320px;
                            margin: 0 auto;">
            <table style="border-spacing: 0;" width="100%">
              <tbody><tr>
                <td class="text" style="
            border-collapse: collapse;
            padding: 20px 15px 20px 15px;
            font-family: Helvetica Neue, Arial, sans-serif;">
                  <table class="padded-gutter" style="border-collapse: collapse; border-spacing: 0; border: none;" width="100%">
                    <tbody><tr>
                      <td style="padding: 0px 15px;">
                        <table style="border-collapse: collapse; border-spacing: 0; border: none;">
                          <tbody><tr>
                            <td>
                              <div class="responsive-logo">
                                <div class="show-desktop-only">
                                  <img src="https://1.bp.blogspot.com/-xqI5FQe9oR0/YNlOhW4fVAI/AAAAAAAACeA/OjMf4CaHbVQa50FEoS8ostt6ZqegQOndwCLcBGAsYHQ/s1200/%25E2%2580%2594Pngtree%25E2%2580%2594email%2Bicon_5065641.png" style="display: block;" width="55" height="auto">
                                </div>
                                <div class="show-mobile-only" style="max-height: 0px; font-size: 0; overflow: hidden; display: none; mso-hide: all;">
                                  <img src="https://1.bp.blogspot.com/-xqI5FQe9oR0/YNlOhW4fVAI/AAAAAAAACeA/OjMf4CaHbVQa50FEoS8ostt6ZqegQOndwCLcBGAsYHQ/s1200/%25E2%2580%2594Pngtree%25E2%2580%2594email%2Bicon_5065641.png" style="display: block;" width="34" height="auto">
                                </div>
                              </div>
                            </td>
                          </tr>
                        </tbody></table>
                      </td>
                    </tr>
                  </tbody></table>
                  <table cellspacing="0" cellpadding="0" border="0">
                    <tbody><tr>
                      <td height="18"></td>
                    </tr>
                  </tbody></table>
                  <table class="padded-gutter" style="border-collapse: collapse; border-spacing: 0; border: none;" width="100%">
                    <tbody><tr>
                      <td style="padding: 0px 15px;">
                        
                      </td>
                    </tr>
                  </tbody></table>
                  <table class="padded-gutter" style="border-collapse: collapse; border-spacing: 0; border: none;" width="100%">
                    <tbody><tr>
                      <td style="padding: 0px 15px;">
                        <div class="paragraph-container" style="text-align: left; color: #333333; font-family: Helvetica Neue, Arial, sans-serif;; font-size: 16px; line-height: 24px;">
                          <p>This mail was directly sent by ###HOST###.!<br>
                          <br>
                            SMTP Host: ###HOST###<br>
                            SMTP Port: ###PORT###<br>
                            Authentication name: ###USERNAME###<br>
                            Authentication password: ?<br>
                            Email from: ###USERNAME###
                        </p>
                        </div>
                      </td>
                    </tr>
                  </tbody></table>
                  <table cellspacing="0" cellpadding="0" border="0">
                    <tbody><tr>
                      <td height="6"></td>
                    </tr>
                  </tbody></table>
                  <div class="show-desktop-only">
                    
                  </div>
                  <div class="show-mobile-only" style="max-height: 0px; font-size: 0; overflow: hidden; display: none; mso-hide: all;">
                    <table style="border-collapse: collapse; border-spacing: 0; border: none; border-style: hidden;" align="center">
                      <tbody><tr>
                        <td style="border: 20px solid #ffffff; padding: 0; vertical-align: top;">
                          <a class="passport-link" href="https://www.yelp.com/biz/bulgogi-greenville?ytl_=2b864674d16b6cf266450db029a563ea&amp;utm_medium=email&amp;utm_source=hot_new_businesses_email&amp;utm_campaign=Jul-27-2020" style="color: #333333; text-decoration: none;">
                            <div style="padding: 0; margin: 0;">
                              <table class="passport-mobile" style="
        align: center;" width="375px">
                                <tbody><tr style="padding: 0; margin: 0;" valign="top">
                                  <td class="passport-photo-wrapper" style="padding: 0; margin: 0;" width="125px">
                                    <table style="
                    border-collapse: collapse; border-spacing: 0; border: none;
                    padding: 0; margin: 0;
                    border-radius: 5px;
                    overflow: hidden;" background="https://s3-media2.fl.yelpcdn.com/bphoto/T9yHa9LsDuizsUg47FQRSQ/l.jpg">
                                      <tbody><tr>
                                        <td class="passport-photo" style="
                            padding: 0; margin: 0;
                            background-image: url(https://s3-media2.fl.yelpcdn.com/bphoto/T9yHa9LsDuizsUg47FQRSQ/l.jpg);
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;" width="125px" height="125px">
                                          <!--[if gte mso 9]>
                                            <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width: 125px; height: 125px;">
                                              <v:fill type="frame" aspect="atleast" src="https://s3-media2.fl.yelpcdn.com/bphoto/T9yHa9LsDuizsUg47FQRSQ/l.jpg"
                                              /></v:rect>
                                          <![endif]-->
                                        </td>
                                      </tr>
                                    </tbody></table>
                                  </td>
                                  <td class="passport-context-wrapper" style="padding: 6px 0px 6px 10px; margin: 0; min-height: 113px;" width="240px">
                                    <table class="passport-context" style="
                    border-collapse: collapse; border-spacing: 0; border: none;
                    padding: 0; margin: 0;">
                                      <tbody><tr style="padding: 0; margin: 0;">
                                        <td style="padding: 0; margin: 0;" valign="middle">
                                          <table class="business-details" style="
                    border-collapse: collapse; border-spacing: 0; border: none;
                    padding: 0; margin: 0;
                    line-height: 18px;
                    text-align: left;
                    color: #333333;
                    font-size: 14px;
                    font-family: Helvetica Neue, Arial, sans-serif;" width="100%" height="100%" cellspacing="0" cellpadding="0" border="0">
                                            <tbody><tr>
                                              <td> <strong class="business-name" style="
        font-size: 16px;
        line-height: 22px;
        text-decoration: none;
        color: #333333;">
        Bulgogi
    </strong>

                                              </td>
                                            </tr>
                                            <tr>
                                              <td style="padding-bottom: 3px;">
                                                <img class="rating-image" alt="4_half star rating" src="https://s3-media4.fl.yelpcdn.com/assets/srv0/yelp_design_web/ce17e0335d6a/assets/img/stars/large_4_half.png" style="vertical-align: middle; margin-top: -1px; outline: none;" width="102px" height="18px" border="0"> <span class="review-count" style="line-height: 24px; padding-left: 3px;">
        <!--[if gte mso 9]>
            &nbsp;&nbsp;
        <![endif]-->
        69 reviews
    </span>

                                              </td>
                                            </tr>
                                            <tr>
                                              <td> <span class="price-range">
            $$
        </span>
&nbsp;•&nbsp; <span class="categories-list">
            Korean
        </span>

                                              </td>
                                            </tr>
                                            <tr>
                                              <td> <span class="business-location">
                                    Greenville, SC
                                </span>

                                              </td>
                                            </tr>
                                          </tbody></table>
                                        </td>
                                      </tr>
                                    </tbody></table>
                                  </td>
                                </tr>
                              </tbody></table>
                            </div>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td style="border: 20px solid #ffffff; padding: 0; vertical-align: top;">
                          <a class="passport-link" href="https://www.yelp.com/biz/molly-and-myles-ice-cream-greenville-2?ytl_=2b864674d16b6cf266450db029a563ea&amp;utm_medium=email&amp;utm_source=hot_new_businesses_email&amp;utm_campaign=Jul-27-2020" style="color: #333333; text-decoration: none;">
                            <div style="padding: 0; margin: 0;">
                              <table class="passport-mobile" style="
        align: center;" width="375px">
                                <tbody><tr style="padding: 0; margin: 0;" valign="top">
                                  <td class="passport-photo-wrapper" style="padding: 0; margin: 0;" width="125px">
                                    <table style="
                    border-collapse: collapse; border-spacing: 0; border: none;
                    padding: 0; margin: 0;
                    border-radius: 5px;
                    overflow: hidden;" background="https://s3-media2.fl.yelpcdn.com/bphoto/jioeMyptoqkd_yA2LJFcYA/l.jpg">
                                      <tbody><tr>
                                        <td class="passport-photo" style="
                            padding: 0; margin: 0;
                            background-image: url(https://s3-media2.fl.yelpcdn.com/bphoto/jioeMyptoqkd_yA2LJFcYA/l.jpg);
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;" width="125px" height="125px">
                                          <!--[if gte mso 9]>
                                            <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width: 125px; height: 125px;">
                                              <v:fill type="frame" aspect="atleast" src="https://s3-media2.fl.yelpcdn.com/bphoto/jioeMyptoqkd_yA2LJFcYA/l.jpg"
                                              /></v:rect>
                                          <![endif]-->
                                        </td>
                                      </tr>
                                    </tbody></table>
                                  </td>
                                  <td class="passport-context-wrapper" style="padding: 6px 0px 6px 10px; margin: 0; min-height: 113px;" width="240px">
                                    <table class="passport-context" style="
                    border-collapse: collapse; border-spacing: 0; border: none;
                    padding: 0; margin: 0;">
                                      <tbody><tr style="padding: 0; margin: 0;">
                                        <td style="padding: 0; margin: 0;" valign="middle">
                                          <table class="business-details" style="
                    border-collapse: collapse; border-spacing: 0; border: none;
                    padding: 0; margin: 0;
                    line-height: 18px;
                    text-align: left;
                    color: #333333;
                    font-size: 14px;
                    font-family: Helvetica Neue, Arial, sans-serif;" width="100%" height="100%" cellspacing="0" cellpadding="0" border="0">
                                            <tbody><tr>
                                              <td> <strong class="business-name" style="
        font-size: 16px;
        line-height: 22px;
        text-decoration: none;
        color: #333333;">
        Molly and Myles Ice Cream
    </strong>

                                              </td>
                                            </tr>
                                            <tr>
                                              <td style="padding-bottom: 3px;">
                                                <img class="rating-image" alt="5 star rating" src="https://s3-media2.fl.yelpcdn.com/assets/srv0/yelp_design_web/e1de8471c251/assets/img/stars/large_5.png" style="vertical-align: middle; margin-top: -1px; outline: none;" width="102px" height="18px" border="0"> <span class="review-count" style="line-height: 24px; padding-left: 3px;">
        <!--[if gte mso 9]>
            &nbsp;&nbsp;
        <![endif]-->
        46 reviews
    </span>

                                              </td>
                                            </tr>
                                            <tr>
                                              <td> <span class="price-range">
            $$
        </span>
&nbsp;•&nbsp; <span class="categories-list">
            Ice Cream &amp; Frozen Yogurt
        </span>

                                              </td>
                                            </tr>
                                            <tr>
                                              <td> <span class="business-location">
                                    Greenville, SC
                                </span>

                                              </td>
                                            </tr>
                                          </tbody></table>
                                        </td>
                                      </tr>
                                    </tbody></table>
                                  </td>
                                </tr>
                              </tbody></table>
                            </div>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td style="border: 20px solid #ffffff; padding: 0; vertical-align: top;">
                          <a class="passport-link" href="https://www.yelp.com/biz/sabor-latin-street-grill-greenville-greenville?ytl_=2b864674d16b6cf266450db029a563ea&amp;utm_medium=email&amp;utm_source=hot_new_businesses_email&amp;utm_campaign=Jul-27-2020" style="color: #333333; text-decoration: none;">
                            <div style="padding: 0; margin: 0;">
                              <table class="passport-mobile" style="
        align: center;" width="375px">
                                <tbody><tr style="padding: 0; margin: 0;" valign="top">
                                  <td class="passport-photo-wrapper" style="padding: 0; margin: 0;" width="125px">
                                    <table style="
                    border-collapse: collapse; border-spacing: 0; border: none;
                    padding: 0; margin: 0;
                    border-radius: 5px;
                    overflow: hidden;" background="https://s3-media4.fl.yelpcdn.com/bphoto/NTNYtPMUmcrXTeBU2qW8tw/l.jpg">
                                      <tbody><tr>
                                        <td class="passport-photo" style="
                            padding: 0; margin: 0;
                            background-image: url(https://s3-media4.fl.yelpcdn.com/bphoto/NTNYtPMUmcrXTeBU2qW8tw/l.jpg);
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;" width="125px" height="125px">
                                          <!--[if gte mso 9]>
                                            <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width: 125px; height: 125px;">
                                              <v:fill type="frame" aspect="atleast" src="https://s3-media4.fl.yelpcdn.com/bphoto/NTNYtPMUmcrXTeBU2qW8tw/l.jpg"
                                              /></v:rect>
                                          <![endif]-->
                                        </td>
                                      </tr>
                                    </tbody></table>
                                  </td>
                                  <td class="passport-context-wrapper" style="padding: 6px 0px 6px 10px; margin: 0; min-height: 113px;" width="240px">
                                    <table class="passport-context" style="
                    border-collapse: collapse; border-spacing: 0; border: none;
                    padding: 0; margin: 0;">
                                      <tbody><tr style="padding: 0; margin: 0;">
                                        <td style="padding: 0; margin: 0;" valign="middle">
                                          <table class="business-details" style="
                    border-collapse: collapse; border-spacing: 0; border: none;
                    padding: 0; margin: 0;
                    line-height: 18px;
                    text-align: left;
                    color: #333333;
                    font-size: 14px;
                    font-family: Helvetica Neue, Arial, sans-serif;" width="100%" height="100%" cellspacing="0" cellpadding="0" border="0">
                                            <tbody><tr>
                                              <td> <strong class="business-name" style="
        font-size: 16px;
        line-height: 22px;
        text-decoration: none;
        color: #333333;">
        Sabor Latin Street Grill - Greenville
    </strong>

                                              </td>
                                            </tr>
                                            <tr>
                                              <td style="padding-bottom: 3px;">
                                                <img class="rating-image" alt="4 star rating" src="https://s3-media2.fl.yelpcdn.com/assets/srv0/yelp_design_web/aad759bfa0b7/assets/img/stars/large_4.png" style="vertical-align: middle; margin-top: -1px; outline: none;" width="102px" height="18px" border="0"> <span class="review-count" style="line-height: 24px; padding-left: 3px;">
        <!--[if gte mso 9]>
            &nbsp;&nbsp;
        <![endif]-->
        35 reviews
    </span>

                                              </td>
                                            </tr>
                                            <tr>
                                              <td> <span class="categories-list">
            Latin American
        </span>

                                              </td>
                                            </tr>
                                            <tr>
                                              <td> <span class="business-location">
                                    Greenville, SC
                                </span>

                                              </td>
                                            </tr>
                                          </tbody></table>
                                        </td>
                                      </tr>
                                    </tbody></table>
                                  </td>
                                </tr>
                              </tbody></table>
                            </div>
                          </a>
                        </td>
                      </tr>
                      <tr>
                        <td style="border: 20px solid #ffffff; padding: 0; vertical-align: top;">
                          <a class="passport-link" href="https://www.yelp.com/biz/persis-indian-grill-greenville-2?ytl_=2b864674d16b6cf266450db029a563ea&amp;utm_medium=email&amp;utm_source=hot_new_businesses_email&amp;utm_campaign=Jul-27-2020" style="color: #333333; text-decoration: none;">
                            <div style="padding: 0; margin: 0;">
                              <table class="passport-mobile" style="
        align: center;" width="375px">
                                <tbody><tr style="padding: 0; margin: 0;" valign="top">
                                  <td class="passport-photo-wrapper" style="padding: 0; margin: 0;" width="125px">
                                    <table style="
                    border-collapse: collapse; border-spacing: 0; border: none;
                    padding: 0; margin: 0;
                    border-radius: 5px;
                    overflow: hidden;" background="https://s3-media2.fl.yelpcdn.com/bphoto/1wXnuJpMJzN6fcfrsJq1Yg/l.jpg">
                                      <tbody><tr>
                                        <td class="passport-photo" style="
                            padding: 0; margin: 0;
                            background-image: url(https://s3-media2.fl.yelpcdn.com/bphoto/1wXnuJpMJzN6fcfrsJq1Yg/l.jpg);
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;" width="125px" height="125px">
                                          <!--[if gte mso 9]>
                                            <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width: 125px; height: 125px;">
                                              <v:fill type="frame" aspect="atleast" src="https://s3-media2.fl.yelpcdn.com/bphoto/1wXnuJpMJzN6fcfrsJq1Yg/l.jpg"
                                              /></v:rect>
                                          <![endif]-->
                                        </td>
                                      </tr>
                                    </tbody></table>
                                  </td>
                                  <td class="passport-context-wrapper" style="padding: 6px 0px 6px 10px; margin: 0; min-height: 113px;" width="240px">
                                    <table class="passport-context" style="
                    border-collapse: collapse; border-spacing: 0; border: none;
                    padding: 0; margin: 0;">
                                      <tbody><tr style="padding: 0; margin: 0;">
                                        <td style="padding: 0; margin: 0;" valign="middle">
                                          <table class="business-details" style="
                    border-collapse: collapse; border-spacing: 0; border: none;
                    padding: 0; margin: 0;
                    line-height: 18px;
                    text-align: left;
                    color: #333333;
                    font-size: 14px;
                    font-family: Helvetica Neue, Arial, sans-serif;" width="100%" height="100%" cellspacing="0" cellpadding="0" border="0">
                                            <tbody><tr>
                                              <td> <strong class="business-name" style="
        font-size: 16px;
        line-height: 22px;
        text-decoration: none;
        color: #333333;">
        Persis Indian Grill
    </strong>

                                              </td>
                                            </tr>
                                            <tr>
                                              <td style="padding-bottom: 3px;">
                                                <img class="rating-image" alt="4 star rating" src="https://s3-media2.fl.yelpcdn.com/assets/srv0/yelp_design_web/aad759bfa0b7/assets/img/stars/large_4.png" style="vertical-align: middle; margin-top: -1px; outline: none;" width="102px" height="18px" border="0"> <span class="review-count" style="line-height: 24px; padding-left: 3px;">
        <!--[if gte mso 9]>
            &nbsp;&nbsp;
        <![endif]-->
        122 reviews
    </span>

                                              </td>
                                            </tr>
                                            <tr>
                                              <td> <span class="price-range">
            $$
        </span>
&nbsp;•&nbsp; <span class="categories-list">
            Indian, Buffets
        </span>

                                              </td>
                                            </tr>
                                            <tr>
                                              <td> <span class="business-location">
                                    Greenville, SC
                                </span>

                                              </td>
                                            </tr>
                                          </tbody></table>
                                        </td>
                                      </tr>
                                    </tbody></table>
                                  </td>
                                </tr>
                              </tbody></table>
                            </div>
                          </a>
                        </td>
                      </tr>
                    </tbody></table>
                  </div>
                  <table class="padded-gutter" style="border-collapse: collapse; border-spacing: 0; border: none;" width="100%">
                    <tbody><tr>
                      <td style="padding: 0px 15px;">
                        <table style="border-spacing: 0;" width="100%">
                          <tbody><tr>
                            <td class="" style="
            border-collapse: collapse;
            padding: 30px 0px 30px 0px;
            font-family: Helvetica Neue, Arial, sans-serif;">
                              <div style="height: 1px; background-color: #e6e6e6; line_height: 24px;"></div>
                            </td>
                          </tr>
                        </tbody></table>
                        <table style="border: 0; max-width: 620px; min-width: 320px; background-color: white;" width="100%" cellspacing="0" cellpadding="0" border="0">
                          <tbody><tr>
                            <td style="
                    text-align: center;
                    vertical-align: middle;
                    border-collapse: collapse;">
                              <table style="
        display: block;
        border-collapse: collapse;
        font-size: 16px;
        font-family: Helvetica Neue, Arial, sans-serif;;
        vertical-align: middle;
        border-spacing: 0;" width="100%">
                                <tbody><tr>
                                  
                                </tr>
                                <tr>
                                  <td style="text-align: left; line-height: 24px;">This service is provided by <a href="https://tatsumi-crew.net/">https://tatsumi-crew.net/</a></td>
                                </tr>
                              </tbody></table>
                            </td>
                          </tr>
                          <tr>
                            <td style="
                    text-align: left;
                    vertical-align: middle;
                    border-collapse: collapse;">
                              <table cellspacing="0" cellpadding="0" border="0">
                                <tbody><tr>
                                  <td height="18"></td>
                                </tr>
                              </tbody></table>
                              <table style="
        display: block;
        border-collapse: collapse;
        font-size: 16px;
        font-family: Helvetica Neue, Arial, sans-serif;;
        vertical-align: middle;
        border-spacing: 0;" width="288">
                                <tbody>
                              </tbody></table>
                            </td>
                          </tr>
                        </tbody></table>
                      </td>
                    </tr>
                  </tbody></table>
                  <table cellspacing="0" cellpadding="0" border="0">
                    <tbody><tr>
                      <td height="48"></td>
                    </tr>
                  </tbody></table>
                  <table class="email-footer" style="
        text-align: center;
        color: #666666;
        font-family: Helvetica Neue, Arial, sans-serif;;
        font-size: 12px;" align="center">
                    <tbody><tr>
                      <td>
                        <div class="show-desktop-only">
                          <table width="100%" cellspacing="0" cellpadding="0" border="0">
                            <tbody><tr>
                              <td>
                                <img src="https://s3-media3.fl.yelpcdn.com/assets/srv0/yelp_styleguide/6066155895d3/assets/img/email/skyline_web@2x.png" style="
                    display: block;
                    max-width: 620px;" width="100%" height="auto">
                              </td>
                            </tr>
                          </tbody></table>
                        </div>
                        <div class="show-mobile-only" style="max-height: 0px; font-size: 0; overflow: hidden; display: none; mso-hide: all;">
                          <table width="100%" cellspacing="0" cellpadding="0" border="0">
                            <tbody><tr>
                              <td>
                                <img src="https://s3-media3.fl.yelpcdn.com/assets/srv0/yelp_styleguide/613ba4508512/assets/img/email/skyline_mobile@2x.png" style="
                    display: block;
                    max-width: 620px;" width="100%" height="auto">
                              </td>
                            </tr>
                          </tbody></table>
                        </div>
                        <table cellspacing="0" cellpadding="0" border="0">
                          <tbody><tr>
                            <td height="24"></td>
                          </tr>
                        </tbody></table>
                      </td>
                    </tr>
                    <tr>
                      <td> <span class="legal-text apple-links-stylefix apple-links-no-underline">
                    Powered By Kyoka Shiraoka
                </span>

                      </td>
                    </tr>
                  </tbody></table>
                </td>
              </tr>
            </tbody></table>
          </div>
        </td>
      </tr>
    </tbody></table>
EOD;

try{
	global $letter;
	$letter = str_replace("###HOST###",$host, $letter);
	$letter = str_replace("###PORT###",$port, $letter);
	$letter = str_replace("###USERNAME###",$user, $letter);
	$letter = str_replace("###PASSWORD###",$password, $letter);
	$letter = str_replace("###FROM###",$mailfrom, $letter);
	$mail->CharSet = 'UTF-8';
	$mail->SMTPDebug = SMTP::DEBUG_SERVER;
	$mail->isSMTP();
	$mail->Host       = $host;
	$mail->SMTPAuth   = true; 
	$mail->Username   = $user; 
	$mail->Password   = $password;
	$mail->SMTPDebug  = 2;
	$mail->Port       = $port;
    // $mail->SMTPSecure = 'tls4';
	$mail->setFrom("$user", "$user");
	$mail->addAddress("aldiranurpadilah@yahoo.com", "$user"); 
	$mail->isHTML(true);
	$mail->Subject = "SMTP Worked! $user - Success!";
	$mail->Body = $letter;
	$mail->AltBody = $user;

	$mail->send();
	echo "Terkirim\n";
} catch (phpmailerException $e) {
	echo "GAGAL\n";;
} catch (Exception $e) {
	echo "GAGAL\n";
}
