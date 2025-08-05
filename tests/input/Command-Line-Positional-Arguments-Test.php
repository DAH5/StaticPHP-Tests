---
friendly_urls: false
---
<?php

$path_to_staticphp_file = "StaticPHP.php";

if( ! is_file( $path_to_staticphp_file ) )
{
    echo "ERROR: path_to_staticphp_file is not a file!";
    return;
}

echo "Beginning Command Line Positional Arguments Test..." . PHP_EOL;

$source_dir_path = "tests/input/_includes/Command-Line-Positional-Arguments-Test-source";
$output_dir_path = "tests/input/_includes/Command-Line-Positional-Arguments-Test-output";
$items_to_ignore = "_ignores";
$friendly_urls = "false";
$metadata_delimiter = "___";
$minify_html = "true";
$minify_css = "true";
$minify_js = "false";
$minify_html_tags_to_preserve = "preserve";
$bulk_redirects_filename = "_bulk_redirections";
$redirections_template_filename = "_redirections_template_file.html";
$minify_css_inplace = "false";
$items_to_passthrough = "_passthrough";

$command = "php StaticPHP.php $source_dir_path $output_dir_path $items_to_ignore $friendly_urls $metadata_delimiter $minify_html $minify_css $minify_js $minify_html_tags_to_preserve $bulk_redirects_filename $redirections_template_filename $minify_css_inplace $items_to_passthrough";


$outputLines = [];
$returnCode = 0;

exec( $command, $outputLines, $returnCode );

echo "Command Executed: " . $command . PHP_EOL;
echo "Exit Code: " . $returnCode . PHP_EOL;
echo "BEGIN OUTPUT" . PHP_EOL . PHP_EOL . implode( PHP_EOL, $outputLines ) . PHP_EOL . PHP_EOL . "END OUTPUT" . PHP_EOL;
echo "...Command Line Positional Arguments Test Complete!" . PHP_EOL;
