<?php

/**
 * This file is part of OXID eSales Wave theme.
 *
 * OXID eSales Wave theme is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OXID eSales Wave theme is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OXID eSales Wave theme.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG 2003-2016
 */

/**
 * Theme Information
 */
$aTheme = array(
    'id'          => 'wave',
    'title'       => 'Wave',
    'description' => 'Wave is OXID`s official responsive theme based on the CSS framework Bootstrap 4.',
    'thumbnail'   => 'theme.jpg',
    'version'     => '1.6.1',
    'author'      => '<a href="http://www.oxid-esales.com" title="OXID eSales AG">OXID eSales AG</a>',
    'settings'    => array(
        //Group display:
        array(
            'group' => 'display',
            'name' => 'blFullwidthLayout',
            'type' => 'bool',
            'value' => 0,
            'position' => 1001,
        ),
        array(
            'group' => 'display',
            'name' => 'blHomeLink',
            'type' => 'bool',
            'value' => 1,
            'position' => 1002,
        ),
        array(
            'group' => 'display',
            'name' => 'bl_showManufacturerSlider',
            'type' => 'bool',
            'value' => 1,
            'position' => 1003,
        ),
        array(
            'group' => 'display',
            'name' => 'sDefaultListDisplayType',
            'type' => 'select',
            'value' => 'infogrid',
            'constraints' => 'infogrid|line|grid',
            'position' => 1004,
        ),
        array(
            'group' => 'display',
            'name' => 'blShowListDisplayType',
            'type' => 'bool',
            'value' => 1,
            'position' => 1005,
        ),
        array(
            'group' => 'display',
            'name' => 'sStartPageListDisplayType',
            'type' => 'select',
            'value' => 'grid',
            'constraints' => 'infogrid|line|grid',
            'position' => 1006,
        ),
        array(
            'group' => 'display',
            'name' => 'aNrofCatArticles',
            'type' => 'arr',
            'value' => array("10", "20", "50", "100"),
            'position' => 1007,
        ),
        array(
            'group' => 'display',
            'name' => 'aNrofCatArticlesInGrid',
            'type' => 'arr',
            'value' => array("12", "16", "24", "32"),
            'position' => 1008,
        ),
        array(
            'group' => 'display',
            'name' => 'iNewBasketItemMessage',
            'type' => 'select',
            'value' => 'str',
            'constraints' => '0|1|2|3',
            'position' => 1009,
        ),
        array(
            'group' => 'display',
            'name' => 'blShowFinalStep',
            'type' => 'bool',
            'value' => 1,
            'position' => 1010,
        ),
        array(
            'group' => 'display',
            'name' => 'blShowBirthdayFields',
            'type' => 'bool',
            'value' => 1,
            'position' => 1011,
        ),
        //Group logo:
        array(
            'group' => 'logo',
            'name' => 'sLogoFile',
            'type' => 'str',
            'value' => 'logo_oxid.png',
            'position' => 1101,
        ),
        array(
            'group' => 'logo',
            'name' => 'sLogoWidth',
            'type' => 'str',
            'value' => '200',
            'position' => 1102,
        ),
        array(
            'group' => 'logo',
            'name' => 'sLogoHeight',
            'type' => 'str',
            'value' => '38',
            'position' => 1103,
        ),
        //Group favicon:
        array(
            'group' => 'favicons',
            'name' => 'sFaviconFile',
            'type' => 'str',
            'value' => 'favicon.ico',
            'position' => 1201,
        ),
        array(
            'group' => 'favicons',
            'name' => 'sFavicon16File',
            'type' => 'str',
            'value' => 'favicon_16x16.png',
            'position' => 1202,
        ),
        array(
            'group' => 'favicons',
            'name' => 'sFavicon32File',
            'type' => 'str',
            'value' => 'favicon_32x32.png',
            'position' => 1203,
        ),
        array(
            'group' => 'favicons',
            'name' => 'sFavicon48File',
            'type' => 'str',
            'value' => 'favicon_48x48.png',
            'position' => 1204,
        ),
        array(
            'group' => 'favicons',
            'name' => 'sFavicon64File',
            'type' => 'str',
            'value' => 'favicon_64x64.png',
            'position' => 1205,
        ),
        array(
            'group' => 'favicons',
            'name' => 'sFavicon128File',
            'type' => 'str',
            'value' => 'favicon_128x128.png',
            'position' => 1206,
        ),
        array(
            'group' => 'favicons',
            'name' => 'sFavicon512File',
            'type' => 'str',
            'value' => 'favicon_512x512.png',
            'position' => 1207,
        ),
        array(
            'group' => 'favicons',
            'name' => 'sFaviconMSTileColor',
            'type' => 'str',
            'value' => '#D83434',
            'position' => 1208,
        ),
        //Group images:
        array(
            'group' => 'images',
            'name' => 'sIconsize',
            'type' => 'str',
            'value' => '87*87',
            'position' => 1301,
        ),
        array(
            'group' => 'images',
            'name' => 'sThumbnailsize',
            'type' => 'str',
            'value' => '390*245',
            'position' => 1302,
        ),
        array(
            'group' => 'images',
            'name' => 'aDetailImageSizes',
            'type' => 'aarr',
            'value' => array(
                'oxpic1' => '540*340',
                'oxpic2' => '540*340',
                'oxpic3' => '540*340',
                'oxpic4' => '540*340',
                'oxpic5' => '540*340',
                'oxpic6' => '540*340',
                'oxpic7' => '540*340',
                'oxpic8' => '540*340',
                'oxpic9' => '540*340',
                'oxpic10' => '540*340',
                'oxpic11' => '540*340',
                'oxpic12' => '540*340',
            ),
            'position' => 1303,
        ),
        array(
            'group' => 'images',
            'name' => 'sZoomImageSize',
            'type' => 'str',
            'value' => '665*665',
            'position' => 1304,
        ),
        array(
            'group' => 'images',
            'name' => 'sCatIconsize',
            'type' => 'str',
            'value' => '168*100',
            'position' => 1305,
        ),
        array(
            'group' => 'images',
            'name' => 'sCatPromotionsize',
            'type' => 'str',
            'value' => '370*107',
            'position' => 1306,
        ),
        array(
            'group' => 'images',
            'name' => 'sCatThumbnailsize',
            'type' => 'str',
            'value' => '1140*250',
            'position' => 1307,
        ),
        array(
            'group' => 'images',
            'name' => 'sManufacturerIconsize',
            'type' => 'str',
            'value' => '100*100',
            'position' => 1308,
        ),
        array(
            'group' => 'images',
            'name' => 'blSliderShowImageCaption',
            'type' => 'bool',
            'value' => 1,
            'position' => 1309,
        ),
        //Group background:
        array(
            'group' => 'background',
            'name' => 'sBackgroundColor',
            'type' => 'str',
            'value' => '#CCEBF5',
            'position' => 1401,
        ),
        array(
            'group' => 'background',
            'name' => 'blUseBackground',
            'type' => 'bool',
            'value' => 0,
            'position' => 1402,
        ),
        array(
            'group' => 'background',
            'name' => 'sBackgroundPath',
            'type' => 'str',
            'value' => 'mein_hintergrundbild.jpg',
            'position' => 1403,
        ),
        array(
            'group' => 'background',
            'name' => 'sBackgroundSize',
            'type' => 'select',
            'value' => 'cover',
            'constraints' => 'cover|contain|normal',
            'position' => 1404,
        ),
        array(
            'group' => 'background',
            'name' => 'sBackgroundPosHorizontal',
            'type' => 'select',
            'value' => 'center',
            'constraints' => 'left|right|center',
            'position' => 1405,
        ),
        array(
            'group' => 'background',
            'name' => 'sBackgroundPosVertical',
            'type' => 'select',
            'value' => 'top',
            'constraints' => 'top|bottom|center',
            'position' => 1406,
        ),
        array(
            'group' => 'background',
            'name' => 'sBackgroundRepeat',
            'type' => 'select',
            'value' => 'no-repeat',
            'constraints' => 'no-repeat|repeat-x|repeat-y|repeat',
            'position' => 1407,
        ),
        array(
            'group' => 'background',
            'name' => 'blBackgroundAttachment',
            'type' => 'bool',
            'value' => 1,
            'position' => 1408,
        ),
        //Group features:
        array(
            'group' => 'features',
            'name' => 'bl_showCompareList',
            'type' => 'bool',
            'value' => 1,
            'position' => 1501,
        ),
        array(
            'group' => 'features',
            'name' => 'bl_showPriceAlarm',
            'type' => 'bool',
            'value' => 1,
            'position' => 1502,
        ),
        array(
            'group' => 'features',
            'name' => 'bl_showWishlist',
            'type' => 'bool',
            'value' => 1,
            'position' => 1503,
        ),
        array(
            'group' => 'features',
            'name' => 'bl_showListmania',
            'type' => 'bool',
            'value' => 1,
            'position' => 1504,
        ),
        array(
            'group' => 'features',
            'name' => 'bl_showVouchers',
            'type' => 'bool',
            'value' => 1,
            'position' => 1505,
        ),
        array(
            'group' => 'features',
            'name' => 'bl_showGiftWrapping',
            'type' => 'bool',
            'value' => 1,
            'position' => 1506,
        ),
        //Group footer:
        array(
            'group' => 'footer',
            'name' => 'blFooterShowHelp',
            'type' => 'bool',
            'value' => 1,
            'position' => 1601,
        ),
        array(
            'group' => 'footer',
            'name' => 'blFooterShowLinks',
            'type' => 'bool',
            'value' => 1,
            'position' => 1602,
        ),
        array(
            'group' => 'footer',
            'name' => 'blFooterShowNewsletter',
            'type' => 'bool',
            'value' => 1,
            'position' => 1604,
        ),
        array(
            'group' => 'footer',
            'name' => 'blFooterShowNewsletterForm',
            'type' => 'bool',
            'value' => 1,
            'position' => 1605,
        ),
        array(
            'group' => 'footer',
            'name' => 'sFacebookUrl',
            'type' => 'str',
            'value' => 'https://www.facebook.com',
            'position' => 1606,
        ),
        array(
            'group' => 'footer',
            'name' => 'sTwitterUrl',
            'type' => 'str',
            'value' => 'https://twitter.com',
            'position' => 1607,
        ),
        array(
            'group' => 'footer',
            'name' => 'sYouTubeUrl',
            'type' => 'str',
            'value' => 'https://www.youtube.com',
            'position' => 1608,
        ),
        array(
            'group' => 'footer',
            'name' => 'sBlogUrl',
            'type' => 'str',
            'value' => 'https://wordpress.org',
            'position' => 1609,
        ),
        array(
            'group' => 'footer',
            'name' => 'sInstagramUrl',
            'type' => 'str',
            'value' => 'https://www.instagram.com/',
            'position' => 1610,
        ),
        //Group contact:
        array(
            'group' => 'contact',
            'name' => 'sGoogleMapsAddr',
            'type' => 'str',
            'value' => 'OXID eSales AG, Bertoldstraße 48, 79098 Freiburg',
            'position' => 1701,
        ),
        //Group emails:
        array(
            'group' => 'emails',
            'name' => 'sEmailLogo',
            'type' => 'str',
            'value' => 'logo_email.png',
            'position' => 1801,
        ),
        array(
            'group' => 'emails',
            'name' => 'blEmailsShowProductPictures',
            'type' => 'bool',
            'value' => 0,
            'position' => 1802,
        ),
        //Group googleanalytics:
        array(
            'group' => 'googleanalytics',
            'name' => 'sGATrackingId',
            'type' => 'str',
            'value' => '',
            'position' => 1901,
        ),
        array(
            'group' => 'googleanalytics',
            'name' => 'blUseGAEcommerceTracking',
            'type' => 'bool',
            'value' => 1,
            'position' => 1902,
        ),
        array(
            'group' => 'googleanalytics',
            'name' => 'blUseGAPageTracker',
            'type' => 'bool',
            'value' => 1,
            'position' => 1903,
        ),
        array(
            'group' => 'googleanalytics',
            'name' => 'blGAAnonymizeIPs',
            'type' => 'bool',
            'value' => 1,
            'position' => 1904,
        ),
        //Group googlets:
        array(
            'group' => 'googlets',
            'name' => 'blUseGoogleTS',
            'type' => 'bool',
            'value' => 0,
            'position' => 2001,
        ),
        array(
            'group' => 'googlets',
            'name' => 'sGoogleVendorId',
            'type' => 'str',
            'value' => '',
            'position' => 2002,
        ),
        array(
            'group' => 'googlets',
            'name' => 'sPageLanguage',
            'type' => 'str',
            'value' => 'de_DE',
            'position' => 2003,
        ),
        array(
            'group' => 'googlets',
            'name' => 'sGoogleShoppingAccountId',
            'type' => 'str',
            'value' => '',
            'position' => 2004,
        ),
        array(
            'group' => 'googlets',
            'name' => 'sShippingDaysOnStock',
            'type' => 'str',
            'value' => '3',
            'position' => 2005,
        ),
        array(
            'group' => 'googlets',
            'name' => 'sShippingDaysNotOnStock',
            'type' => 'str',
            'value' => '5',
            'position' => 2006,
        ),
        array(
            'group' => 'googlets',
            'name' => 'sDeliveryDaysOnStock',
            'type' => 'str',
            'value' => '6',
            'position' => 2007,
        ),
        array(
            'group' => 'googlets',
            'name' => 'sDeliveryDaysNotOnStock',
            'type' => 'str',
            'value' => '14',
            'position' => 2008,
        ),
        array(
            'group' => 'googlets',
            'name' => 'sShoppingLanguage',
            'type' => 'str',
            'value' => 'de',
            'position' => 2009,
        ),
        array(
            'group' => 'googlets',
            'name' => 'sShoppingCountry',
            'type' => 'str',
            'value' => 'DE',
            'position' => 2010,
        ),
    ),
);