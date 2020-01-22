-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2020 at 01:24 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hubb_events`
--

-- --------------------------------------------------------

--
-- Table structure for table `application_settings`
--

CREATE TABLE `application_settings` (
  `id` int(10) NOT NULL,
  `name` text DEFAULT NULL,
  `value` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `application_settings`
--

INSERT INTO `application_settings` (`id`, `name`, `value`) VALUES
(3, 'site Title', 'HUBB Events'),
(4, 'Search engine Keywords', 'keyword1, keyword2'),
(5, 'Search engine Description', 'Provides online usefull business tools for saving ...'),
(6, 'Message For Closing the system', 'Sorry, System is closed due to a maintenance, please come back in 30 minutes'),
(7, 'Close system for Maintenance ', '2'),
(8, 'Suspend New subscriptions ', '1'),
(9, 'Suspend New subscriptions Message', 'Sorry, system has suspended new accounts registration till YYYY-mm-dd'),
(10, 'Email to send From:', 'donot-reply@hubbucs.com'),
(11, 'Support Email:', 'support@hubbucs.com'),
(12, 'Stripe Test public Key:', ''),
(13, 'Stripe Test Secret Key:', ''),
(14, 'Stripe Live public Key:', ''),
(15, 'Stripe Live Secret Key:', ''),
(16, 'paypal key:', ''),
(17, 'Accept Bitoin', '2'),
(18, 'Stripe Live/Test', '2'),
(19, 'Email Footer', 'Regards, \n Support Team \n Client ID: [XXXXXX] \n Please do not respond to this message. It comes from an unattended mailbox.'),
(20, 'User must confirm his email after signup - only in new accounts', '2'),
(26, 'Allow Adding Funding to Account for lateral usage', '1'),
(27, 'adding funds to Account Min. Payment', '50'),
(45, 'Allow 1 Month renewal', '1'),
(46, 'Allow 3 Months renewal', '2'),
(47, 'Allow 6 Months renewal', '2'),
(48, 'Allow 9 Months renewal', '2'),
(49, 'Allow 12 Months renewal', '1'),
(50, 'Allow 24 Months renewal', '2'),
(51, 'Allow 36 Months renewal', '2'),
(52, 'Discount for 3 Months %', '0'),
(53, 'Discount for 6 Months %', '0'),
(54, 'Discount for 9 Months %', '0'),
(55, 'Discount for 12 Months %', '0'),
(56, 'Discount for 24 Months %', '0'),
(57, 'Discount for 36 Months %', '0'),
(58, 'Invoice Payee Header Info', ''),
(59, 'Reports Print Title', 'system Report'),
(60, 'Tag to be added to Hubb UCS customers', 'UCS Customer'),
(61, 'Emails to send to notifications if new customer signs up (comma seperated or leave blank)', ''),
(70, 'Domain for Landing Pages', 'TotoElKebeer.com'),
(71, 'Google Analytics ID', ''),
(72, 'Always show a bar to upgrade for free accounts', '1'),
(86, '# of months to keep attachment for Free users', '2'),
(87, '# of months to keep attachment for paid users', '84'),
(88, 'Single Emails service :', '2'),
(89, 'sendGrid.com API key', ''),
(90, 'Elastic Mail.com API key', ''),
(91, 'Elastic Mail.com Public Account ID', ''),
(92, 'Email Campaigns Service', '3'),
(93, 'Fair Usage Limit related to # of Contacts 10X, 20X, etc..', '10'),
(94, 'Marketing Landing Pages - Fair Usage Limit related to allowed # of pages 10X, 20X, etc..', '5'),
(95, 'Marketing WebForms - Fair Usage Limit related to allowed # of WebForms 10X, 20X, etc..', '5'),
(96, 'Marketing Popups - Fair Usage Limit related to allowed # of Popups 10X, 20X, etc..', '5'),
(97, 'IP or domain for VoIP APIs (with http:// or https://)', '18.224.25.91'),
(98, 'username for Bandwidth.com', ''),
(99, 'password for Bandwidth.com', ''),
(100, 'Activate Service1: CRM service', '1'),
(101, 'Allow Free Trial for CRM service ', '1'),
(102, 'Max Nnumber of users during trial for CRM service', '1'),
(103, 'Max Nnumber of days of trial for CRM service', '1'),
(104, 'Activate Service2:  VoIP service', '2'),
(105, 'Allow Free Trial for VoIP service', '1'),
(106, 'Max Nnumber of users during trial for VoIP service ', '1'),
(107, 'Max Nnumber of days of trial for VoIP service', '1'),
(108, 'Activate Service3:  Events service ', '2'),
(109, 'Allow Free Trial for Events service', '1'),
(110, 'Max Nnumber of users during trial for Events service', '1'),
(111, 'Max Nnumber of days of trial for Events service ', '1'),
(112, 'Activate Service4: Team Collaboration', '2'),
(113, 'Allow Free Trial for Team Collaboration', '1'),
(114, 'Max Nnumber of users during trial for Team Collaboration', '1'),
(115, 'Max Nnumber of days of trial for Team Collaboration', '1'),
(116, 'Activate Service5: Expenses & Mileage', '2'),
(117, 'Allow Free Trial for Expenses & Mileage ', '1'),
(118, 'Max Nnumber of users during trial for Expenses & Mileage', '1'),
(119, 'Max Nnumber of days of trial for Expenses & Mileage', '1'),
(120, 'Activate Service6: P.O.S ', '2'),
(121, 'Allow Free Trial for P.O.S ', '1'),
(122, 'Max Nnumber of users during trial for P.O.S', '1'),
(123, 'Max Nnumber of days of trial for P.O.S', '1'),
(124, 'Activate Service7: Calendar ', '2'),
(125, 'Allow Free Trial for Calendar ', '1'),
(126, 'Max Nnumber of users during trial for Calendar', '1'),
(127, 'Max Nnumber of days of trial for Calendar', '1'),
(128, 'Activate Service8: E-Commerce', '2'),
(129, 'Allow Free Trial for E-Commerce ', '1'),
(130, 'Max Nnumber of users during trial for E-Commerce', '1'),
(131, 'Max Nnumber of days of trial for E-Commerce', '1'),
(132, 'Activate Service9: Payroll', '2'),
(133, 'Allow Free Trial for Payroll ', '1'),
(134, 'Max Nnumber of users during trial for Payroll', '1'),
(135, 'Max Nnumber of days of trial for Payroll', '1'),
(136, 'Activate Service10: Accounting', '2'),
(137, 'Allow Free Trial for Accounting ', '1'),
(138, 'Max Nnumber of users during trial for Accounting', '1'),
(139, 'Max Nnumber of days of trial for Accounting', '1'),
(140, 'Activate Service11: Warehouse & Inventory', '2'),
(141, 'Allow Free Trial for Warehouse & Inventory ', '1'),
(142, 'Max Nnumber of users during trial for Warehouse & Inventory', '1'),
(143, 'Max Nnumber of days of trial for Warehouse & Inventory', '1'),
(144, 'Activate Service12: Shipping Tracking', '2'),
(145, 'Allow Free Trial for Shipping Tracking ', '1'),
(146, 'Max Nnumber of users during trial for Shipping Tracking', '1'),
(147, 'Max Nnumber of days of trial for Shipping Tracking', '1'),
(148, 'Activate Service13: Web Site Builder', '2'),
(149, 'Allow Free Trial for Web Site Builder ', '1'),
(150, 'Max Nnumber of users during trial for Web Site Builder', '1'),
(151, 'Max Nnumber of days of trial for Web Site Builder', '1'),
(152, 'Activate Service14: Project Management/Trouble Ticket', '2'),
(153, 'Allow Free Trial ', '1'),
(154, 'Max Nnumber of users during trial', '1'),
(155, 'Max Nnumber of days of trial', '1'),
(200, 'domain for accounts context', 'hubbvoipdev.com'),
(201, 'Account ID for DID', '5004312'),
(202, 'SiteId (Sub-Account ID) for DID', '20225'),
(203, 'PeerID for DID (Optional)', ''),
(204, '# of days to Save Call Recordings', '90'),
(205, '# of days to Save VoiceMail', '90'),
(206, 'SMS Application ID on Bandwidth', ''),
(207, 'SMS Application username on Bandwidth', ''),
(208, 'SMS Application password on Bandwidth', ''),
(209, 'SMS Max limit on Bandwidth', ''),
(210, 'Zoom api key', ''),
(211, 'Zoom api secret', ''),
(300, 'Site Logo', ''),
(1000, 'Customer Portal Domain', 'hubbdesk.com'),
(1001, 'Invoice Start Number', '506498'),
(5000, 'CurrencyLayer.com API Access Code', ''),
(5001, 'google_clientID', '797651050350-feulri2e97b1qutcpd35e87trq6h37fp.apps.googleusercontent.com'),
(5002, 'google_clientSecret', '_MGku3Ad-8alzxaLC0Rgv65_'),
(5003, 'google_redirectUri', 'https://hubbucs.com/site/Gauth.php'),
(5004, 'google_api_key', 'AIzaSyC-aDzlOv5t1ArbluS49ozfwmDtliS3mls'),
(5005, 'microsoft_clientID', '6eb314f9-9baf-4fc2-a876-d477cdc0fa3d'),
(5006, 'microsoft_clientSecret', 'o-MFeE3egPNcsC.Mlp2LhBuvVrNV[01:'),
(5007, 'microsoft_redirectUri', 'https://hubbucs.com/site/Microsoftauth.php'),
(5008, 'Allow_sign_in_Google', '1'),
(5009, 'Allow_sign_in_Microsoft', '1');

-- --------------------------------------------------------

--
-- Table structure for table `inhouse_humanresources`
--

CREATE TABLE `inhouse_humanresources` (
  `id` int(10) NOT NULL,
  `uniqueID` text DEFAULT NULL,
  `referedBy` text DEFAULT NULL,
  `partnerSlug` text DEFAULT NULL,
  `partnerLogo` text DEFAULT NULL,
  `allowed_as_partner` int(1) DEFAULT 1,
  `Firstname` text DEFAULT NULL,
  `Middlename` text DEFAULT NULL,
  `Lastname` text DEFAULT NULL,
  `Othername` text DEFAULT NULL,
  `country_prefix` varchar(6) DEFAULT '1',
  `Mobile` text DEFAULT NULL,
  `Title` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `email_confirmed` int(1) DEFAULT 1,
  `confirmation_code` text DEFAULT NULL,
  `Personal_Picture` text DEFAULT NULL,
  `gender` int(1) DEFAULT 1,
  `Birthdate` text DEFAULT NULL,
  `marital` int(2) DEFAULT 1,
  `Additional_Details` text DEFAULT NULL,
  `national_ID_number` text DEFAULT NULL,
  `Nationality` int(10) DEFAULT 0,
  `scanned_copy_ID` text DEFAULT NULL,
  `time_zone` text DEFAULT NULL,
  `country_id` int(3) DEFAULT 3,
  `Notes_show_otherCompanies` text DEFAULT NULL,
  `can_drive` int(1) DEFAULT 1,
  `Driving_license_number` text DEFAULT NULL,
  `driving_lic_issueDate` text DEFAULT NULL,
  `driving_lic_expireDate` text DEFAULT NULL,
  `scanned_copy_drivingLicense` text DEFAULT NULL,
  `driving_lic_renewRemindDays` int(5) DEFAULT 0,
  `eligible_Company_Car` int(1) DEFAULT 1,
  `notes_on_driving` text DEFAULT NULL,
  `assigned_vehicle` text DEFAULT NULL,
  `vehicle_number` text DEFAULT NULL,
  `plate_number` text DEFAULT NULL,
  `driving_license_state` text DEFAULT NULL,
  `Username` text DEFAULT NULL,
  `Password` text DEFAULT NULL,
  `Last_Logged_Time` text DEFAULT NULL,
  `Last_Logged_Device_details` text DEFAULT NULL,
  `Last_Logged_IP` text DEFAULT NULL,
  `Last_Logged_Location_lat` text DEFAULT NULL,
  `Last_Logged_Location_long` text DEFAULT NULL,
  `Last_Logged_Location_descrption` text DEFAULT NULL,
  `register_DateTime` text DEFAULT NULL,
  `register_Logged_Device_details` text DEFAULT NULL,
  `register_Logged_IP` text DEFAULT NULL,
  `register_Logged_Location_lat` text DEFAULT NULL,
  `register_Logged_Location_long` text DEFAULT NULL,
  `register_Logged_Location_descrption` text DEFAULT NULL,
  `facebook` text DEFAULT NULL,
  `twitter` text DEFAULT NULL,
  `yahooMessenger` text DEFAULT NULL,
  `skype` text DEFAULT NULL,
  `linkedin` text DEFAULT NULL,
  `noteForCommunications` text DEFAULT NULL,
  `default_language` varchar(5) DEFAULT 'en',
  `email_notifications` int(1) DEFAULT 1,
  `sms_notifications` int(1) DEFAULT 2,
  `app_notifications` int(1) DEFAULT 1,
  `added_by_device` int(1) DEFAULT 1,
  `default_account_id` int(10) DEFAULT 0,
  `account_status` int(1) DEFAULT 1,
  `google_token` text DEFAULT NULL,
  `google_refresh_token` text DEFAULT NULL,
  `google_calenderId` text DEFAULT NULL,
  `google_email` text DEFAULT NULL,
  `microsoft_token` text DEFAULT NULL,
  `microsoft_refresh_token` text DEFAULT NULL,
  `microsoft_calenderId` text DEFAULT NULL,
  `zoom_id` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inhouse_humanresources`
