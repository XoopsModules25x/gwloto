<?php
/**
* xoops_version.php - basic module definitions
*
* This file is part of gwloto - geekwright lockout tagout
*
* @copyright  Copyright © 2010 geekwright, LLC. All rights reserved. 
* @license    gwloto/docs/license.txt  GNU General Public License (GPL)
* @since      1.0
* @author     Richard Griffith <richard@geekwright.com>
* @package    gwloto
* @version    $Id$
*/

if (!defined("XOOPS_ROOT_PATH")) die("Root path not defined");

$modversion['name'] = _MI_GWLOTO_NAME;
$modversion['version'] = '0.9';
$modversion['description'] = _MI_GWLOTO_DESC;
$modversion['credits'] = "geekwight, LLC";
$modversion['help'] = "";
$modversion['license'] = 'GNU General Public License V3';
$modversion['official'] = 0;
$modversion['image'] = "images/icon_big.png";
$modversion['dirname'] = basename( dirname( __FILE__ ) ) ;

// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = 'admin/index.php';
$modversion['adminmenu'] = 'admin/menu.php';

// Menu
$modversion['hasMain'] = 1;

// Search
$modversion['hasSearch'] = 0;

// comments
$modversion['hasComments'] = 0;
// notification
$modversion['hasNotification'] = 0;
// Config
$i=1;
$modversion['config'][$i]['name'] = 'maxtagcopies';
$modversion['config'][$i]['title'] = '_MI_GWLOTO_CFG_MAXTAG';
$modversion['config'][$i]['description'] = '_MI_GWLOTO_CFG_MAXTAG_DSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = '6';
++$i;
$modversion['config'][$i]['name'] = 'pref_date';
$modversion['config'][$i]['title'] = '_MI_GWLOTO_CFG_PREF_DATE';
$modversion['config'][$i]['description'] = '_MI_GWLOTO_CFG_PREF_DATE_DSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'l F j, Y H:i:s';
++$i;
$modversion['config'][$i]['name'] = 'show_reconnect';
$modversion['config'][$i]['title'] = '_MI_GWLOTO_CFG_SHOW_RECON';
$modversion['config'][$i]['description'] = '_MI_GWLOTO_CFG_SHOW_RECON_DSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = '1';
++$i;
$modversion['config'][$i]['name'] = 'show_inspect';
$modversion['config'][$i]['title'] = '_MI_GWLOTO_CFG_SHOW_INSPECT';
$modversion['config'][$i]['description'] = '_MI_GWLOTO_CFG_SHOW_INSPECT_DSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = '1';
++$i;
$modversion['config'][$i]['name'] = 'jobrequires';
$modversion['config'][$i]['title'] = '_MI_GWLOTO_CFG_JOB_REQUIRES';
$modversion['config'][$i]['description'] = '_MI_GWLOTO_CFG_JOB_REQUIRES_DSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'workorder,supervisor,startdate,enddate,description,stepname';
++$i;
$modversion['config'][$i]['name'] = 'planrequires';
$modversion['config'][$i]['title'] = '_MI_GWLOTO_CFG_PLAN_REQUIRES';
$modversion['config'][$i]['description'] = '_MI_GWLOTO_CFG_PLAN_REQUIRES_DSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = 'review,hazard_inventory,required_ppe,authorized_personnel,additional_requirements,disconnect_instructions,reconnect_instructions,inspection_instructions,inspection_state';
++$i;
$modversion['config'][$i]['name'] = 'media_upload_path';
$modversion['config'][$i]['title'] = '_MI_GWLOTO_CFG_MEDIA_PATH';
$modversion['config'][$i]['description'] = '_MI_GWLOTO_CFG_MEDIA_PATH_DSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = XOOPS_ROOT_PATH.'/uploads/'.$modversion['dirname'].'/media/';

++$i;
$modversion['config'][$i]['name'] = 'max_media_size';
$modversion['config'][$i]['title'] = '_MI_GWLOTO_CFG_MAX_MEDIA_SIZE';
$modversion['config'][$i]['description'] = '_MI_GWLOTO_CFG_MAX_MEDIA_SIZE_DSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = '5000000';

++$i;
$modversion['config'][$i]['name'] = 'enable_google';
$modversion['config'][$i]['title'] = '_MI_GWLOTO_CFG_ENABLE_GOOGLE_TRANSLATE';
$modversion['config'][$i]['description'] = '_MI_GWLOTO_CFG_ENABLE_GOOGLE_TRANSLATE_DSC';
$modversion['config'][$i]['formtype'] = 'yesno';
$modversion['config'][$i]['valuetype'] = 'int';
$modversion['config'][$i]['default'] = '0';

