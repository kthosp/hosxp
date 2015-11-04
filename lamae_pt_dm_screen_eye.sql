-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- โฮสต์: localhost
-- เวลาในการสร้าง: 22 พ.ค. 2011  น.
-- รุ่นของเซิร์ฟเวอร์: 5.1.30
-- รุ่นของ PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- ฐานข้อมูล: `hos`
-- 

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `lamae_pt_dm_screen_eye`
-- 

CREATE TABLE `lamae_pt_dm_screen_eye` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `hn` varchar(7) DEFAULT NULL,
  `age_year` varchar(3) DEFAULT NULL,
  `dm_year` varchar(3) DEFAULT NULL,
  `hospital` varchar(100) DEFAULT NULL,
  `vstdate` date DEFAULT NULL,
  `first_screen` varchar(15) DEFAULT NULL,
  `year_screen` varchar(15) DEFAULT NULL,
  `infinity_screen` varchar(20) DEFAULT NULL,
  `va_re` varchar(10) DEFAULT NULL,
  `va_le` varchar(10) DEFAULT NULL,
  `va_ph1` varchar(10) DEFAULT NULL,
  `va_ph2` varchar(10) DEFAULT NULL,
  `dilate_be` varchar(20) DEFAULT NULL,
  `dilate_re` varchar(20) DEFAULT NULL,
  `dilate_le` varchar(20) DEFAULT NULL,
  `no_dilate` varchar(20) DEFAULT NULL,
  `no_dilate_comment` varchar(20) DEFAULT NULL,
  `no_dr_right_eye` varchar(30) DEFAULT NULL,
  `mild_npdr_right_eye` varchar(30) DEFAULT NULL,
  `moderlate_npdr_right_eye` varchar(30) DEFAULT NULL,
  `serve_npdr_right_eye` varchar(30) DEFAULT NULL,
  `pdr_right_eye` varchar(30) DEFAULT NULL,
  `dme_right_eye` varchar(30) DEFAULT NULL,
  `other_right_eye` varchar(30) DEFAULT NULL,
  `comment_right_eye` varchar(30) DEFAULT NULL,
  `no_dr_left_eye` varchar(30) DEFAULT NULL,
  `mild_npdr_left_eye` varchar(30) DEFAULT NULL,
  `moderlate_npdr_left_eye` varchar(30) DEFAULT NULL,
  `serve_npdr_left_eye` varchar(30) DEFAULT NULL,
  `pdr_left_eye` varchar(30) DEFAULT NULL,
  `dme_left_eye` varchar(30) DEFAULT NULL,
  `other_left_eye` varchar(30) DEFAULT NULL,
  `comment_left_eye` varchar(30) DEFAULT NULL,
  `screen_dx` varchar(200) DEFAULT NULL,
  `doctor_screen` varchar(40) DEFAULT NULL,
  `fu_one_year` varchar(20) DEFAULT NULL,
  `fu_six_month` varchar(20) DEFAULT NULL,
  `fu_three_month` varchar(20) DEFAULT NULL,
  `fu_refer` varchar(20) DEFAULT NULL,
  `fileupload_eye_right1` mediumblob,
  `fileupload_eye_left1` mediumblob,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=tis620 AUTO_INCREMENT=36 ;

-- 
-- dump ตาราง `lamae_pt_dm_screen_eye`
-- 