--


-- --------------------------------------------------------

--
-- Table structure for table `subscription_accounts`
--

CREATE TABLE `subscription_accounts` (
  `id` int(10) NOT NULL,
  `uniqueID` text DEFAULT NULL,
  `external_refernce_id` text DEFAULT NULL,
  `refered_by` text DEFAULT NULL,
  `files_folder_path` text DEFAULT NULL,
  `added_by_id` int(10) DEFAULT 0,
  `dateTime_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `API_key` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `industry` text DEFAULT NULL,
  `number_of_employees` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `backup_email` text DEFAULT NULL,
  `companyWebSite` text DEFAULT NULL,
  `address1` text DEFAULT NULL,
  `address2` text DEFAULT NULL,
  `country_id` int(10) DEFAULT 3,
  `State_id` int(10) DEFAULT 0,
  `City_id` int(10) DEFAULT 0,
  `City_name` text DEFAULT NULL,
  `Zip` text DEFAULT NULL,
  `Acc_telephone1` text DEFAULT NULL,
  `Acc_telephone2` text DEFAULT NULL,
  `Acc_mobile1` text DEFAULT NULL,
  `Acc_mobile2` text DEFAULT NULL,
  `Fax_number` text DEFAULT NULL,
  `Notes` text DEFAULT NULL,
  `notes_forSuprtAdmin` text DEFAULT NULL,
  `Logo` text DEFAULT NULL,
  `branding_subscribed` int(1) DEFAULT 2,
  `companyShortURL` text DEFAULT NULL,
  `facebook_page` text DEFAULT NULL,
  `twitter_page` text DEFAULT NULL,
  `linkedin_page` text DEFAULT NULL,
  `default_lang` varchar(5) DEFAULT 'en',
  `default_currency` int(3) DEFAULT 3,
  `currency_format` varchar(4) DEFAULT ',S.',
  `Send_emails_notifications` int(1) DEFAULT 1,
  `SMS_notifications` int(2) DEFAULT 2,
  `names_showing` int(1) DEFAULT 2,
  `AccountStatus` int(2) DEFAULT 1,
  `date_show_format` varchar(5) DEFAULT 'm-d-Y',
  `time_show_format` int(1) DEFAULT 1,
  `time_zone` varchar(35) DEFAULT 'America/New_York',
  `stripe_customer_id` text DEFAULT NULL,
  `km_or_mile` int(1) DEFAULT 1,
  `invoice_number_auto_manual` int(1) DEFAULT 0,
  `invoice_number_start` text DEFAULT NULL,
  `allow_project_creation_users` int(1) DEFAULT 1,
  `week_start_day` int(1) DEFAULT 1,
  `services_bundle_id` int(10) DEFAULT 0,
  `services_bundle_expire_date` text DEFAULT NULL,
  `service1_Auto_Renew` int(1) DEFAULT 1,
  `service1_subscription_expiryDate` text DEFAULT NULL,
  `service1_number_of_users_allowed` int(4) DEFAULT -1,
  `service1_number_of_months` int(3) DEFAULT 1,
  `service1_package_start_day` int(2) DEFAULT 1,
  `service1_status` int(1) DEFAULT 2,
  `service1_free_trial_status` int(1) DEFAULT 1,
  `service1_request_trial_Sent` int(1) DEFAULT 1,
  `service1_package_id` int(6) DEFAULT 0,
  `service1_number_usable_contacts` int(6) DEFAULT 0,
  `last_updated_lists_contacts` text DEFAULT NULL,
  `service1_pack_costPerMonth` decimal(10,2) DEFAULT 0.00,
  `service1_tags` int(1) DEFAULT 1,
  `service2_Auto_Renew` int(1) DEFAULT 1,
  `service2_subscription_expiryDate` text DEFAULT NULL,
  `service2_number_of_users_allowed` int(4) DEFAULT -1,
  `service2_number_of_months` int(3) DEFAULT 1,
  `service2_package_start_day` int(2) DEFAULT 1,
  `service2_status` int(1) DEFAULT 2,
  `service2_free_trial_status` int(1) DEFAULT 1,
  `service2_request_trial_Sent` int(1) DEFAULT 1,
  `service2_pack_costPerMonth` decimal(10,2) DEFAULT 0.00,
  `service2_default_ext_pass` int(6) DEFAULT 123,
  `service2_default_outbound_did` text DEFAULT NULL,
  `service2_default_inbound_extension` text DEFAULT NULL,
  `service2_package_id` int(6) DEFAULT 0,
  `service2_number_of_extension_allowed` int(4) DEFAULT 0,
  `service2_number_of_DID_allowed` int(4) DEFAULT 0,
  `service3_Auto_Renew` int(1) DEFAULT 1,
  `service3_subscription_expiryDate` text DEFAULT NULL,
  `service3_number_of_users_allowed` int(4) DEFAULT -1,
  `service3_number_of_months` int(3) DEFAULT 1,
  `service3_package_start_day` int(2) DEFAULT 1,
  `service3_status` int(1) DEFAULT 2,
  `service3_free_trial_status` int(1) DEFAULT 1,
  `service3_request_trial_Sent` int(1) DEFAULT 1,
  `service3_pack_costPerMonth` decimal(10,2) DEFAULT 0.00,
  `service14_Auto_Renew` int(1) DEFAULT 1,
  `service14_subscription_expiryDate` text DEFAULT NULL,
  `service14_number_of_users_allowed` int(4) DEFAULT 0,
  `service14_number_of_months` int(3) DEFAULT 1,
  `service14_package_start_day` int(2) DEFAULT 1,
  `service14_status` int(1) DEFAULT 2,
  `service14_free_trial_status` int(1) DEFAULT 1,
  `service14_request_trial_Sent` int(1) DEFAULT 1,
  `service14_pack_costPerMonth` decimal(10,2) DEFAULT 0.00,
  `service_14_inbound_sms_balance` int(7) DEFAULT 0,
  `service_14_outbound_sms_balance` int(7) DEFAULT 0,
  `added_by_device` int(1) DEFAULT 1,
  `wallet_balance` decimal(8,2) DEFAULT 0.00,
  `default_phone_prefix_for_contacts` int(3) DEFAULT 3,
  `country_prefix` varchar(6) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subscription_accounts`
--


-- --------------------------------------------------------

--
-- Table structure for table `users_accounts_relation`
--

CREATE TABLE `users_accounts_relation` (
  `id` int(10) NOT NULL,
  `user_id` int(10) DEFAULT 0,
  `account_id` int(10) DEFAULT 0,
  `company_id` int(10) DEFAULT 0,
  `employee_group_id` int(10) DEFAULT 0,
  `superVisor_id` int(10) DEFAULT 0,
  `account_status` int(1) DEFAULT 1,
  `Account_privilege` int(1) DEFAULT 1,
  `employee_id_otherSystem` text DEFAULT NULL,
  `employee_id` int(10) DEFAULT 0,
  `service1` int(1) DEFAULT 1,
  `service1_workgroup` int(8) DEFAULT 0,
  `service1_marketing` int(1) DEFAULT 3,
  `service1_sales` int(1) DEFAULT 3,
  `service1_Selfrecords_only` int(1) DEFAULT 1,
  `service1_tags_to_users` int(1) DEFAULT 2,
  `service2` int(1) DEFAULT 1,
  `service2_manage_extensions` int(1) DEFAULT 1,
  `service2_manage_DID` int(1) DEFAULT 1,
  `service2_view_call_log` int(1) DEFAULT 1,
  `service3` int(1) DEFAULT 1,
  `service4` int(1) DEFAULT 1,
  `service5` int(1) DEFAULT 1,
  `service6` int(1) DEFAULT 1,
  `service7` int(1) DEFAULT 1,
  `service8` int(1) DEFAULT 1,
  `service9` int(1) DEFAULT 1,
  `service10` int(1) DEFAULT 1,
  `service11` int(1) DEFAULT 1,
  `service12` int(1) DEFAULT 1,
  `service13` int(1) DEFAULT 1,
  `service14` int(1) DEFAULT 1,
  `service14_view_only_assigned` int(1) DEFAULT 1,
  `service14_can_view_contacts` int(1) DEFAULT 1,
  `service14_can_delete_entries` int(1) DEFAULT 1,
  `added_by` int(10) DEFAULT 0,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_accounts_relation`
--


--
-- Indexes for dumped tables
--

--
-- Indexes for table `application_settings`
--
ALTER TABLE `application_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inhouse_humanresources`
--
ALTER TABLE `inhouse_humanresources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription_accounts`
--
ALTER TABLE `subscription_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_accounts_relation`
--
ALTER TABLE `users_accounts_relation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application_settings`
--
ALTER TABLE `application_settings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5010;

--
-- AUTO_INCREMENT for table `inhouse_humanresources`
--
ALTER TABLE `inhouse_humanresources`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subscription_accounts`
--
ALTER TABLE `subscription_accounts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users_accounts_relation`
--
ALTER TABLE `users_accounts_relation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
