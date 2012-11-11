-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 28, 2012 at 08:45 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `tuneyourstartup`
--

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

DROP TABLE IF EXISTS `tag`;
CREATE TABLE IF NOT EXISTS `tag` (
  `tagId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `description` varchar(140) NOT NULL,
  PRIMARY KEY (`tagId`),
  UNIQUE KEY `Name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`tagId`, `name`, `description`) VALUES
(1, 'Lean Startups', 'Avoid waste and work with learning-driven development'),
(2, 'Viral', '-'),
(3, 'Engagement', '-'),
(4, 'Analytics', '-'),
(5, 'Email Campaigns', 'Engage users with transactional emails and on-demand email campaigns'),
(6, 'Payments', 'How to deal with payments in your startup?'),
(7, 'Website Optimization', 'How to optimize user experience and increase conversions?'),
(8, 'Mobile', 'What are the available tools for mobile products?'),
(9, 'A/B Tests', 'How to run A/B tests in my website?'),
(10, 'SEO', 'How to get more traffic through organic searches?'),
(11, 'User Acquisition', 'What are the concepts and tools used in user acquisition for web and mobile products?'),
(12, 'Email Marketing', 'How to engage and activate users through email marketing campaigns?'),
(13, 'Surveys', 'How to create good and easy surveys to understand your customer/user needs?'),
(14, 'Feedback', 'What is the best tool for getting user feedback?'),
(15, 'Collaboration', 'Tools that allow collaboration between many team-members in your startup'),
(16, 'Wireframing', 'What are the tools to help us build the design prototypes we need?'),
(17, 'Usability', 'How to understand customer behaviour in your website?'),
(18, 'Landing Pages', 'How to design and optimize landing pages?'),
(19, 'Heatmap', 'Where are the users clicking in your website?'),
(20, 'Mouse Tracking', 'What are the available tools for Mouse Tracking?'),
(21, 'Design', 'How can I deal with design in my startup?'),
(22, 'Development', 'What are the development tools indicated for startups?'),
(23, 'Project Management', 'How to organize projects and processes in my startup?'),
(24, 'Bug Tracking', 'What are the best tools for bug tracking systems?'),
(25, 'BIlling', 'The best tools for billing management for your startup'),
(26, 'Subscription', 'The best tools for subscription management for your startup'),
(27, 'e-Commerce', 'Tools for creating an e-Commerce business'),
(28, 'Recruiting', 'How can I find the best people for my startup'),
(29, 'Outsourcing', 'How can I find external people to help me in my startup projects?'),
(30, 'Freelance', 'How can I find external people to help me in my startup projects?'),
(31, 'Crowdfunding', 'The power of the crowd can help you build your startup'),
(32, 'SEM', 'How can I start with Search Engine Marketing for my startup?'),
(33, 'Customer Development', 'Am I creating the right products? Tools for product validation.'),
(34, 'Business Model Canvas', 'How to design and optimize the business model for my startup?'),
(35, 'Social Media', 'What are the social media tools for startups?'),
(36, 'Business Intelligence', 'How to extract and visualize important data for your startup?'),
(37, 'Product Launch', 'What are the tools to help me launch my startup?'),
(38, 'Monetization', 'Powerful tools to help you monetize your business'),
(40, 'Ads', 'How to get users through online advertisement?'),
(41, 'Gamification', 'Tools to improve engagement through game mechanics.'),
(42, 'Loyalty Programs', 'Identify and reward your most engaged users'),
(43, 'Marketing', 'Marketing for startups is different. What are the available tools?'),
(44, 'Referral Programs', 'How to increase traffic from referral?'),
(45, 'CRM', 'How to organize customer information and improve customer relationship?'),
(46, 'Forms Builders', 'Create forms and save information in the cloud.'),
(47, 'Prototyping', 'How to prototype your product before building? Save time with these tools!');

-- --------------------------------------------------------

--
-- Table structure for table `tool`
--