++$i;
$modversion['config'][$i]['name'] = 'tcpdf_path';
$modversion['config'][$i]['title'] = '_MI_GWLOTO_CFG_TCPDF_PATH';
$modversion['config'][$i]['description'] = '_MI_GWLOTO_CFG_TCPDF_PATH_DSC';
$modversion['config'][$i]['formtype'] = 'textbox';
$modversion['config'][$i]['valuetype'] = 'text';
$modversion['config'][$i]['default'] = '';

// Database
$modversion['sqlfile']['mysql'] = 'sql/mysql.sql';
$modversion['onInstall'] = 'include/install.php';
$modversion['onUpdate'] = 'include/update.php';
$modversion['onUninstall'] = 'include/uninstall.php';
$modversion['tables'][0] = 'gwloto_media';
$modversion['tables'][]  = 'gwloto_media_detail';
$modversion['tables'][]  = 'gwloto_media_file';
$modversion['tables'][]  = 'gwloto_media_attach';
$modversion['tables'][]  = 'gwloto_place';
$modversion['tables'][]  = 'gwloto_place_detail';
$modversion['tables'][]  = 'gwloto_language';
$modversion['tables'][]  = 'gwloto_user';
$modversion['tables'][]  = 'gwloto_user_auth';
$modversion['tables'][]  = 'gwloto_cplan';
$modversion['tables'][]  = 'gwloto_cplan_detail';
$modversion['tables'][]  = 'gwloto_cpoint';
$modversion['tables'][]  = 'gwloto_cpoint_detail';
$modversion['tables'][]  = 'gwloto_job';
$modversion['tables'][]  = 'gwloto_job_steps';
$modversion['tables'][]  = 'gwloto_job_places';
$modversion['tables'][]  = 'gwloto_plugin_register';
$modversion['tables'][]  = 'gwloto_plugin_name';

// Blocks
$modversion['blocks'][1] = array(
  'file' => 'blocks.php',
  'name' => _MI_GWLOTO_ASSIGNED_BLOCK,
  'description' => _MI_GWLOTO_ASSIGNED_BLOCK_DESC,
  'show_func' => 'b_gwloto_assigned_block_show',
  'edit_func' => 'b_gwloto_assigned_block_edit',
  'options' => 'desc',
  'template' => 'gwloto_block.html');

// Templates
$i=1;
$modversion['templates'][$i]['file'] = 'gwloto_place_crumbs.html';
$modversion['templates'][$i]['description'] = 'Place Breadcrumbs';
++$i;
$modversion['templates'][$i]['file'] = 'gwloto_action_menu.html';
$modversion['templates'][$i]['description'] = 'Action Menu';
++$i;
$modversion['templates'][$i]['file'] = 'gwloto_header.html';
$modversion['templates'][$i]['description'] = 'Page Header';
++$i;
$modversion['templates'][$i]['file'] = 'gwloto_job_list.html';
$modversion['templates'][$i]['description'] = 'Job List';
++$i;
$modversion['templates'][$i]['file'] = 'gwloto_media_list.html';
$modversion['templates'][$i]['description'] = 'Attached Media';

++$i;
$modversion['templates'][$i]['file'] = 'gwloto_index.html';
$modversion['templates'][$i]['description'] = 'Module Index';
++$i;
$modversion['templates'][$i]['file'] = 'gwloto_editauths.html';
$modversion['templates'][$i]['description'] = 'Edit Authorities';
++$i;
$modversion['templates'][$i]['file'] = 'gwloto_viewplan.html';
$modversion['templates'][$i]['description'] = 'View Control Plan';
++$i;
$modversion['templates'][$i]['file'] = 'gwloto_editpoint.html';
$modversion['templates'][$i]['description'] = 'Edit Control Points';
++$i;
$modversion['templates'][$i]['file'] = 'gwloto_sortpoint.html';
$modversion['templates'][$i]['description'] = 'Sort Control Points';
++$i;
$modversion['templates'][$i]['file'] = 'gwloto_viewjob.html';
$modversion['templates'][$i]['description'] = 'View Job';
++$i;
$modversion['templates'][$i]['file'] = 'gwloto_printjob.html';
$modversion['templates'][$i]['description'] = 'Print Job';
++$i;
$modversion['templates'][$i]['file'] = 'gwloto_editmedia.html';
$modversion['templates'][$i]['description'] = 'Media Center';
?>
