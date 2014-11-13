<?php

//begin class emplyment
class Employment {

	//member vars
	var $Name;
	var $Years;
	var $Titles;
	var $Duties;

}//end class Employment


//begin class education
class Education {
	var $Name;
	var $Location;
	var $Degree;
	var $Achievements;
	var $Courses;

}//end class Education


//begin class skills
class SkillSet {

	var $Subject;
	var $Abilities;

}//end class Skills

//begin class
class Resume {

	/* member vars
	**********************************/
	var $Name;
	var $Street;
	var $City;
	var $State;
	var $Zip;
	var $Phone;
	var $Email;
	var $LinkedIn;
	var $Summary;

	var $LopezNegrete;
	var $GibneyAnthony;
	var $ComputerPoint;
	
	var $Kaplan;
	var $Tci;

	var $ProgrammingLangs;
	var $NetworkingTechs;
	var $Software;
	var $Hardware;
	var $Platforms;

	var $Certifications;


	/* constructor
	**********************************/
	function __Construct() {
		$this->Name = "Steven Chin";
		$this->Street = "11821 Jelicoe Dr";
		$this->City = "Houston";
		$this->State = "TX";
		$this->Zip = "77047";
		$this->Phone = "(347) 328-3628";
		$this->Email = "<a href='mailto:e.nigma@inbox.com'>e.nigma@inbox.com</a>";
		$this->LinkedIn = "<a href='https://www.linkedin.com/in/chinsteve'>www.linkedin.com/in/chinsteve</a>";
		$this->Summary = "Seasoned Front-End to Back-End developer with 5+ years development and support experience obtained from positions such as a Law Firm and Trading Floors. Multi-faceted, energetic and reliable, rounded out with knowledge of current web development languages and 7 years support and programming experience in a law firm environment with 4 years on trading floors. Professional, goal driven, and proficient in a diverse skill set including HTML, JavaScript, CSS, jQuery, Visual Basic, C#, VBA, and MS Office Software. Baccalaureate degree in software and web application development peppered with computer software classes including hands-on labs.";

		/*employment
		******************************/
		//LopezNegrete
		$this->LopezNegrete = new Employment();
		$this->LopezNegrete->Name = "Lopez Negrete Communications";
		$this->LopezNegrete->Years = "2014 - 2014";
		$this->LopezNegrete->Titles = array("Web Developer");
		$this->LopezNegrete->Duties = array(
			"Used PHP, .NET 3.5+, C#, SQL, MySQL to develop systems",
			"Created HTML / PHP pages using responsive and adaptive design techniques",
			"Used Version Control Software (SVN)",
			"Found and fixed problematic code for web system connections",
			"Used site tracking systems such as Google Analytics",
			"Used Facebook, Twitter API",
			"Created AD Banners using Adobe Suite CC including Flash, Photoshop, Illustrator, etc…"
		);

		//Gibney
		$this->GibneyAnthony = new Employment();
		$this->GibneyAnthony->Name = "Gibney Anthony & Flaherty, LLP"; 
		$this->GibneyAnthony->Years = "2007 - 2014";
		$this->GibneyAnthony->Titles = array("Software Development Engineer","Front-End Developer","Back-End Developer","Technical Support Specialist");
		$this->GibneyAnthony->Duties = array(
			array(
				"Used C#.Net to create a ‘Check-request’ System including Win-Forms with MS SQL for backend storage and Visual Studio Express IDE",
				"Used VBA (Visual Basic 6) to create different Macro applications (Barclay’s Reporting, Verizon User Reports, etc)",
				"Used VB.Net to create an e-Mailer System complete with MS SQL for backend storage using Visual Studio Express IDE",
				"Used ASP.NET to code various user requested software using Visual Studio Express IDE",
				"Currently working on Objective-C / Java code for company mobile solutions using Apple XCode / NetBeans IDE"
			),
			array(
				"Created an inward facing Ticketing System and HTML 5 with CSS3 for design and JavaScript / jQuery for intractability",
				"Used HTML 4/5 to build an inward facing Knowledgebase website using CSS3 for design and JavaScript for DOM interaction",
				"Created centralized website housing particular requesting systems using Bootstrap framework including modernizr",
				"Created responsive inward facing company webpages using Foundation framework"
			),
			array(
				"Created an inward facing Ticketing System using PHP 4/5 for back end and MySQLi for storage",
				"Used MS SQL for a Check Request System project coded with C#.NET using Visual Studio Express IDE",
				"Created company web applications using Scripting languages (PHP, ASP, VB)",
				"Used MySQLi for inward facing in-house ticketing system using Linux server"
			),
			array(
				"Daily Hardware Troubleshooting (Dell, HP, Apple Mac Desktop/MacBook)",
				"Daily Software Troubleshooting on WINXP, WIN7 Environment (Microsoft Office, Citrix, Proprietary Software)",
				"Daily Maintenance of VoIP Phones, PBX Systems, HP Copiers / Printers",
				"Responsible for company iSCUSI SAN / NAS Solution using TCP/IP IPv4 LAN",
				"Network Troubleshooting w/ T1, T3, RJ11, and RJ45",
				"Maintenance w/ Dell Servers (physical and virtual) for Router, Firewall, Fileserver, Domain Controllers using MS Windows Server v. 2008 R2",
				"Responsible for VMWare setup and maintenance / computer hardware transfers",
				"Responsible for mobile device repair and configuration (Blackberry, iPhone, iPad, etc.)",
				"Novice w/ ESXi servers for virtual environments",
				"Novice w/ Microsoft SCCM management tools"
			)
		);

		//computer point
		$this->ComputerPoint = new Employment();
		$this->ComputerPoint->Name = "Computer Point, Inc";
		$this->ComputerPoint->Years = "2003 - 2007";
		$this->ComputerPoint->Titles = array("IT Professional Analyst (BNP Paribas) ");
		$this->ComputerPoint->Duties = array(
			"Technical support for WIN NT4.0 SP4 workstations",
			"Technical support for Hardware components (replaced and configured)",
			"Responsible for re-image of computers",
			"Resolution of core package problems (MS Office, Proprietary software, etc.)",
			"Responsible for relocation of computers and users",
			"Responsible for over 700 users in total daily issues on a trading floor",
			"SMS / MDT distribution and testing of new software packages including upgrades",
			"Built HTML & CSS webpages w/ team of developers",
			"Familiarized myself w/ networking using RJ45, Rj11"
		);


		/*education
		*******************************/

		//kaplan
		$this->Kaplan = new Education();
		$this->Kaplan->Name = "Kaplan University";
		$this->Kaplan->Location = "Davenport, Iowa";
		$this->Kaplan->Degree = "Bachelor of Science In Information Technology w/ a Concentration in Programming";
		$this->Kaplan->Achievements = "PRESIDENT’S LIST HONORS - Presented for successfully maintaining a G.P.A. of 3.96 or above";
		$this->Kaplan->Courses = array(
			"Advanced Visual Basic I-II",
			"Advanced Java Programming",
			"Advanced Object Oriented Programming",
			"Advanced Web Languages for Web Design",
			"Component Based Programming Using C#",
			"Database Management",
			"Database Design",
			"Intro to Java Programming",
			"Intro to Web Design",
			"Intro to Visual Basic",
			"LAN Concepts",
			"Project Management",
			"System Analysis and Design",
			"Structured Query Languages",
			"Technology Infrastructure",
			"Web Servers and Security",
			"Web Programming Development"
		);

		//TCI
		$this->Tci = new Education();
		$this->Tci->Name = "Technical Career Institutes";
		$this->Tci->Location = "New York, NY";
		$this->Tci->Degree = "Associate in Occupational Studies Industrial Electronics Technology - Computer Technology Track";
		$this->Tci->Achievements = "";
		$this->Tci->Courses = array(
			"Computer Applications",
			"Digital Logic",
			"Digital Systems II",
			"Management of Technology",
			"Computer Networking",
			"Digital Systems I",
			"Electronic Circuits",
			"Networking I-IV"
		);

		/*skills
		*******************************/
		$this->ProgrammingLangs = new SkillSet();
		$this->ProgrammingLangs->Subject = "Programming Languages";
		$this->ProgrammingLangs->Abilities = array(
			"PHP 4 / 5",
			"ASP / ASP.NET",
			"Visual Basic",
			"Visual Basic.NET",
			"Foundation Framework",
			"Visual Basic for Applications",
			"C# / C#.NET",
			"C++ / C++.NET",
			"ADO (ActiveX Data Objects)",
			"PDO (PHP Data Objects)",
			"HTML 4 / 5",
			"XHTML",
			"XML",
			"JAVA",
			"JavaScript",
			"jQuery",
			"CSS3",
			"SQL / T-SQL",
			"MySQL / MySQLi",
			"Objective-C",
			"MVC Architecture",
			"Twitter Bootstrap",
			"JSON"
		);

		$this->NetworkingTechs = new SkillSet();
		$this->NetworkingTechs->Subject = "Networking Technologies";
		$this->NetworkingTechs->Abilities = array(
			"LAN",
			"WAN",
			"Voice Over IP",
			"Firewalls",
			"DHCP",
			"SMTP",
			"FTP",
			"Routers",
			"Dell Switches",
			"TCP/IP",
			"VPNs"
		);


		$this->Software = new SkillSet();
		$this->Software->Subject = "Software";
		$this->Software->Abilities = array(
			"Microsoft Word",
			"Microsoft Outlook",
			"Microsoft Powerpoint",
			"Microsoft Excel",
			"Visual C# Express",
			"Visual Studio Express – Desktop",
			"Zendesk",
			"ProLaw",
			"Immigration Tracker",
			"Norton Antivirus",
			"Visual Web Developer Express",
			"Visual Studio Express - Web",
			"Dreamweaver",
			"Microsoft Access",
			"Adobe PhotoShop",
			"ShoreTel",
			"Xcode",
			"Visual Basic Express"
		);


		$this->Hardware = new SkillSet();
		$this->Hardware->Subject = "Hardware";
		$this->Hardware->Abilities = array(
			"Dell Computers",
			"Apple",
			"SCCM",
			"Cisco",
			"HP Computers"
		);


		$this->Platforms = new SkillSet();
		$this->Platforms->Subject = "Platforms";
		$this->Platforms->Abilities = array(
			"Windows 2003/2008 R2 Server",
			"Windows NT/2000/XP",
			"Windows 7",
			"Windows 8",
			"MAC OS X",
			"SQL Server 2008",
		);

		/*certifications
		*******************************/
		$this->Certifications = array(
			"CompTIA Network+",
			"New York State Drivers License"
		);


	}//end constructor







}//end class Resume

?>