DROP TABLE IF EXISTS `tool`;
CREATE TABLE IF NOT EXISTS `tool` (
  `name` varchar(32) NOT NULL,
  `url` varchar(80) NOT NULL,
  `description` mediumtext NOT NULL,
  `dateCreated` datetime NOT NULL,
  `dateUpdated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `email` varchar(80) NOT NULL,
  `logoUrl` varchar(120) NOT NULL,
  `toolId` int(11) NOT NULL AUTO_INCREMENT,
  `pitch` varchar(140) NOT NULL,
  `isFeatured` int(11) NOT NULL,
  PRIMARY KEY (`toolId`),
  UNIQUE KEY `Name` (`name`,`url`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=75 ;

--
-- Dumping data for table `tool`
--

INSERT INTO `tool` (`name`, `url`, `description`, `dateCreated`, `dateUpdated`, `email`, `logoUrl`, `toolId`, `pitch`, `isFeatured`) VALUES
('Veeflow', 'http://www.veeflow.com', 'Build your viral loop now. Measure and increase virality in your website.', '2012-10-27 00:00:00', '2012-10-28 13:27:30', '', '', 1, 'Measure and increase virality in your website.', 0),
('Mixpanel', 'http://www.mixpanel.com', 'The most advanced analytics platform ever for mobile and the web.', '2012-10-27 00:00:00', '2012-10-27 00:00:00', '', '', 2, 'Actions speak louder than page views.', 0),
('Optimizely', 'www.optimizely.com', 'sasarafaaaa', '2012-10-27 00:00:00', '2012-10-28 13:32:48', '', '', 3, 'A/B testing you''ll actually use', 0),
('Google Analytics', 'http://analytics.google.com', 'The most famous tool for web analytics.', '2012-10-27 00:00:00', '2012-10-28 13:32:48', '', '', 4, 'Measure everything in your website.', 0),
('Kissmetrics', '', 'KISSmetrics helps you get actionable metrics for your business. Track every single interaction a person has with your business.\r\n', '2012-10-27 00:00:00', '2012-10-28 13:32:48', '', '', 5, 'Get to know your people.', 1),
('Recurly', 'http://www.recurly.com', 'Enterprise-class recurring billing management for your business', '2012-10-27 00:00:00', '2012-10-28 13:32:48', '', '', 6, 'Subscription Billing. Zen Simplicity.', 1),
('CrazyEgg', 'http://www.crazyegg.com', 'The Astonishing Power of Eye\r\nTracking Technology...Without the High Costs\r\nAll the most powerful secrets, tips and tricks that have EVER been written on\r\nHeat Maps and how you can apply them to your site now.', '2012-10-27 00:00:00', '2012-10-28 13:32:48', '', '', 7, 'Visualize your visitors', 1),
('ClickTale', 'http://www.clicktale.com', 'Reveal your visitors'' mouse moves, clicks and scrolls with In-Page Web Analytics', '2012-10-27 00:00:00', '2012-10-28 13:32:48', '', '', 8, 'Customer Experience Analytics', 0),
('LaunchRock', 'http://www.launchrock.com', '', '2012-10-27 00:00:00', '2012-10-28 13:32:48', '', '', 9, 'Create Viral Landing Pages', 1),
('Kick-off Labs', 'http://www.kickofflabs.com', '', '2012-10-27 00:00:00', '2012-10-28 13:32:48', '', '', 10, 'Easy landing pages and email marketing', 0),
('SEM Rush', 'http://www.semrush.com', 'PROFESSIONAL SOFTWARE\r\nFOR SEARCH AND MARKETING PROFESSIONALS', '2012-10-27 00:00:00', '2012-10-28 13:32:48', '', '', 11, 'Competitors Research in SEM', 0),
('Flurry', 'http://www.flurry.com', 'Thrive in the New App Economy.', '2012-10-27 00:00:00', '2012-10-28 13:32:48', '', '', 12, 'Metrics for apps.', 1),
('TestFlight', '', 'Freedom to build better apps.', '2012-10-27 00:00:00', '2012-10-28 13:32:48', '', '', 13, 'iOS beta-testing on the flight.', 1),
('Wufoo', 'http://www.wufoo.com', 'Wufoo is a web application that helps anybody build amazing online forms. When you design a form with Wufoo, it automatically builds the database, backend and scripts needed to make collecting and understanding your data easy, fast and fun.', '2012-10-27 00:00:00', '2012-10-28 13:32:48', '', '', 14, 'Online forms in 1 minute.', 1),
('SEO Digger', 'http://www.seodigger.com', 'Find the top ten keywords ranking to your websites', '2012-10-27 00:00:00', '2012-10-28 13:32:48', '', '', 15, 'Find the top ten keywords ranking to your websites', 0),
('Chartbeat', '', 'Know your visitors in realtime.', '2012-10-27 00:00:00', '2012-10-28 13:32:48', '', '', 16, 'realtime web analytics', 0),
('Custora', 'http://www.custora.com', '', '2012-10-27 00:00:00', '2012-10-28 13:32:48', '', '', 17, 'customer retention, churn reduction, lifetime value', 1),
('SendGrid', 'http://www.sendgrid.com', '', '2012-10-27 00:00:00', '2012-10-28 13:32:48', '', '', 18, 'email blast software', 0),
('PickFu', 'http://www.pickfu.com', '', '2012-10-27 00:00:00', '2012-10-28 13:32:48', '', '', 19, '$5 for 50 opinions in A/B testing ', 0),
('Balsamiq', 'http://www.balsamiq.com', '', '2012-10-27 00:00:00', '2012-10-28 13:32:48', '', '', 20, 'wireframing tool', 1),
('MouseFlow', '', '', '2012-10-27 00:00:00', '2012-10-28 13:32:48', '', '', 21, 'attention heatmaps, mouse tracking and video playback ', 0),
('Trello', 'http://www.trello.com', '', '2012-10-27 00:00:00', '2012-10-28 13:32:48', '', '', 22, 'Kanban and team collaboration', 1),
('Asana', 'http://www.asana.com', '', '2012-10-27 00:00:00', '2012-10-28 13:32:48', '', '', 23, 'shared to-do lists', 0),
('Kanban Pad', 'http://www.kanbanpad.com', '', '2012-10-27 00:00:00', '2012-10-28 13:32:48', '', '', 24, 'collaborative kanban board', 1),
('GetSatisfaction', 'http://www.getsatisfaction.com', '', '2012-10-27 00:00:00', '2012-10-28 13:32:48', '', '', 25, 'dialog between companies and customers', 0),
('UserVoice', 'http://www.uservoice.com', '', '2012-10-27 00:00:00', '2012-10-28 13:32:48', '', '', 26, 'UserVoice', 0),
('SpyFu', 'http://www.spyfu.com', 'SpyFu exposes the search marketing secret formula of your most successful competitors. \r\nSearch for any domain and see every place theyve shown up on Google: every keyword they have bought on Adwords, every organic rank, and every ad variation in the last 6 years.', '2012-10-28 15:56:18', '0000-00-00 00:00:00', '', '', 31, 'Know your competitors keywords', 0),
('Chartio', 'http://www.chartio.com', 'Chartio is a great-looking interface for your data that is simple to set up, easy to use and rewarding to explore.\r\n', '2012-10-28 17:11:10', '0000-00-00 00:00:00', '', '', 32, 'Charts for your business', 0),
('Clicky', 'http://www.getclicky.com', '', '2012-10-28 17:12:24', '0000-00-00 00:00:00', '', '', 33, 'Realtime web analytics', 0),
('Statsmix', ' http://statsmix.com', 'Quickly track, chart, and share any metric. From application to business metrics, create dashboards to better understand your business.', '2012-10-28 17:13:13', '0000-00-00 00:00:00', '', '', 34, 'Track metrics on custom charts and dashboards', 0),
('Ducksboard', 'http://www.ducksboard.com', 'Monitor your metrics with Ducksboard, a real time visualization of your key performance indicators.', '2012-10-28 17:14:00', '0000-00-00 00:00:00', '', '', 35, 'Your intelligence on display', 0),
('Cyfe', 'http://www.cyfe.com', 'Cyfe is an all-in-one dashboard software that helps you monitor and analyze data scattered across all your online services like Google Analytics, Salesforce, AdSense, MailChimp, Facebook, WordPress and more from one single location in real-time.\r\n', '2012-10-28 17:14:37', '0000-00-00 00:00:00', '', '', 36, 'Monitor Everything', 0),
('Mention', 'http://www.mention.net', 'Create alerts for your brand, your industry, your company, your name or your competitors and be informed in real-time about any mentions on the web and social web.', '2012-10-28 17:15:51', '0000-00-00 00:00:00', '', '', 37, 'Social media monitoring tool', 0),
('Jira', 'http://www.atlassian.com/software/jira/overview/', 'JIRA is the project tracker for teams planning, building and launching great products.', '2012-10-28 17:17:06', '0000-00-00 00:00:00', '', '', 38, 'Issue & Project Tracking', 0),
('Bittle', 'http://www.bittle-solutions.com/en/', 'Bittle can quickly and simply build dashboards and reporting directly online to control all activities of your structure.', '2012-10-28 17:18:12', '0000-00-00 00:00:00', '', '', 39, 'Online dashboard and reporting software', 0),
('Prefinery', 'https://www.prefinery.com', 'More than just a landing page, Prefinery is a complete launch platform that encourages social sharing and helps you learn from your users. Outsource your beta invite process to Prefinery!', '2012-10-28 17:22:14', '0000-00-00 00:00:00', '', '', 40, 'Beta-launch management software', 0),
('App Annie', 'http://www.appannie.com/', ' Use App Annie analytics to track downloads, sales and reviews completely for free.', '2012-10-28 17:24:04', '0000-00-00 00:00:00', '', '', 41, 'App Rankings, Analytics and Marketing Intelligence', 0),
('Burstly', 'http://www.burstly.com/', 'Burstly empowers developers and enables them to make more money', '2012-10-28 17:30:25', '0000-00-00 00:00:00', '', '', 42, 'App Monetization Tools', 0),
('TapJoy', 'https://www.tapjoy.com/', 'Reach millions of mobile customers', '2012-10-28 17:32:58', '0000-00-00 00:00:00', '', '', 43, 'Reach, Revenue, Results', 0),
('500friends', 'http://500friends.com/', 'Do you know who your most loyal customers and influencers are? How are you recognizing and rewarding them? Learn how to engage them across all of your digital and social properties.', '2012-10-28 17:34:14', '0000-00-00 00:00:00', '', '', 44, 'Social Loyalty', 0),
('HubSpot', 'http://www.hubspot.com/', 'Attract scores of high-quality leads with blogs, social media and search. Nurture sales prospects with the right content at the right time. Measure it all. HubSpot makes it possible.', '2012-10-28 17:37:54', '0000-00-00 00:00:00', '', '', 45, 'Create marketing people love', 0),
('HighRise', 'http://highrisehq.com/', 'Save and organize notes and email conversations for up to 30,000 customers and contacts.\r\nKeep track of proposals and deals. Share status with your company, department, or team.\r\nNever forget to follow-up. Get a text message or email so you never forget to make the call.', '2012-10-28 17:42:51', '0000-00-00 00:00:00', '', '', 46, 'Small Business CRM', 0),
('Zoho CRM', 'http://www.zoho.com/crm/', 'Attract, Retain and Delight More Customers. Grow Your Business Now With Zoho CRM. ', '2012-10-28 17:44:01', '0000-00-00 00:00:00', '', '', 47, 'CRM Software', 0),
('zferral', 'http://zferral.com/', 'Easily Create, Track & Manage Custom Referral Programs', '2012-10-28 17:45:23', '0000-00-00 00:00:00', '', '', 48, 'Referral and Affiliate programs', 0),
('HootSuite', 'http://hootsuite.com/', 'The leading social media dashboard to manage and measure your social networks', '2012-10-28 17:46:29', '0000-00-00 00:00:00', '', '', 49, 'Social media management', 0),
('Intercom', 'https://www.intercom.io/', 'Want to see who just started using your product?', '2012-10-28 17:47:48', '0000-00-00 00:00:00', '', '', 50, 'know more about your users', 0),
('InviteBox', 'http://invitebox.com/', 'Reach New Customers Today With a Social Referral Program.\r\nDesign and launch a referral program for your online business in minutes.\r\n', '2012-10-28 17:49:25', '0000-00-00 00:00:00', '', '', 51, 'Referral program platform', 0),
('CrowdTap', 'http://corp.crowdtap.com/#welcome', 'Identify and Activate Passionate Consumers at Scale', '2012-10-28 17:50:40', '0000-00-00 00:00:00', '', '', 52, 'Influencer Marketing Platform', 0),
('Postmark', 'http://postmarkapp.com/', 'Postmark removes the headaches of delivering and parsing transactional email for webapps with minimal setup time and zero maintenance. We have years of experience getting email to the inbox, so you can work and rest easier.', '2012-10-28 17:53:01', '0000-00-00 00:00:00', '', '', 53, 'Email delivery for web apps', 0),
('Mad Mimi', 'http://postmarkapp.com/', 'Mad Mimi is the easiest way to create, send, share and track email newsletters online. Mad Mimi is for people who want email marketing to be simple. ', '2012-10-28 17:53:44', '0000-00-00 00:00:00', '', '', 54, 'https://www.madmimi.com/', 0),
('SendGrid', 'http://sendgrid.com/', 'SendGrid cloud-based email infrastructure relieves businesses of the cost and complexity of maintaining custom email systems. SendGrid provides reliable delivery, scalability and real-time analytics along with flexible APIs that make custom integration a breeze.', '2012-10-28 17:55:19', '0000-00-00 00:00:00', '', '', 55, 'Email delivery. simplified.', 0),
('Campaign Monitor', 'http://www.campaignmonitor.com/', 'Campaign Monitor makes it easy to attract new subscribers, send them beautiful email newsletters and see stunning reports on the results.', '2012-10-28 17:56:13', '0000-00-00 00:00:00', '', '', 56, 'Beautiful email newsletters.', 0),
('emma', 'http://myemma.com/', '', '2012-10-28 17:57:08', '0000-00-00 00:00:00', '', '', 57, 'smart, stylish email marketing', 0),
('Postcron', 'http://postcron.com/', 'Write the text that you want to share.\r\nSelect the page.\r\nSpecify the date and time.\r\nCollaborate with other members on your team.', '2012-10-28 17:58:15', '0000-00-00 00:00:00', '', '', 58, 'Facebook publishing scheduler', 0),
('Mailjet', 'http://www.mailjet.com/', 'Mailjet is a real-time Cloud Emailing platform: scalable, agile and flexible!', '2012-10-28 17:58:59', '0000-00-00 00:00:00', '', '', 59, 'Cloud Emailing', 0),
('Ask Your Target Market', 'http://aytm.com/', 'AYTM has reinvented the world of market research by bringing the power of consumer insights to everyone, not just those in big companies with big budgets.', '2012-10-28 18:01:34', '0000-00-00 00:00:00', '', '', 60, 'ONline Marketing Research', 0),
('Ethnio', 'http://ethn.io/', 'Place one line of JavaScript on your site, then intercept visitors live for research.', '2012-10-28 18:02:35', '0000-00-00 00:00:00', '', '', 61, 'Recruiting for User Research', 0),
('Qualtrics', 'https://www.qualtrics.com/', 'Sophisticated Research Made Simple\r\nCollect. Analyze. Act.', '2012-10-28 18:03:20', '0000-00-00 00:00:00', '', '', 62, 'Online Survey Software', 0),
('Qualaroo', 'https://qualaroo.com/', 'Target Surveys & Nudges to Site Visitors.\r\nThe Only Surveys that Can Improve Results in Realtime.', '2012-10-28 18:04:21', '0000-00-00 00:00:00', '', '', 63, 'Free Online Surveys', 0),
('Form Assembly', 'http://www3.formassembly.com/', 'With FormAssembly, there no faster way to get your web forms ready and start collecting the data that matters to you, today.', '2012-10-28 18:07:04', '0000-00-00 00:00:00', '', '', 64, 'Design Web Forms and Collect Data', 0),
('Just In Mind', 'http://www.justinmind.com/', 'The best platform to define web and mobile apps\r\nwith rich interactive wireframes', '2012-10-28 18:12:28', '0000-00-00 00:00:00', '', '', 65, 'rich interactive wireframes', 0),
('inVision', 'http://www.invisionapp.com/', 'Transform Your Designs Into Beautiful, Interactive Web & Mobile Mockups', '2012-10-28 18:14:29', '0000-00-00 00:00:00', '', '', 66, 'mockup and UI prototyping', 0),
('Axure', 'http://www.axure.com/', 'Axure RP is the standard in interactive wireframe software and gives you the power to quickly and easily deliver much more than typical mockup tools.\r\nGenerate an interactive HTML website wireframe or UI mockup without coding. Then, send a link to clients or users to review. Or design an Android or iPhone app interface and view it right on your mobile device.', '2012-10-28 18:15:30', '0000-00-00 00:00:00', '', '', 67, 'Interactive wireframe software', 0),
('HotGloo', 'http://www.hotgloo.com/', 'HotGloo will change the way you create and experience wireframes.', '2012-10-28 18:16:43', '0000-00-00 00:00:00', '', '', 68, 'Future of wireframing', 0),
('MockingBird', 'https://gomockingbird.com/', 'MockingBird is an online tool that makes it easy for you to create, link together, preview, and share mockups of your website or application.', '2012-10-28 18:17:44', '0000-00-00 00:00:00', '', '', 69, 'online website wireframing', 0),
('User Testing', 'http://www.usertesting.com/', 'Usability Testing Has Never Been Easier\r\nThe fastest, cheapest way to find out why users leave your website', '2012-10-28 18:20:16', '0000-00-00 00:00:00', '', '', 70, 'Low cost usability testing', 0),
('Five Second Test', 'http://fivesecondtest.com/', 'Fivesecondtest helps you fine tune your landing pages and calls to action by analyzing the most prominent elements of your design.', '2012-10-28 18:22:14', '0000-00-00 00:00:00', '', '', 71, 'give users 5 seconds to test your page', 0),
('try my UI', 'http://www.trymyui.com/', 'Hear what users are thinking as they use your site.\r\nFind out what they like and what confuses or annoys them.', '2012-10-28 18:23:14', '0000-00-00 00:00:00', '', '', 72, 'watch videos of real people using your website', 0),
('Feedback Army', 'http://www.trymyui.com/', 'Start a usability test for your site in two minutes. Submit questions about your site and receive 10 responses from our reviewers. The cost is $20.', '2012-10-28 18:24:23', '0000-00-00 00:00:00', '', '', 73, 'simple, cheap usability testing for your website.', 0),
('Usabilla', 'http://usabilla.com/', 'Visual live feedback. We help you to connect with your website visitors. Truly understand what people think and feel while browsing your site.', '2012-10-28 18:25:20', '0000-00-00 00:00:00', '', '', 74, 'improve your user experience', 0);

-- --------------------------------------------------------

--
-- Table structure for table `toolsuggestion`
--

DROP TABLE IF EXISTS `toolsuggestion`;
CREATE TABLE IF NOT EXISTS `toolsuggestion` (
  `name` varchar(32) NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `toolId` int(11) NOT NULL,
  `toolSuggestionId` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`toolSuggestionId`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `toolsuggestion`
--

INSERT INTO `toolsuggestion` (`name`, `dateCreated`, `toolId`, `toolSuggestionId`) VALUES
('rafatool', '2012-10-28 13:49:07', 0, 1),
('rafatool2', '2012-10-28 13:50:24', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tooltag`
--

DROP TABLE IF EXISTS `tooltag`;
CREATE TABLE IF NOT EXISTS `tooltag` (
  `toolTagId` int(11) NOT NULL AUTO_INCREMENT,
  `toolId` int(11) NOT NULL,
  `tagId` int(11) NOT NULL,
  PRIMARY KEY (`toolTagId`),
  KEY `ToolId` (`toolId`,`tagId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=208 ;

--
-- Dumping data for table `tooltag`
--

INSERT INTO `tooltag` (`toolTagId`, `toolId`, `tagId`) VALUES
(1, 1, 2),
(2, 1, 4),
(3, 2, 3),
(4, 2, 4),
(5, 3, 3),
(6, 3, 4),
(7, 3, 7),
(8, 3, 9),
(9, 3, 17),
(10, 3, 18),
(11, 3, 21),
(12, 4, 4),
(13, 4, 3),
(14, 4, 7),
(15, 5, 3),
(16, 5, 4),
(17, 5, 7),
(18, 5, 17),
(19, 6, 6),
(20, 6, 25),
(21, 6, 26),
(22, 7, 4),
(23, 7, 7),
(24, 7, 9),
(25, 7, 17),
(26, 7, 19),
(27, 8, 4),
(28, 8, 7),
(29, 8, 9),
(30, 8, 17),
(31, 8, 19),
(32, 9, 2),
(33, 9, 3),
(34, 9, 7),
(35, 9, 11),
(36, 9, 18),
(37, 10, 2),
(38, 10, 3),
(39, 10, 7),
(40, 10, 11),
(41, 10, 18),
(42, 11, 10),
(43, 11, 11),
(44, 12, 3),
(45, 12, 4),
(46, 12, 8),
(47, 13, 8),
(48, 14, 13),
(49, 14, 14),
(50, 0, 0),
(51, 15, 10),
(52, 15, 11),
(53, 16, 4),
(54, 17, 3),
(55, 17, 4),
(56, 18, 3),
(57, 18, 12),
(58, 19, 9),
(59, 19, 7),
(60, 20, 16),
(61, 20, 17),
(62, 20, 21),
(63, 20, 15),
(64, 21, 17),
(65, 21, 20),
(66, 21, 21),
(67, 21, 7),
(68, 22, 23),
(69, 23, 23),
(70, 24, 23),
(71, 25, 13),
(72, 25, 14),
(78, 31, 32),
(79, 31, 10),
(80, 31, 11),
(81, 32, 4),
(82, 32, 36),
(83, 33, 4),
(84, 33, 19),
(85, 33, 17),
(86, 34, 36),
(87, 35, 36),
(88, 36, 4),
(89, 36, 36),
(90, 37, 4),
(91, 37, 36),
(92, 37, 35),
(93, 38, 24),
(94, 38, 15),
(95, 39, 36),
(96, 40, 18),
(97, 40, 37),
(98, 41, 4),
(99, 41, 36),
(100, 41, 14),
(101, 41, 8),
(102, 41, 11),
(103, 42, 40),
(104, 42, 41),
(105, 42, 8),
(106, 42, 38),
(107, 42, 11),
(108, 43, 40),
(109, 43, 8),
(110, 43, 38),
(111, 43, 11),
(112, 44, 3),
(113, 45, 12),
(114, 45, 43),
(115, 45, 32),
(116, 45, 10),
(117, 45, 35),
(118, 45, 11),
(119, 46, 45),
(120, 47, 45),
(121, 48, 43),
(122, 48, 44),
(123, 48, 11),
(124, 48, 2),
(125, 49, 4),
(126, 49, 3),
(127, 49, 43),
(128, 49, 35),
(129, 50, 4),
(130, 50, 3),
(131, 50, 35),
(132, 51, 3),
(133, 51, 44),
(134, 51, 11),
(135, 51, 2),
(136, 52, 3),
(137, 52, 42),
(138, 52, 35),
(139, 52, 11),
(140, 53, 12),
(141, 54, 5),
(142, 54, 12),
(143, 54, 3),
(144, 55, 5),
(145, 55, 12),
(146, 56, 5),
(147, 56, 12),
(148, 57, 5),
(149, 57, 12),
(150, 58, 35),
(151, 59, 5),
(152, 59, 12),
(153, 60, 33),
(154, 60, 13),
(155, 61, 33),
(156, 61, 14),
(157, 61, 13),
(158, 62, 33),
(159, 62, 14),
(160, 62, 13),
(161, 63, 33),
(162, 63, 14),
(163, 63, 13),
(164, 64, 33),
(165, 64, 14),
(166, 64, 46),
(167, 64, 13),
(168, 65, 21),
(169, 65, 47),
(170, 65, 17),
(171, 65, 16),
(172, 66, 33),
(173, 66, 21),
(174, 66, 14),
(175, 66, 47),
(176, 66, 17),
(177, 66, 16),
(178, 67, 33),
(179, 67, 21),
(180, 67, 14),
(181, 67, 47),
(182, 67, 17),
(183, 67, 16),
(184, 68, 21),
(185, 68, 47),
(186, 68, 17),
(187, 68, 16),
(188, 69, 21),
(189, 69, 47),
(190, 69, 17),
(191, 69, 16),
(192, 70, 17),
(193, 71, 14),
(194, 71, 17),
(195, 71, 7),
(196, 72, 21),
(197, 72, 14),
(198, 72, 17),
(199, 72, 7),
(200, 73, 14),
(201, 73, 13),
(202, 73, 17),
(203, 73, 7),
(204, 74, 14),
(205, 74, 13),
(206, 74, 17),
(207, 74, 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(80) NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`userId`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `email`, `dateCreated`) VALUES
(1, 'rafaeldahis@gmail.com.bra', '2012-10-28 13:15:46'),
(2, 'rafaeldahisteste@gmail.com', '0000-00-00 00:00:00'),
(4, 'rafaeldahis@gmail.com', '0000-00-00 00:00:00');
