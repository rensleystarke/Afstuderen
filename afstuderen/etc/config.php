; <?php /*
; WARNING: Do not change the line above
;
; +-------------------------------------+
; |   X-Cart 5 configuration file   |
; +-------------------------------------+
;
; -----------------
;  About this file
; -----------------
;

;
; ----------------------
;  SQL Database details
; ----------------------
;
[database_details]
hostspec = "localhost"
socket = "/Applications/MAMP/tmp/mysql/mysql.sock"
port = "3306"
database = "local"
username = "root"
password = "root"
table_prefix = "xc_"

;
; ----------------------
;  Cache settings
; ----------------------
;
[cache]
; default cache ttl in seconds, 604800 - 1 week
default_cache_ttl = 604800
; Type of cache used. Can take auto, memcache, memcached, apc, xcache, file values.
type=file
; Cache namespace
namespace=XLite
; List of memcache servers. Semicolon is used as a delimiter.
; Each server is specified with a host name and port number, divided
; by a colon. If the port is not specified, the default
; port 11211 is used.
servers=

;
; -----------------------------------------------------------------------
;  X-Cart 5 HTTP & HTTPS host, web directory where cart installed
;  and allowed domains
; -----------------------------------------------------------------------
;
; NOTE:
; You should put here hostname ONLY without http:// or https:// prefixes
; Do not put slashes after the hostname
; Web dir is the directory in the URL, not the filesystem path
; Web dir must start with slash and have no slash at the end
; The only exception is when you configure for the root of the site,
; in which case you write single slash in it
; Domains should be listed separated by commas.
;
; WARNING: Do not set the "$" sign before the parameter names!
;
; EXAMPLE 1:
;
;   http_host = "www.yourhost.com"
;   https_host = "www.securedirectories.com/yourhost.com"
;   web_dir = "/shop"
;   domains = "www.yourhost2.com,yourhost3.com"
;
; will result in the following URLs:
;
;   http://www.yourhost.com/shop
;   https://www.securedirectories.com/yourhost.com/shop
;
;
; EXAMPLE 2:
;
;   http_host = "www.yourhost.com"
;   https_host = "www.yourhost.com"
;   web_dir = "" (don't use "/")
;
; will result in the following URLs:
;
;   http://www.yourhost.com
;   https://www.yourhost.com
;
[host_details]
http_host = "localhost:8888"
https_host = "localhost:8888"
web_dir = ""
domains = ""
admin_self = "admin.php"
cart_self = "cart.php"

[clean_urls]
; Is use urls like domain.com/LG for languages
; possible values "Y", "N"
; Changing this setting requires to re-deploy your store
use_language_url = "Y"

; String with one or more chars.
; It will be used to autogenerate clean URLs.
; By default, only the "-" or "_" characters are allowed.
; Empty string is also allowed.
default_separator = "-"

; Get clean URLs capitalized for every starting letter of a word
capitalize_words = Off

; Use canonical URL for product page
use_canonical_urls_only = On

; Category Clean URL’s format
; possible values:
; domain/parent/goalcategory/
; domain/goalcategory/
; domain/parent/goalcategory.html
; domain/goalcategory.html
;
; Changing this setting will not affect existing url's
; and requires to re-deploy your store
category_clean_urls_format = "domain/parent/goalcategory/"

[clean_urls_aliases]
; to define your own alias add line below as:
; target = "clean-url"
new_arrivals = "newarrivals"
sale_products = "sale_products"
coming_soon = "coming_soon"
bestsellers = "bestsellers"
contact_us = "contact_us"

;
; -----------------
;  Logging details
; -----------------
;
[log_details]
type = file
name = "var/log/xlite.log.php"
level = LOG_WARNING
ident = "XLite"
suppress_errors = On
suppress_log_errors = Off

;
; Skin details
;
[skin_details]
skin = customer
locale = en

;
; Default image settings
;
[images]
default_image = "images/no_image.png"
default_image_width = 110
default_image_height = 110
make_progressive = On
generate_retina_images = On

; Installation path of Image Magick executables:
; for example:
; image_magick_path = "C:\\Program Files\\ImageMagick-6.7.0-Q16\\"   (in Windows)
; image_magick_path = "/usr/local/imagemagick/" (in Unix/Linux )
; You should consult with your hosting provider to find where Image Magick is installed
; If you leave it empty then PHP GD library will be used.
;
image_magick_path =

;
; Installer authcode.
; A person who do not know the auth code can not access the installation script.
; Installation authcode is created authomatically and stored in this section.
;
[installer_details]
auth_code = "H2O6K5XF"
shared_secret_key = "5ad461e862ce81.17588816"

;
; Some options to optimize the store
;
[performance]
developer_mode = Off

; Enable to cache resource paths
skins_cache = off

;
; Decorator options
;
[decorator]
time_limit = 600
use_tokenizer = Off
disable_software_reset = Off
use_output = Off
quick_data_rebuilding = Off

;
; Error handling options
;
[error_handling]
; Template for error pages
page = "public/error.html"
page_customer = "public/customer/error.html"
; Template for maintenance pages
maintenance = "public/maintenance.html"

;
; Marketplace
;
[marketplace]
url = "http://my.x-cart.com/index.php?q=api"
log_data = Off
upgrade_step_time_limit = 240
banner_url = "http://my.x-cart.com/xcinfo"

;
; Language options
;
[language]
default = en

;
; Installation parameters
;
[installation]
installation_lng = en

;
; AMQP server
;
[amqp]
host     = "localhost"
port = "3306"
user     = "guest"
password = "root"
vhost    = "/"
exchange = "xlite"

;
; HTML Purifier options
; See http://htmlpurifier.org/live/configdoc/plain.html for more details on HTML Purifier options
;
[html_purifier]
; Allow link 'target' attribute
Attr.AllowedFrameTargets = On

; List of allowed values for 'target' attribute
Attr.AllowedFrameTargets[] = _blank
Attr.AllowedFrameTargets[] = _self
Attr.AllowedFrameTargets[] = _top
Attr.AllowedFrameTargets[] = _parent

; Allow 'id' attribute
Attr.EnableID = On

; Allow tricky css like 'display:block;' on images
CSS.AllowTricky = On

; Allow embed tags
HTML.SafeEmbed = On

; Allow object tags
HTML.SafeObject = On

; Allow iframe tags
HTML.SafeIframe = On

; List of allowed URI (without http:// or https:// part) for iframe tags
; If there are no allowed URIs specified then any src will be allowed for iframe tags
;
; Examples:
;
; URI.SafeIframeRegexp[] = "www.youtube.com/embed/"
; URI.SafeIframeRegexp[] = "www.youtube-nocookie.com/embed/"
; URI.SafeIframeRegexp[] = "player.vimeo.com/video/"

; HTML Purifier additional attributes
; format:
; tag[] = attribute1:attribute_definition2
; tag[] = attribute2:attribute_definition2
;
; For tag only(if you specified attribute as above - tag will be added automatically):
; tag[] =
;
; Attribute definitions:
; Enum      - as example "Enum#_blank,_self,_target,_top"
; Bool      - Boolean attribute, with only one valid value: the name of the attribute.
; CDATA     - Attribute of arbitrary text. (also Text valid)
; ID        - Attribute that specifies a unique ID
; Pixels    - Attribute that specifies an integer pixel length
; Length    - Attribute that specifies a pixel or percentage length
; NMTOKENS  - Attribute that specifies a number of name tokens, example: the class attribute
; URI       - Attribute that specifies a URI, example: the href attribute
; Number    - Attribute that specifies an positive integer number
[html_purifier_additional_attributes]
iframe[] = allowfullscreen:CDATA

[storefront_options]
; Do not close target=callback for payments if storefront is closed
callback_opened = On
; Works only with 'Aggregate CSS files' option enabled
optimize_css = On

; All the following countries always uses custom state with autocomplete(if available)
; possible values - country codes ('GB,US,DE' as example), 'All' or empty ''
autocomplete_states_for_countries = 'GB'
;
; Other options
;
[other]
; Translation drive code - auto / gettext / db
translation_driver = auto
; Event driver code - auto / db / amqp
event_driver = auto

; List of trusted domains.
; This option prevents redirecting to untrusted URLs passed via returnURL parameter.
; Examples:
; trusted_domains = "google.com"
; trusted_domains = "google.com, yahoo.com"
trusted_domains =

; X-Frame-Options value
; For possible values see https://developer.mozilla.org/en-US/docs/Web/HTTP/X-Frame-Options
; Examples:
; x_frame_options = 'disabled'
; x_frame_options = 'sameorigin'
x_frame_options = 'sameorigin'

; X-XSS-Protection value
; For possible values see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/X-XSS-Protection
; Examples:
; x_xss_protection = 'disabled' # prevent X-XSS-Protection header sending
; x_xss_protection = '0'
; x_xss_protection = '1; mode=block'
x_xss_protection = '1; mode=block'

; Content-Security-Policy value
; For possible values see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy
; Examples:
; content_security_policy = 'disabled' # prevent Content-Security-Policy header sending
; content_security_policy = "default-src 'self'"
; content_security_policy = "default-src 'self'; img-src *;"
content_security_policy = 'disabled'

; X-Content-Type-Options value
; For possible values see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/X-Content-Type-Options
; Examples:
; x_content_type_options = 'disabled' # prevent X-Content-Type-Options header sending
; x_content_type_options = 'nosniff'
x_content_type_options = 'nosniff'

; CSRF token strategy
; possible values: per-session, per-form
csrf_strategy = per-session
meta_upgrade_insecure = Off

show_initialized_transactions = Off

; Use X-Sendfile and X-Accel-Redirect to download files
; Note that server should be properly configured
use_sendfile = Off

; Next-previous order criteria
; allowed values: orderNumber, date
next_previous_order_criteria = orderNumber

[export-import]

; Export/Import available encodings list
; This values should be valid iconv encoding alias and should be listed in iconv -l output
encodings_list[] = 'UTF-8'
encodings_list[] = 'ISO-8859-1'
encodings_list[] = 'WINDOWS-1251'
encodings_list[] = 'CSSHIFTJIS'
encodings_list[] = 'WINDOWS-1252'
encodings_list[] = 'GB2312'
encodings_list[] = 'EUC-KR'
encodings_list[] = 'EUC-JP'
encodings_list[] = 'GBK'
encodings_list[] = 'ISO-8859-2'
encodings_list[] = 'ISO-8859-15'
encodings_list[] = 'WINDOWS-1250'
encodings_list[] = 'WINDOWS-1256'
encodings_list[] = 'ISO-8859-9'
encodings_list[] = 'BIG5'
encodings_list[] = 'WINDOWS-1254'
encodings_list[] = 'WINDOWS-874'

[queue]
; Enable to consume jobs via Cron or Demon(target=consumer, action=consumeAll)
backgroundJobsSchedulingEnabled = false

; Consume jobs via js runner
jsRunnerForOnlineEnabled = true


; WARNING: Do not change the line below
; */ ?>
