//resume object
var oResume = {
	Name: "Steven Chin",
	Street: "11821 Jelicoe Dr",
	City: "Houston", 
	State: "TX",
	Zip: "77047",
	Email: "<a href='mailto:e.nigma@inbox.com'>E.nigma@inbox.com</a>",
	LinkedIn: "<a href='http://www.linkedin.com/in/chinsteve'>www.linkedin.com/in/chinsteve</a>",
	Summary: "Seasoned Front-End to Back-End developer with 5+ years development and support experience obtained from positions such as a Law Firm and Trading Floors. Multi-faceted, energetic and reliable, rounded out with knowledge of current web development languages and 7 years support and programming experience in a law firm environment with 4 years on trading floors. Professional, goal driven, and proficient in a diverse skill set including HTML, JavaScript, CSS, jQuery, Visual Basic, C#, VBA, and MS Office Software. Baccalaureate degree in software and web application development peppered with computer software classes including hands-on labs.",

	//employment array of objects
	Employment: 
	[
		//lopez object
		{
			Name: "Lopez Negrete Communications",
			Years: "2014 - 2014",
			Job: {
				Title: ["Web Developer"],
				Duties: [
					"Used PHP, .NET 3.5+, C#, SQL, MySQL to develop systems", 
					"Created HTML / PHP pages using responsive and adaptive design techniques", 
					"Used Version Control Software (SVN)", 
					"Found and fixed problematic code for web system connections", 
					"Used site tracking systems such as Google Analytics", 
					"Used Facebook, Twitter API", 
					"Created AD Banners using Adobe Suite CC including Flash, Photoshop, Illustrator, etc…"
				]
			}
		}, 
		//end lopez object

		//gibney object
		{
			Name: "Gibney, Anthony & Flaherty LLP", 
			Years: "2007 - 2014",
			Job: {
				Title: ["Software Development Engineer", "Front-End Developer", "Back-End Developer", "Technical Support Specialist"],
				Duties: [
					[
						"Used C#.Net to create a ‘Check-request’ System including Win-Forms with MS SQL for backend storage and Visual Studio Express IDE", 
						"Used VBA (Visual Basic 6) to create different Macro applications (Barclay’s Reporting, Verizon User Reports, etc)", 
						"Used VB.Net to create an e-Mailer System complete with MS SQL for backend storage using Visual Studio Express IDE",
						"Used ASP.NET to code various user requested software using Visual Studio Express IDE", 
						"Currently working on Objective-C / Java code for company mobile solutions using Apple XCode / NetBeans IDE"
					],
					[
						"Created an inward facing Ticketing System and HTML 5 with CSS3 for design and JavaScript / jQuery for intractability", 
						"Used HTML 4/5 to build an inward facing Knowledgebase website using CSS3 for design and JavaScript for DOM interaction", 
						"Created centralized website housing particular requesting systems using Bootstrap framework including modernizr", 
						"Created responsive inward facing company webpages using Foundation framework"
					],
					[
						"Created an inward facing Ticketing System using PHP 4/5 for backed and MySQLi for storage", 
						"Used MS SQL for a Check Request System project coded with C#.NET using Visual Studio Express IDE", 
						"Created company web applications using Scripting languages (PHP, ASP, VB)", 
						"Used MySQLi for inward facing in-house ticketing system using Linux server"
					],
					[
						"Daily Hardware Troubleshooting (Dell, HP, Apple Mac Desktop/MacBook)", 
						"Daily Software Troubleshooting on WINXP / WIN7 Environment (Microsoft Office, Citrix, Proprietary Software)", 
						"Daily Maintenance of VoIP Phones, PBX Systems, HP Copiers / Printers", 
						"Responsible for company iSCUSI SAN / NAS Solution using TCP/IP IPv4 LAN", 
						"Network Troubleshooting w/ T1, T3, RJ11, and RJ45", 
						"Maintenance w/ Dell Servers (physical and virtual) for Router, Firewall, Fileserver, Domain Controllers using MS Windows Server v. 2008 R2", 
						"Responsible for VMWare setup and maintenance / computer hardware transfers", 
						"Responsible for mobile device repair and configuration (Blackberry, iPhone, iPad, etc.)", 
						"Novice w/ ESXi servers for virtual environments", 
						"Novice w/ Microsoft SCCM management tools"
					]
				]
			}
		}, 
		// end gibney object

		//computer point object
		{
			Name: "Computer Point, Inc", 
			Years: "2003 - 2007",
			Job: {
				Title: ["IT Professional Analyst (BNP Paribas)"],
				Duties: 
				[
					"Technical support for WIN NT4.0 SP4 workstations", 
					"Technical support for Hardware components (replaced and configured)", 
					"Responsible for re-image of computers", 
					"Resolution of core package problems (MS Office, Proprietary software, etc.)", 
					"Responsible for relocation of computers and users", 
					"Responsible for over 700 users in total daily issues on a trading floor", 
					"SMS / MDT distribution and testing of new software packages including upgrades", 
					"Built HTML & CSS webpages w/ team of developers", "Familiarized myself w/ networking using RJ45, Rj11"
				]
			}
		}
		// end computer point object
	], 
	//end employment array of objects

	//education array of objects
	Education: 
	[
		//kaplan object
		{
			Name: "Kaplan University", 
			SchoolLocation: "Davenport, Iowa", 
			Degree: "Bachelor of Science In Information Technology w/ a Concentration in Programming",
			Accomplishments: "PRESIDENT’S LIST HONORS - Presented for successfully maintaining a G.P.A. of 3.96 or above",
			RelevantCoursework: [
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
			]
		},
		//end kaplan object

		//tci object
		{
			Name: "Technical Career Institutes",
			SchoolLocation: "New York, NY",
			Degree: "Associate in Occupational Studies Industrial Electronics Technology - Computer Technology Track",
			Accomplishments: "",
			RelevantCoursework: [
				"Computer Applications",
				"Computer Networking", 
				"Digital Logic", 
				"Digital Systems",
				"Digital Systems", 
				"Electronic Circuits",
				"Management of Technology",
				"Networking I-IV"
			]
		}
		//end tci object
	],
	//end education array of objects

	//skills array of objects
	Skills: 
	[
		{
			Subject: "Programming Languages",
			Ability: [
				"PHP 4 / 5",
				"ASP / ASP.NET",
				"Visual Basic",
				"Visual Basic.NET",
				"Foundation Framework",
				"Visual Basic for Applications - VB6",
				"C#",
				"C++ / C++.NET",
				"ActiveX Data Objects - ADO",
				"PHP Data Objects - PDO",
				"HTML 4 / 5",
				"Extensible Hypertext Markup Language - XHTML",
				"CSS3",
				"Extensible Markup Language - XML",
				"JAVA",
				"Javascript",
				"jQuery",
				"SQL / T-SQL",
				"MySQL / MySQLi",
				"Objective-C",
				"MVC Architecture",
				"Twitter Bootstrap",
				"JSON",
				"C#.NET"
			]
		},
		{
			Subject: "Networking Technologies",
			Ability: [
				"Local Area Networks - LAN",
				"Wide Area Networks - WAN",
				"Voice Over IP",
				"Firewalls",
				"DHCP",
				"SMTP",
				"File Transfer Protocols - FTP",
				"Routers",
				"Dell Switches",
				"TCP/IP Archetecture",
				"Virtual Private Networks - VPNs",
				""
			]
		},
		{
			Subject: "Software",
			Ability: [
				"Microsoft Word",
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
				"Visual Basic Express",
				"XAMP",
				"PHPMyAdmin",
				"Ektron",
				"Joomla"
			]
		},
		{
			Subject: "Hardware",
			Ability: [
				"Dell Computers",
				"Apple Computers",
				"Cisco Equipment",
				"HP Computers",
				""
			]
		},
		{
			Subject: "Platforms",
			Ability: [
				"Windows Server 2003/2008 R2",
				"Windows NT/2000/XP",
				"Windows 7",
				"Windows 8",
				"MAC OS X",
				"SQL Server 2008"
			]
		}
	], //end skills array of objecta


	Certifications: [
		"CompTIA Network+",
		"New York State Drivers License"
	]
};
//end oResume
