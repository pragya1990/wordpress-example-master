function whatever_apk_files_upload( $apk_files_activate=array() ) {
$apk_files_activate['apk'] = 'application/vnd.android.package-archive';
return $apk_files_activate;
}
add_filter('upload_mimes', 'whatever_apk_files_upload');
