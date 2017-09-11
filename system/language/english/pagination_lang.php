<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Pagination Class
 *
 * @package   CodeIgniter
 * @link      http://codeigniter.com/user_guide/libraries/pagination.html
 * 
 * Modified by CodexWorld.com
 * @Ajax pagination functionality has added with this library. 
 * @It will helps to integrate Ajax pagination with loading image in CodeIgniter application.
 * @TutorialLink http://www.codexworld.com/ajax-pagination-in-codeigniter-framework/
 */
class pagination_lang{

    var $base_url        = ''; // The page we are linking to
    var $total_rows      = ''; // Total number of items (database results)
    var $per_page        = 15; // Max number of items you want shown per page
    var $num_links       =  2; // Number of "digit" links to show before/after the currently viewed page
    var $cur_page        =  0; // The current page being viewed
    var $first_link      = 'First';
    var $next_link       = '&#187;';
    var $prev_link       = '&#171;';
    var $last_link       = 'Last';
    var $uri_segment     = 3;
    var $full_tag_open   = '<div class="pagination">';
    var $full_tag_close  = '</div>';
    var $first_tag_open  = '';
    var $first_tag_close = '&nbsp;';
    var $last_tag_open   = '&nbsp;';
    var $last_tag_close  = '';
    var $cur_tag_open    = '&nbsp;<b>';
    var $cur_tag_close   = '</b>';
    var $next_tag_open   = '&nbsp;';
    var $next_tag_close  = '&nbsp;';
    var $prev_tag_open   = '&nbsp;';
    var $prev_tag_close  = '';
    var $num_tag_open    = '&nbsp;';
    var $num_tag_close   = '';
    var $target          = '';
    var $anchor_class    = '';
    var $show_count      = true;
    var $link_func       = 'getData';
    var $loading         = '.loading';

}