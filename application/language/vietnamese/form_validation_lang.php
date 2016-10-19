<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.2.4 or newer
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package    CodeIgniter
 * @author    EllisLab Dev Team
 * @copyright    Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright    Copyright (c) 2014, British Columbia Institute of Technology (http://bcit.ca/)
 * @license    http://opensource.org/licenses/MIT    MIT License
 * @link    http://codeigniter.com
 * @since    Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['form_validation_required']            = "{field} không được bỏ trống.";
$lang['form_validation_verify_captcha']            = "{field} không hợp lệ.";
$lang['form_validation_isset']                = "Yêu cầu nhập giá trị cho {field}.";
$lang['form_validation_valid_email']        = "{field} không hợp lệ!";
$lang['form_validation_valid_emails']        = "Tất cả các {field} phải là email hợp lệ!";
$lang['form_validation_valid_url']            = "{field} phải là URL hợp lệ.";
$lang['form_validation_valid_ip']            = "s phải là IP hợp lệ.";
$lang['form_validation_min_length']            = "{field} phải có ít nhất {param} ký tự.";
$lang['form_validation_max_length']            = "{field} không được vượt quá {param} ký tự.";
$lang['form_validation_exact_length']        = "{field} phải có chính xác {param} ký tự.";
$lang['form_validation_alpha']                = "{field} chỉ chứa các chữ cái từ a-z, A-Z.";
$lang['form_validation_alpha_numeric']        = "{field} chỉ chứa các chữ cái (a-z, A-Z) và chữ số (0-9).";
$lang['form_validation_alpha_numeric_spaces']    = 'The {field} field may only contain alpha-numeric characters and spaces.';
$lang['form_validation_alpha_dash']            = "{field} chỉ có thể chứa ký tự chữ số (a-z, A-Z, 0-9), dấu gạch dưới (_), và dấu gạch ngang (-).";
$lang['form_validation_numeric']            = "{field} chỉ có thể chứa số (0-9).";
$lang['form_validation_is_numeric']            = "{field} chỉ có thể nhận giá trị số học.";
$lang['form_validation_integer']            = "{field} phải là số nguyên.";
$lang['form_validation_regex_match']        = "{field} không đúng cú pháp.";
$lang['form_validation_matches']            = "{field} không khớp với {param}.";
$lang['form_validation_differs']        = 'The {field} field must differ from the {param} field.';
$lang['form_validation_is_unique']             = "{field} đã có người sử dụng.";
$lang['form_validation_is_natural']            = "{field} chỉ có thể nhận giá trị nguyên dương.";
$lang['form_validation_is_natural_no_zero']    = "{field} chỉ nhận giá trị lớn hơn 0.";
$lang['form_validation_decimal']            = "{field} chỉ nhận giá trị thập phân.";
$lang['form_validation_less_than']            = "{field} phải bé hơn {param}.";
$lang['form_validation_less_than_equal_to']    = 'The {field} field must contain a number less than or equal to {param}.';
$lang['form_validation_greater_than']        = "{field} phải lớn hơn {param}.";
$lang['form_validation_greater_than_equal_to']    = 'The {field} field must contain a number greater than or equal to {param}.';
$lang['form_validation_error_message_not_set']    = 'Unable to access an error message corresponding to your field name {field}.';
$lang['form_validation_callback_verify_singers'] = 'Danh sách ca sĩ không hợp lệ';
$lang['form_validation_callback_verify_authors'] = 'Danh sách tác giả không hợp lệ';
$lang['form_validation_callback_verify_genres'] = 'Danh sách thể loại không hợp lệ';
$lang['form_validation_callback_verify_chords'] = 'Danh sách hợp âm không hợp lệ';
$lang['form_validation_callback_verify_key'] = 'Tông không tồn tại';

/* End of file form_validation_lang.php */
/* Location: ./system/language/english/form_validation_lang.php */
