<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConferencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $conferences = [

            [
                'name' => 'Web Summit',
                'location' => 'Lisbon, Portugal',
                'description' => 'Web Summit is a technology conference held annually in Lisbon, bringing together tech industry leaders, startups, and innovators from around the world.',
                'full_description' => "<b>Overview:</b><br/>
The Web Summit conference aims to bring together technology enthusiasts, entrepreneurs, and industry leaders to explore the latest trends and innovations in the tech world. The conference recognizes the importance of supporting and nurturing the talent and creativity of university students. This grant criteria document outlines the criteria for selecting deserving university students to receive grants for attending the Web Summit conference.<br>

<br><b>Eligibility Criteria:</b></br>
To be eligible for the grant, applicants must meet the following criteria:<br>
<ul>
<li>Must be currently enrolled as a university student.</li>
</li>Must have a genuine interest in technology and innovation.</li>
</li>Must demonstrate academic excellence or relevant achievements in the field of technology.</li>
</li>Must showcase a commitment to learning and contributing to the tech community.</li>
</ul><br>
<b>Application Process:</b><br>
The application process for the grant includes the following steps:<br>
<br>
a.&nbsp;&nbsp; Online Application: Interested university students need to submit an online application form through the Web Summit website. The form will require applicants to provide personal information, educational background, relevant achievements, and a brief statement of purpose.<br>
b.&nbsp;&nbsp; Supporting Documentation: Applicants may be required to provide supporting documentation such as academic transcripts, recommendation letters, or a portfolio of relevant projects or work.<br>
<br>
<b>Grant Selection Criteria:</b><br>
The selection of grant recipients will be based on the following criteria:<br>
<br>
<br>a. Academic Excellence: Applicants with a strong academic record and demonstrated excellence in their field of study will be given preference.
<br>b. Passion for Technology: The applicants' genuine interest and passion for technology and innovation will be assessed through their statement of purpose and supporting documentation.
<br>c. Relevance to Web Summit: Applicants who can articulate how attending the Web Summit conference aligns with their academic and career goals will be considered favorably.
<br>d. Potential Impact: The potential for the applicant's participation in the conference to have a positive impact on their academic and professional development will be evaluated.
<br>e. Diversity and Inclusion: The conference organizers are committed to promoting diversity and inclusion. Applicants from underrepresented groups or those who can contribute to the diversity of perspectives at the conference will be given special consideration.

<br>
<b>Grant Benefits:</b><br>
<br>
<br>Selected grant recipients will receive the following benefits:
<br>a. Full or partial coverage of the conference registration fee.
<br>b. Access to all conference sessions, workshops, and networking events.
<br>c. Opportunity to interact with industry leaders, entrepreneurs, and fellow attendees.
<br>d. Exposure to the latest trends and innovations in the tech industry.
<br>e. Potential mentorship or internship opportunities with conference partners or participating companies.
<br>

<b>Obligations of Grant Recipients:</b><br>
Grant recipients are expected to fulfill the following obligations:<br>

<br>a. Attend the Web Summit conference and actively participate in the sessions, workshops, and networking events.
<br>b. Share their conference experience through blog posts, social media updates, or other forms of public engagement.
<br>c. Provide feedback and insights to the conference organizers to help improve future editions of the event.
<br>d. Maintain professionalism and adhere to the conference's code of conduct and guidelines.

<br><b>Grant Application Timeline:</b>
<br>The grant application timeline for the Web Summit conference will be announced on the conference website. Applicants are encouraged to submit their applications within the specified timeframe.
<br>Note: The specific details of the grant criteria and application process may be subject to change for each edition of the conference. It is advisable for interested university students to refer to the official Web Summit website for the most up-to-date information and guidelines.",
                'created_at' => Carbon::today()->addDays(rand(0, 365))
            ],
            [
                'name' => 'TED Conference',
                'location' => 'Vancouver, Canada',
                'description' => 'TED Conference is a global gathering that features a wide range of speakers sharing ideas and insights on various topics, including technology, entertainment, design, science, and more.',
                'full_description' => "<b>Grant Criteria Document for TED Conference:</b><br>

<br><b>Introduction:</b>
<br>The TED Conference aims to bring together exceptional individuals from diverse fields to share their groundbreaking ideas and inspiring stories. In support of our commitment to empowering university students, we offer grant opportunities to eligible individuals who demonstrate exceptional potential and align with the core values of TED. This document outlines the grant criteria for university students applying to attend the TED Conference.

<br><b>Grant Criteria:</b>

<br><b>1. Significance of the Idea or Topic:</b>
<br>   - The proposed idea or topic should be innovative, thought-provoking, and have the potential to make a significant impact.
<br>   - It should align with the overarching theme of TED, which is to spread ideas worth sharing.
<br>   - The idea or topic should be relevant and engaging for university students, offering them new perspectives, knowledge, or inspiration.

<br><b>2. Alignment with TED's Mission:</b>
<br>   - The proposed idea or topic should align with TED's mission of fostering learning, curiosity, and open-mindedness.
<br>   - It should demonstrate a commitment to making a positive difference in the world, whether through scientific advancements, social initiatives, artistic expression, or other fields.

<br><b>3. Potential for Inspiring and Educating University Students:</b>
<br>   - The applicant should demonstrate the ability to present their idea or topic in a compelling and accessible manner that resonates with a diverse audience, including university students.
<br>   - The proposed presentation should have the potential to ignite curiosity, spark meaningful conversations, and inspire action among students.

<br><b>4. Speaker's Ability to Engage the Audience:</b>
<br>   - The applicant should possess strong communication and presentation skills.
<br>   - They should demonstrate the ability to engage and captivate the audience through effective storytelling, charisma, and authenticity.
<br>   - The speaker's style and delivery should be engaging, relatable, and inclusive, ensuring that university students feel connected and inspired.

<br><b>5. Track Record and Achievements:</b>
<br>   - The applicant should provide evidence of their past accomplishments, expertise, or notable contributions in their respective field.
<br>   - Previous speaking engagements, publications, awards, or recognition related to the proposed idea or topic are valuable indicators of the applicant's credibility and potential to make a meaningful impact.

<br><b>6. Diversity and Inclusivity:</b>
<br>   - TED strongly values diversity and inclusivity in its speakers and participants.
<br>   - Applicants from underrepresented backgrounds, diverse disciplines, or with unique perspectives are encouraged to apply.
<br>   - The proposed idea or topic should have the potential to promote inclusivity, challenge stereotypes, or contribute to a more equitable society.

<br><b>7. Feasibility and Practicality:</b>
<br>   - The applicant should provide a clear plan on how they intend to translate their idea or topic into a compelling presentation.
<br>   - Consideration should be given to the feasibility of delivering the presentation within the given time constraints and available resources.
<br>   - Any supporting materials, visuals, or interactive elements that enhance the presentation should be outlined.

<br><b>Application Process:</b>
<br>To apply for the TED Conference grant for university students, interested individuals should:
<br>   1. Complete the official grant application form available on the TED Conference website.
<br>   2. Provide a detailed proposal outlining the idea or topic they wish to present, addressing each of the grant criteria mentioned above.
<br>   3. Include a compelling biography highlighting relevant achievements, expertise, and previous speaking experiences.
<br>   4. Submit any supporting materials, such as videos, articles, or portfolio samples, that showcase their ability to engage and inspire an audience.
<br>   5. Meet the specified application deadline.

<b>Selection Process:</b><br>
The selection of grant recipients for the TED Conference will be based on a thorough review of all applications by a panel of experts. The panel will evaluate each application against the grant criteria outlined above. Finalists may be contacted for additional information or an interview to assess their suitability for the conference. Grant recipients will be notified of their selection and provided with further instructions",
                'created_at' => Carbon::today()->addDays(rand(0, 365))
            ],
            [
                'name' => 'Dreamforce',
                'location' => 'San Francisco, USA',
                'description' => 'Dreamforce is an annual conference organized by Salesforce, focusing on customer relationship management (CRM) and cloud computing technologies.',
                'full_description' => "
<b>Grant Criteria Document for Dreamforce Conference:</b><br><br>

<b>Title:</b> Dreamforce University Student Grant Program<br><br>

<b>Introduction:</b><br>
The Dreamforce University Student Grant Program aims to provide financial support and unique opportunities for university students to attend and participate in the Dreamforce Conference. This grant program is designed to empower students with access to industry-leading professionals, cutting-edge technologies, and networking opportunities that can enrich their educational and professional journeys.<br><br>

<ol>
  <li>
    <b>Eligibility Criteria:</b>
    <ul>
      <li>Applicants must be currently enrolled as full-time university students.</li>
      <li>Applicants should demonstrate a strong interest in technology, innovation, and the Salesforce ecosystem.</li>
      <li>Preference may be given to students studying relevant fields such as computer science, information technology, business, or related disciplines.</li>
      <li>Students from diverse backgrounds and underrepresented communities are encouraged to apply.</li>
    </ul>
  </li>
  <li>
    <b>Application Process:</b>
    <ul>
      <li>Interested students must complete an online application form available on the Dreamforce Conference website.</li>
      <li>The application form will require students to provide their personal details, university information, and a brief statement outlining their interest in attending Dreamforce and how they believe it will benefit their academic and career goals.</li>
      <li>Applicants may also be required to submit a recommendation letter from a faculty member or academic advisor.</li>
    </ul>
  </li>
  <li>
    <b>Grant Selection Criteria:</b>
    <ul>
      <li>Demonstrated Interest: Applicants should showcase a genuine interest in technology, innovation, and the Salesforce ecosystem. This can be demonstrated through their statement of interest, academic coursework, projects, internships, or extracurricular activities related to these areas.</li>
      <li>Academic Merit: The applicant's academic performance and achievements will be considered, including GPA, relevant coursework, research projects, or awards.</li>
      <li>Potential Impact: Applicants should articulate how attending Dreamforce can positively impact their educational and professional goals. This can include acquiring new skills, networking with industry professionals, exploring career opportunities, or gaining insights into emerging technologies and trends.</li>
      <li>Diversity and Inclusion: The grant program aims to promote diversity and inclusion. Applicants from underrepresented communities, women in technology, or students with unique perspectives and backgrounds will be given special consideration.</li>
      <li>Financial Need: While financial need is not the sole determinant, students with limited financial resources may be given additional consideration.</li>
    </ul>
  </li>
  <li>
    <b>Grant Benefits:</b>
    <ul>
      <li>Full or partial coverage of Dreamforce Conference registration fees.</li>
      <li>Access to keynote sessions, breakout sessions, hands-on workshops, and specialized tracks designed for university students.</li>
      <li>Networking opportunities with industry professionals, Salesforce executives, and fellow students.</li>
      <li>Access to the Dreamforce Expo and Trailhead learning resources.</li>
      <li>Inclusion in special events or activities organized exclusively for grant recipients.</li>
      <li>A certificate of participation in the Dreamforce University Student Grant Program.</li>
    </ul>
  </li>
  <li>
    <b>Obligations of Grant Recipients:</b>
    <ul>
      <li>Grant recipients are expected to attend the Dreamforce Conference in person and actively participate in the scheduled sessions, workshops, and networking events.</li>
      <li>Recipients may be required to provide feedback or testimonials about their experience at Dreamforce, which may be used for promotional purposes.</li>
      <li>Grant recipients should represent themselves and their universities in a professional and respectful manner during the conference.</li>
    </ul>
  </li>
  <li>
    <b>Application Timeline:</b>
    <ul>
      <li>The grant application process typically opens several months before the Dreamforce Conference.</li>
      <li>Specific deadlines will be announced on the Dreamforce website and communicated through official channels.</li>
      <li>Applicants will be notified of the selection outcomes within a specified timeframe.</li>
    </ul>
  </li>
</ol>",
                'created_at' => Carbon::today()->addDays(rand(0, 365))
            ],
            [
                'name' => 'CES (Consumer Electronics Show)',
                'location' => 'Las Vegas, USA',
                'description' => 'CES is a renowned trade show that showcases the latest innovations and advancements in consumer electronics, including gadgets, smart devices, and emerging technologies.',
                'full_description' => "<b>Grant Criteria Document for CES (Consumer Electronics Show) - Meant for University Students:</b><br><br>

<b>Title:</b> CES Grant Criteria Document for University Students<br><br>

<b>Introduction:</b><br>
The purpose of this grant criteria document is to outline the specific criteria and requirements for university students seeking grants to attend the Consumer Electronics Show (CES). CES is one of the largest and most influential technology conferences, showcasing the latest innovations in consumer electronics and technology trends. The grant aims to provide deserving university students with an opportunity to participate in CES and gain valuable insights and experiences in the technology industry.<br><br>

<ol>
  <li>
    <b>Eligibility:</b>
    <ul>
      <li>Applicants must be currently enrolled as full-time students in a recognized university or college.</li>
      <li>The grant is open to students from all disciplines, with a particular focus on those studying technology-related fields such as computer science, engineering, information technology, or design.</li>
    </ul>
  </li>

  <li>
    <b>Academic Standing:</b>
    <ul>
      <li>Applicants must have a good academic standing with a minimum cumulative GPA (Grade Point Average) requirement, typically 3.0 on a 4.0 scale.</li>
      <li>Applicants should demonstrate a strong interest in technology, innovation, and consumer electronics through their coursework, research, or extracurricular activities.</li>
    </ul>
  </li>

  <li>
    <b>Personal Statement:</b>
    <ul>
      <li>Applicants are required to submit a personal statement outlining their motivation to attend CES, how it aligns with their academic and career goals, and how they anticipate benefiting from the conference.</li>
      <li>The personal statement should highlight the applicant's passion for technology, their potential contributions to the field, and their commitment to learning and networking opportunities at CES.</li>
    </ul>
  </li>

  <li>
    <b>Letter of Recommendation:</b>
    <ul>
      <li>Applicants must provide at least one letter of recommendation from a faculty member or academic advisor who can speak to their academic abilities, commitment to technology, and potential for professional growth.</li>
      <li>The letter of recommendation should emphasize the applicant's aptitude, passion, and potential to make the most of the CES experience.</li>
    </ul>
  </li>

  <li>
    <b>Statement of Financial Need:</b>
    <ul>
      <li>Applicants should demonstrate financial need by providing a statement explaining their current financial situation and why the grant would be instrumental in enabling their attendance at CES.</li>
      <li>The statement should include any additional financial constraints or circumstances that would make it challenging for the applicant to cover the expenses associated with attending the conference.</li>
    </ul>
  </li>

  <li>
    <b>Potential Contributions:</b>
    <ul>
      <li>Applicants should outline how they plan to contribute to CES and the broader technology community during and after the conference.</li>
      <li>This may include participating in panel discussions, presenting research posters, organizing meetups, or actively engaging with exhibitors and industry professionals.</li>
    </ul>
  </li>

  <li>
    <b>Commitment and Engagement:</b>
    <ul>
      <li>Applicants must demonstrate their commitment to fully engage in the CES experience, attending keynotes, workshops, and networking events.</li>
      <li>They should express their willingness to share their learn

ings and insights with their peers, university community, or wider audiences through blog posts, social media, or presentations.</li>
    </ul>
  </li>
</ol>

<b>Selection Process:</b>
<ol>
  <li>
    <b>Application Review:</b>
    <ul>
      <li>A selection committee consisting of representatives from the organizing body will review all grant applications.</li>
      <li>Each application will be assessed based on the eligibility criteria, academic standing, personal statement, letter of recommendation, financial need, potential contributions, and commitment to engagement.</li>
    </ul>
  </li>

  <li>
    <b>Shortlisting:</b>
    <ul>
      <li>The selection committee will shortlist candidates based on the strength of their applications, with a focus on diversity, academic merit, and potential for impact.</li>
      <li>Shortlisted candidates may be invited for an interview or additional clarification regarding their application.</li>
    </ul>
  </li>

  <li>
    <b>Final Selection:</b>
    <ul>
      <li>The final selection will be made based on the comprehensive evaluation of the applications and any additional interactions with shortlisted candidates.</li>
      <li>The selected candidates will be notified via email or other communication channels provided in their application.</li>
    </ul>
  </li>
</ol>

<b>Grant Benefits:</b>
<ol>
  <li>
    <b>Conference Pass:</b>
    <ul>
      <li>The grant covers the cost of a conference pass, providing access to keynotes, sessions, workshops, and the exhibition floor at CES.</li>
    </ul>
  </li>

  <li>
    <b>Travel and Accommodation:</b>
    <ul>
      <li>Depending on the availability of funds, the grant may cover or partially cover travel expenses, including airfare or ground transportation.</li>
      <li>Accommodation during the conference period may also be provided or subsidized.</li>
    </ul>
  </li>

  <li>
    <b>Networking Opportunities:</b>
    <ul>
      <li>Grant recipients will have the opportunity to network with industry professionals, technology enthusiasts, and potential mentors at CES.</li>
      <li>Special networking events or sessions may be organized exclusively for grant recipients.</li>
    </ul>
  </li>

  <li>
    <b>Learning and Knowledge Sharing:</b>
    <ul>
      <li>Grant recipients can attend educational sessions, panels, and workshops to enhance their knowledge and understanding of emerging technologies and trends.</li>
      <li>They are encouraged to actively participate in discussions, ask questions, and contribute to the overall learning experience.</li>
    </ul>
  </li>
</ol>

<b>Conclusion:</b><br>
This grant criteria document provides an overview of the specific requirements and expectations for university students seeking grants to attend CES. It is essential for applicants to carefully review and address each criterion to increase their chances of being selected. CES offers an unparalleled platform to engage with the technology industry and gain valuable insights, making this grant an excellent opportunity for university students pursuing careers in technology.",
                'created_at' => Carbon::today()->addDays(rand(0, 365))
            ],
            [
                'name' => 'WWDC (Apple Worldwide Developers Conference)',
                'location' => 'San Jose, USA',
                'description' => 'WWDC is an annual conference held by Apple, providing developers with insights into the latest advancements in Apple technologies, including software, hardware, and services.',
                'full_description' => "Grant Criteria Document for WWDC (Apple Worldwide Developers Conference):

<h2>Objective:</h2>
<p>The grant program for WWDC aims to provide financial assistance to university students who demonstrate exceptional skills, innovation, and potential in the field of software development and have a strong interest in Apple technologies and platforms. The grant recipients will have the opportunity to attend WWDC and engage with the Apple developer community, gaining valuable insights, networking opportunities, and inspiration.</p>

<h2>Eligibility Criteria:</h2>
<p>To be eligible for the grant program, applicants must meet the following criteria:</p>

<ol>
  <li>
    <strong>University Student:</strong> Applicants must be enrolled as full-time or part-time students in an accredited university or college at the time of application.
  </li>
  <li>
    <strong>Software Development Skills:</strong> Applicants should possess strong software development skills, with a focus on iOS, macOS, watchOS, or tvOS development. They should demonstrate proficiency in programming languages such as Swift or Objective-C.
  </li>
  <li>
    <strong>Demonstrated Interest in Apple Technologies:</strong> Applicants must showcase a keen interest and enthusiasm for Apple technologies, products, and platforms. They should have a track record of actively engaging with Apple's developer tools, frameworks, and documentation.
  </li>
  <li>
    <strong>Innovation and Creativity:</strong> Applicants should demonstrate a capacity for innovative thinking and creative problem-solving in the development of apps or software solutions. They should have a portfolio of projects or experiences that highlight their ability to think outside the box and push the boundaries of what's possible with Apple technologies.
  </li>
</ol>

<h2>Grant Criteria:</h2>
<p>The grant selection committee will evaluate applications based on the following criteria:</p>

<ol>
  <li>
    <strong>Technical Proficiency:</strong> Applicants should possess a strong technical foundation in software development, including knowledge of programming languages, frameworks, and tools relevant to Apple's platforms. The committee will assess the applicant's coding skills, understanding of software architecture, and ability to implement innovative and efficient solutions.
  </li>
  <li>
    <strong>Originality and Innovation:</strong> The committee will assess the applicant's ability to conceive and execute original and innovative ideas using Apple technologies. Applicants should showcase their unique approaches to problem-solving, user experience design, or integration of new features and functionalities.
  </li>
  <li>
    <strong>Impact and Relevance:</strong> The committee will evaluate the potential impact of the applicant's work on the Apple developer community, users, or specific industry domains. Applicants should articulate how their projects or ideas address real-world challenges, enhance user experiences, or contribute to technological advancements.
  </li>
  <li>
    <strong>Engagement and Contribution:</strong> The committee will consider the applicant's active participation in the developer community, such as contributions to open-source projects, participation in forums or discussion groups, or involvement in local developer meetups. Applicants who have demonstrated a commitment to sharing knowledge, collaborating with others, or mentoring fellow developers will be viewed favorably.
  </li>
</ol>

<h2>Application Process:</h2>
<p>Applicants interested in the grant program for WWDC must complete the following steps:</p>

<ol>
  <li>
    <strong>Online Application:</strong> Submit an online application through the official WWDC website or designated portal. The application should include personal information, academic details, a portfolio of past projects, and a motivation statement highlighting the applicant's passion for Apple technologies and their aspirations for attending WWDC.
  </li>
  <li>
    <strong>

Project Showcase:</strong> Provide a showcase of the applicant's most significant and relevant projects or software development experiences. This could include links to app store listings, GitHub repositories, demo videos, or screenshots. The showcase should demonstrate technical proficiency, innovation, and the applicant's unique approach to problem-solving.
  </li>
  <li>
    <strong>Motivation Statement:</strong> Craft a compelling motivation statement explaining why the applicant is interested in attending WWDC, how it aligns with their academic and career goals, and how they plan to leverage the conference experience to further their growth as a developer.
  </li>
  <li>
    <strong>Supporting Documentation:</strong> If applicable, applicants may submit supporting documents such as recommendation letters, academic transcripts, or certifications to strengthen their application.
  </li>
</ol>

<h2>Selection and Notification:</h2>
<p>The grant selection committee will carefully review all applications and select a limited number of recipients based on the evaluation criteria mentioned above. Successful applicants will be notified via email or through the designated communication channel provided during the application process.</p>

<p>It's important to note that the grant program for WWDC is highly competitive, and meeting the eligibility criteria does not guarantee selection. Applicants should invest sufficient time and effort in preparing their applications, showcasing their skills and passion for Apple technologies, and articulating how attending WWDC will contribute to their personal and professional growth.</p>

<p>Applicants who are not selected for the grant program may still have the opportunity to participate in WWDC through other means, such as purchasing a ticket or exploring scholarship opportunities directly offered by Apple.</p>

<p>For the most accurate and up-to-date information regarding the grant criteria and application process for WWDC, it's recommended to visit the official WWDC website or contact the Apple Developer Support team.</p>",
                'created_at' => Carbon::today()->addDays(rand(0, 365))
            ],
            [
                'name' => 'Google I/O',
                'location' => 'Mountain View, USA',
                'description' => 'Google I/O is an annual developer conference organized by Google, showcasing their latest products, technologies, and platforms, including Android, Google Cloud, AI, and more.',
                'full_description' => "Grant Criteria Document for Google I/O - Conference for University Students:

<h2>Introduction:</h2>
<p>Google I/O is an annual developer conference organized by Google, aimed at developers, technologists, and enthusiasts from around the world. While the conference covers a wide range of topics, this grant criteria document specifically focuses on grant applications from university students. The purpose of this document is to outline the grant criteria for university students seeking financial support to attend and participate in Google I/O.</p>

<h2>Grant Criteria:</h2>
<p>To be eligible for the grant, applicants must meet the following criteria:</p>

<ol>
  <li>
    <strong>Enrollment:</strong> Applicants must be currently enrolled as full-time university students in an accredited institution during the time of the conference.
  </li>
  <li>
    <strong>Technical Background:</strong> Applicants should have a strong technical background and demonstrate proficiency in software development, computer science, or related fields. This can be evidenced through academic coursework, personal projects, coding competitions, or internships.
  </li>
  <li>
    <strong>Relevance:</strong> The applicant's work, research, or project should be relevant to the topics covered at Google I/O. This may include but is not limited to areas such as mobile app development, web technologies, machine learning, artificial intelligence, cloud computing, Internet of Things (IoT), or other emerging technologies.
  </li>
  <li>
    <strong>Innovation:</strong> The grant committee will evaluate the level of innovation demonstrated by the applicant's work. Projects or research with novel approaches, creative solutions, or unique perspectives will be given preference.
  </li>
  <li>
    <strong>Impact:</strong> Applicants should showcase how their participation in Google I/O will have a positive impact on their academic or professional development. This could include the potential to gain new knowledge, network with industry professionals, collaborate on projects, or contribute to the developer community.
  </li>
  <li>
    <strong>Contribution:</strong> Applicants are encouraged to describe how they plan to share the knowledge and experience gained from attending Google I/O with their university and local communities. This can involve organizing workshops, giving presentations, or contributing to open-source projects.
  </li>
  <li>
    <strong>Financial Need:</strong> The grant committee may take into consideration the applicant's financial need when evaluating grant applications. Applicants who demonstrate limited financial resources and require financial assistance to cover conference-related expenses will be given priority.
  </li>
</ol>

<h2>Application Process:</h2>
<p>To apply for the grant, interested university students should follow these steps:</p>

<ol>
  <li>
    <strong>Grant Application:</strong> Complete the grant application form provided by Google, which will be available on the Google I/O conference website. The application form will require applicants to provide personal details, academic information, project description, and a statement addressing how they meet the grant criteria.
  </li>
  <li>
    <strong>Supporting Documents:</strong> Applicants may be required to submit additional supporting documents, such as a resume, academic transcripts, letters of recommendation, or project portfolios. These documents should showcase the applicant's technical skills, previous projects, and achievements.
  </li>
  <li>
    <strong>Deadline:</strong> The grant application deadline will be specified on the conference website. Late applications will not be considered, so it's important to submit the application before the specified deadline.
  </li>
</ol>

<h2>Selection Process:</h2>
<p>The grant committee will review all eligible applications based on the grant criteria outlined above. The selection process may

 include a thorough evaluation of the application, including the applicant's qualifications, project description, potential impact, and financial need. The committee will assess each application on its individual merits and make final decisions accordingly.</p>

<h2>Notification and Acceptance:</h2>
<p>Applicants who are selected for the grant will be notified via email or through the grant application portal. The notification will include details regarding the grant amount, conference registration process, and any additional requirements or obligations.</p>

<h2>Grant Recipient Responsibilities:</h2>
<p>Grant recipients are expected to fulfill the following responsibilities:</p>

<ol>
  <li>
    <strong>Attend Google I/O:</strong> Grant recipients must attend Google I/O on the specified dates and actively participate in the conference sessions, workshops, and networking events.
  </li>
  <li>
    <strong>Engage and Learn:</strong> Recipients should make the most of their time at Google I/O by engaging with speakers, attendees, and industry professionals, and actively seeking knowledge and learning opportunities.
  </li>
  <li>
    <strong>Share Knowledge:</strong> Grant recipients are encouraged to share their experience and learnings from Google I/O with their university and local communities. This could include organizing knowledge-sharing sessions, giving presentations, or creating content to benefit others.
  </li>
  <li>
    <strong>Report and Evaluation:</strong> Grant recipients may be required to submit a post-conference report or evaluation, sharing their insights, key takeaways, and the impact of attending Google I/O on their personal and professional growth.
  </li>
</ol>

<p>Note: The specific details and requirements for grant applications to Google I/O may change from year to year. It's important to refer to the official Google I/O website or contact the conference organizers for the most up-to-date information regarding grant criteria, application process, and deadlines.</p>",
                'created_at' => Carbon::today()->addDays(rand(0, 365))
            ],
            [
                'name' => 'SXSW (South by Southwest)',
                'location' => 'Austin, USA',
                'description' => 'SXSW is an interdisciplinary conference and festival that celebrates the convergence of film, music, and interactive media. It features sessions, performances, and exhibitions from various creative industries.',
                'full_description' => "<h2>Grant Criteria Document for SXSW (South by Southwest) Conference:</h2>

<p><strong>Introduction:</strong></p>
<p>The SXSW (South by Southwest) Conference is an annual event that brings together professionals from various industries, including technology, film, music, and interactive media. The conference aims to foster innovation, creativity, and collaboration among attendees. In order to support university students attending the conference, the SXSW organizers have established a grant program. This document outlines the grant criteria for university students interested in applying for a grant to attend the SXSW Conference.</p>

<h2>Grant Criteria:</h2>

<ol>
  <li>
    <strong>Eligibility:</strong>
    <ul>
      <li>Applicants must be currently enrolled as full-time university students.</li>
      <li>The grant is open to students from all disciplines and academic backgrounds.</li>
    </ul>
  </li>
  <li>
    <strong>Demonstrated Interest and Relevance:</strong>
    <ul>
      <li>Applicants should demonstrate a genuine interest in the SXSW Conference and its focus areas.</li>
      <li>Applicants should explain how their academic pursuits, career goals, or research align with the themes and industries represented at SXSW.</li>
      <li>Providing examples of previous projects, coursework, or extracurricular activities related to the conference's topics can strengthen the application.</li>
    </ul>
  </li>
  <li>
    <strong>Impact and Contribution:</strong>
    <ul>
      <li>Applicants should outline how attending the SXSW Conference will positively impact their academic and professional development.</li>
      <li>Applicants should describe how they plan to contribute to the conference and engage with fellow attendees.</li>
      <li>Emphasize potential collaborations, knowledge sharing, or networking opportunities that can arise from attending the conference.</li>
    </ul>
  </li>
  <li>
    <strong>Personal Statement:</strong>
    <ul>
      <li>Applicants are required to submit a personal statement explaining their motivation for attending SXSW.</li>
      <li>The personal statement should highlight the applicant's passion, goals, and aspirations in relation to the conference.</li>
      <li>Discuss how attending SXSW can broaden perspectives, enhance skills, or contribute to future endeavors.</li>
    </ul>
  </li>
  <li>
    <strong>Financial Need:</strong>
    <ul>
      <li>Consideration may be given to applicants with demonstrated financial need.</li>
      <li>Applicants should provide a brief explanation of their financial circumstances and any financial constraints they may face in attending the conference.</li>
    </ul>
  </li>
  <li>
    <strong>Letter of Recommendation:</strong>
    <ul>
      <li>Applicants must submit a letter of recommendation from a faculty member or academic advisor.</li>
      <li>The letter should support the applicant's qualifications, academic achievements, and potential to benefit from attending SXSW.</li>
    </ul>
  </li>
  <li>
    <strong>Application Timeline:</strong>
    <ul>
      <li>Applicants should adhere to the specified application timeline provided by the SXSW Conference organizers.</li>
      <li>Late applications may not be considered for grant opportunities.</li>
    </ul>
  </li>
  <li>
    <strong>Grant Benefits:</strong>
    <ul>
      <li>Successful grant recipients will receive financial assistance to cover a portion or all of the conference registration fees.</li>
      <li>Grant recipients may

 be provided with additional benefits, such as access to exclusive events, networking opportunities, or mentorship programs.</li>
    </ul>
  </li>
</ol>

<p><strong>Conclusion:</strong></p>
<p>The grant criteria outlined above aim to identify university students who are passionate, engaged, and motivated to attend the SXSW Conference. The selection committee will carefully evaluate applications based on the alignment of the applicant's interests and goals with the conference's focus areas, as well as the potential impact and contribution the applicant can make to the event. Financial need and academic recommendations will also be taken into consideration. Applicants are encouraged to provide comprehensive and compelling responses to increase their chances of receiving a grant to attend the SXSW Conference.</p>",
                'created_at' => Carbon::today()->addDays(rand(0, 365))
            ],
            [
                'name' => 'AWS re:Invent',
                'location' => 'Las Vegas, USA',
                'description' => 'AWS re:Invent is the largest global cloud computing conference organized by Amazon Web Services (AWS). It provides deep technical sessions, workshops, and announcements related to cloud services.',
                'full_description' => "<h2>Grant Criteria Document for AWS re:Invent Conference:</h2>

<p>The AWS re:Invent conference is a prestigious event focused on cloud computing and AWS services. It provides an excellent platform for university students to learn, network, and showcase their skills and innovations. To be considered for a grant to attend the AWS re:Invent conference, applicants must meet the following criteria:</p>

<ol>
  <li>
    <h3>Academic Background:</h3>
    <ul>
      <li>Applicants should be currently enrolled as university students pursuing a degree in a relevant field such as computer science, information technology, engineering, or a related discipline. Proof of enrollment or student identification may be required.</li>
    </ul>
  </li>
  <li>
    <h3>Interest in Cloud Computing:</h3>
    <ul>
      <li>Applicants should demonstrate a keen interest in cloud computing and AWS services. This can be showcased through academic coursework, projects, internships, or personal initiatives related to cloud technologies. A strong passion for leveraging cloud solutions to drive innovation and solve real-world challenges is highly desirable.</li>
    </ul>
  </li>
  <li>
    <h3>Technical Skills:</h3>
    <ul>
      <li>Applicants should possess a solid foundation in computer programming, preferably with proficiency in relevant programming languages such as Python, Java, or JavaScript. Familiarity with cloud concepts, infrastructure-as-code, and DevOps practices will be advantageous.</li>
    </ul>
  </li>
  <li>
    <h3>Innovative Projects or Research:</h3>
    <ul>
      <li>Applicants should have actively engaged in innovative projects or research related to cloud computing, either individually or as part of a team. These projects should demonstrate creativity, technical expertise, and potential for impact in areas such as application development, machine learning, data analytics, or infrastructure optimization.</li>
    </ul>
  </li>
  <li>
    <h3>Essay or Statement of Purpose:</h3>
    <ul>
      <li>Applicants must submit an essay or a statement of purpose highlighting their motivation for attending AWS re:Invent, their career aspirations in cloud computing, and how they envision leveraging the knowledge gained from the conference to make a positive impact in their academic and professional journeys. This essay should showcase strong communication skills and a clear understanding of the conference's significance.</li>
    </ul>
  </li>
  <li>
    <h3>Recommendations:</h3>
    <ul>
      <li>Applicants may be required to provide letters of recommendation from faculty members, advisors, or industry professionals who can attest to their skills, potential, and commitment to cloud computing. These recommendations should provide insights into the applicant's academic performance, technical abilities, and suitability for attending the conference.</li>
    </ul>
  </li>
  <li>
    <h3>Commitment to Learning and Collaboration:</h3>
    <ul>
      <li>Applicants should demonstrate a genuine commitment to continuous learning, growth, and collaboration within the cloud computing community. This can be reflected through involvement in relevant student clubs, open-source projects, hackathons, or participation in cloud-related events.</li>
    </ul>
  </li>
  <li>
    <h3>Impact and Contributions:</h3>
    <ul>
      <li>Applicants should articulate how their attendance at AWS re:Invent will contribute to their personal and professional development, as well as the potential impact they can make within their university, local community, or the broader cloud computing ecosystem.</li

>
    </ul>
  </li>
  <li>
    <h3>Financial Need:</h3>
    <ul>
      <li>In some cases, grants may consider financial need as a factor. Applicants facing financial constraints that would otherwise hinder their ability to attend the conference may be given priority consideration.</li>
    </ul>
  </li>
</ol>

<p>The grant criteria document should clearly outline these requirements, provide instructions for the application process, and specify any additional documentation or materials that need to be submitted. Applicants should carefully review the grant criteria and ensure that they meet all the specified requirements before submitting their application.</p>

<p>It's important to note that the specific grant criteria and application process may vary each year, so it's advisable to refer to the official AWS re:Invent website or contact the conference organizers directly for the most up-to-date information on grant opportunities and application details.</p>",
                'created_at' => Carbon::today()->addDays(rand(0, 365))
            ],
            [
                'name' => 'Mobile World Congress',
                'location' => 'Barcelona, Spain',
                'description' => 'Mobile World Congress is the world\'s largest exhibition and conference for the mobile industry, featuring the latest advancements in mobile technologies, devices, and services.',
                'full_description' => "<h2>Grant Criteria Document for Mobile World Congress (Meant for University Students):</h2>

<p>Mobile World Congress (MWC) is a premier global event in the mobile communications industry, bringing together professionals, innovators, and thought leaders from around the world. To provide grant opportunities specifically for university students to attend MWC, the following grant criteria document is proposed:</p>

<ol>
  <li>
    <h3>Eligibility:</h3>
    <ul>
      <li>Applicants must be currently enrolled as full-time university students.</li>
      <li>Applicants should have a strong interest in the mobile communications industry, emerging technologies, and innovation.</li>
      <li>Applicants must demonstrate academic excellence and a passion for their field of study.</li>
    </ul>
  </li>
  <li>
    <h3>Purpose:</h3>
    <ul>
      <li>The grant aims to provide university students with an opportunity to attend Mobile World Congress and gain valuable insights, networking opportunities, and exposure to the latest trends and technologies in the mobile industry.</li>
      <li>The grant recipients are expected to actively participate in the event, engage with industry professionals, attend relevant sessions and workshops, and contribute to the overall experience of MWC.</li>
    </ul>
  </li>
  <li>
    <h3>Selection Criteria:</h3>
    <ul>
      <li>Academic Merit: Applicants should have a strong academic record, showcasing their commitment to learning and excellence in their chosen field of study.</li>
      <li>Relevance: Applicants should demonstrate how attending Mobile World Congress aligns with their academic or career goals, and how it will contribute to their personal and professional development.</li>
      <li>Impact: Applicants should articulate the potential impact of attending MWC on their knowledge, skills, and future endeavors, as well as how they plan to share their experience with their university community.</li>
      <li>Motivation: Applicants should express their passion for the mobile communications industry, their eagerness to learn from industry experts, and their ability to contribute actively to MWC through their participation and engagement.</li>
    </ul>
  </li>
  <li>
    <h3>Application Requirements:</h3>
    <ul>
      <li>Personal Information: Applicants are required to provide their full name, contact details, university name, program of study, and expected graduation date.</li>
      <li>Academic Transcripts: Applicants should submit their latest academic transcripts or records as proof of their academic performance.</li>
      <li>Statement of Purpose: Applicants must write a well-articulated statement explaining their interest in attending Mobile World Congress, how it relates to their academic and career goals, and why they should be selected for the grant.</li>
      <li>Letter of Recommendation: Applicants should provide a letter of recommendation from a faculty member or academic advisor who can attest to their academic abilities, dedication, and potential.</li>
      <li>Optional: Applicants may include any additional supporting documents, such as research papers, projects, or extracurricular activities related to the mobile communications industry.</li>
    </ul>
  </li>
  <li>
    <h3>Grant Benefits:</h3>
    <ul>
      <li>Complimentary Pass: Selected grant recipients will receive a complimentary pass to attend Mobile World Congress, granting them access to various sessions, exhibitions, and networking events.</li>
      <li>Accommodation and Travel: Depending on the available funding, the grant may cover or partially cover the expenses for accommodation and travel to the conference venue.</li>
      <

li>Mentorship Opportunities: Grant recipients may have the chance to connect with industry professionals and mentors through networking events or dedicated mentorship programs.</li>
    </ul>
  </li>
  <li>
    <h3>Obligations of Grant Recipients:</h3>
    <ul>
      <li>Active Participation: Grant recipients are expected to actively participate in the conference by attending sessions, engaging in discussions, and exploring exhibition areas.</li>
      <li>Knowledge Sharing: Grant recipients should share their experience and insights gained from MWC with their university community through presentations, workshops, or articles.</li>
      <li>Follow-Up Report: Grant recipients will be required to submit a follow-up report summarizing their experience, key learnings, and how they plan to leverage their MWC attendance in their academic or professional pursuits.</li>
    </ul>
  </li>
</ol>

<p>It's important to note that the actual grant criteria and application process for Mobile World Congress may vary. It's recommended to refer to the official Mobile World Congress website or contact the organizers directly for the most up-to-date and accurate information regarding grants and eligibility criteria.</p>",
                'created_at' => Carbon::today()->addDays(rand(0, 365))
            ],
            [
                'name' => 'Adobe MAX',
                'location' => 'Los Angeles, USA',
                'description' => "Adobe MAX is an annual creativity conference that brings together designers, developers, and artists to learn about Adobe's creative products, explore new tools, and gain inspiration.",
                'full_description' => "<h2>Grant Criteria Document for Adobe MAX - Conference for University Students</h2>

<p><strong>Introduction:</strong><br>
Adobe MAX is an annual conference organized by Adobe Systems, focusing on creativity, design, and technology. It provides an immersive experience for designers, developers, and creative professionals to explore the latest trends, tools, and techniques in the digital industry. This grant criteria document outlines the specific criteria for university students seeking a grant to attend Adobe MAX.</p>

<h3>1. Eligibility:</h3>
<ol>
   <li>
      <p>a. Applicants must be currently enrolled as university students in a recognized institution.</p>
      <p>b. Applicants should demonstrate a strong interest and passion for creative fields, design, or technology.</p>
      <p>c. Both undergraduate and graduate students are eligible to apply.</p>
   </li>
</ol>

<h3>2. Application Requirements:</h3>
<ol>
   <li>
      <p>a. Personal Information:</p>
      <ul>
         <li>i. Full name, contact details (email, phone number), and university affiliation.</li>
         <li>ii. Brief bio, including academic background and areas of interest.</li>
      </ul>
   </li>
   <li>
      <p>b. Statement of Purpose:</p>
      <ul>
         <li>i. A well-crafted statement explaining why the applicant wishes to attend Adobe MAX.</li>
         <li>ii. Description of how attending the conference aligns with the applicant's academic and career goals.</li>
      </ul>
   </li>
   <li>
      <p>c. Portfolio:</p>
      <ul>
         <li>i. A portfolio showcasing the applicant's creative work, design projects, or technological innovations.</li>
         <li>ii. The portfolio should demonstrate the applicant's skills, creativity, and potential for growth.</li>
      </ul>
   </li>
   <li>
      <p>d. Letter of Recommendation:</p>
      <ul>
         <li>i. A letter of recommendation from a faculty member or academic advisor supporting the applicant's attendance at Adobe MAX.</li>
         <li>ii. The letter should highlight the applicant's academic achievements, dedication, and potential.</li>
      </ul>
   </li>
</ol>

<h3>3. Grant Criteria:</h3>
<ol>
   <li>
      <p>a. Demonstrated Interest: Applicants should show a genuine interest in Adobe's creative tools, technologies, or design principles.</p>
      <p>b. Academic Merit: Preference may be given to applicants with a strong academic record or exceptional achievements in relevant fields.</p>
      <p>c. Creative Potential: The applicant's portfolio will be evaluated to assess their creative skills, innovative thinking, and potential for growth.</p>
      <p>d. Relevance to Studies: Applicants should explain how attending Adobe MAX will contribute to their academic or research pursuits.</p>
      <p>e. Impact: The potential impact of attending Adobe MAX on the applicant's personal and professional development will be considered.</p>
      <p>f. Diversity and Inclusion: Adobe values diversity and inclusion. Applicants from diverse backgrounds or underrepresented groups are encouraged to apply.</p>
   </li>
</ol>

<h3>4. Grant Benefits:</h3>
<ol>
   <li>
      <p>a. Complimentary Conference Pass: Selected grant recipients will receive a complimentary conference pass to attend Adobe MAX.</p>
      <p>b. Exclusive Access: Grant recipients may gain access to special events, workshops, or networking opportunities.</p>
      <p>c. Mentor

ship Opportunities: Selected applicants may be paired with industry professionals or Adobe experts for mentorship during the conference.</p>
      <p>d. Recognition: Grant recipients may receive recognition on the Adobe MAX website or through other communication channels.</p>
   </li>
</ol>

<h3>5. Application Process:</h3>
<ol>
   <li>
      <p>a. Applications should be submitted online through the designated application portal.</p>
      <p>b. The application period and deadline will be announced on the Adobe MAX website.</p>
      <p>c. All application materials, including personal information, statement of purpose, portfolio, and letter of recommendation, must be submitted before the deadline.</p>
   </li>
</ol>

<p><strong>Conclusion:</strong><br>
This grant criteria document outlines the key requirements and evaluation criteria for university students seeking a grant to attend Adobe MAX. It emphasizes the importance of demonstrated interest, academic merit, creative potential, and relevance to studies. Grant recipients will receive a complimentary conference pass, exclusive access to events, and potential mentorship opportunities. Adobe MAX aims to provide an enriching experience for university students and foster their growth in the creative and technological fields.</p>",
                'created_at' => Carbon::today()->addDays(rand(0, 365))
            ],
            [
                'name' => 'E3 (Electronic Entertainment Expo)',
                'location' => 'Los Angeles, USA',
                'description' => 'E3 is a premier trade event for the video game industry, featuring product launches, game announcements, and showcases from major game developers and publishers.',
                'full_description' => "<h2>Grant Criteria Document for E3 (Electronic Entertainment Expo) for University Students:</h2>

<p><strong>Introduction:</strong><br>
E3 is one of the premier conferences in the gaming industry, bringing together developers, publishers, and enthusiasts from around the world. This grant criteria document outlines the specific criteria for university students seeking grants to attend and participate in E3.</p>

<h3>1. Eligibility:</h3>
<ol>
   <li>
      <p>a. Applicants must be currently enrolled as university students in an accredited educational institution.</p>
      <p>b. Applicants should have a strong interest in the gaming industry and demonstrate their passion for gaming through their academic pursuits or personal projects.</p>
      <p>c. International students are eligible to apply, but they should ensure that they meet any necessary travel and visa requirements.</p>
   </li>
</ol>

<h3>2. Application Process:</h3>
<ol>
   <li>
      <p>a. Interested students should submit a comprehensive application that includes the following information:</p>
      <ul>
         <li>- Personal details: Name, contact information, university, major/field of study, and year of study.</li>
         <li>- Motivation: A well-written statement highlighting the applicant's passion for gaming, their career aspirations in the gaming industry, and why attending E3 would be valuable to their educational and professional development.</li>
         <li>- Accomplishments: A summary of relevant academic achievements, gaming-related projects, internships, or other experiences that demonstrate the applicant's skills and commitment to the gaming industry.</li>
         <li>- References: Contact information of at least one academic or professional reference who can speak to the applicant's qualifications, character, and potential contributions to E3.</li>
         <li>- Budget: An estimated budget outlining the expected expenses for attending E3, including travel, accommodation, registration fees, meals, and any other relevant costs.</li>
      </ul>
   </li>
</ol>

<h3>3. Grant Criteria:</h3>
<ol>
   <li>
      <p>The following criteria will be considered in the selection of grant recipients:</p>
      <ul>
         <li>a. Academic Excellence: A track record of strong academic performance, particularly in relevant courses such as game development, computer science, or related disciplines.</li>
         <li>b. Gaming Experience: Demonstrated involvement in the gaming industry, including personal projects, game development competitions, or active participation in gaming communities.</li>
         <li>c. Potential Contribution: The applicant's potential to contribute to E3 through participation in panels, workshops, or other activities that showcase their knowledge, skills, or innovative ideas.</li>
         <li>d. Diversity and Inclusion: Consideration will be given to promoting diversity and inclusion among the grant recipients, including but not limited to gender, ethnicity, and underrepresented groups in the gaming industry.</li>
         <li>e. Financial Need: Assessment of the applicant's financial need will be taken into account to ensure that the grants are allocated to those who may not have sufficient resources to attend E3 otherwise.</li>
      </ul>
   </li>
</ol>

<h3>4. Grant Benefits:</h3>
<ol>
   <li>
      <p>a. Selected grant recipients will receive financial support to cover a portion or all of their expenses associated with attending E3, as outlined in their budget submission.</p>
      <p>b. Grant recipients may receive additional benefits, such as access to exclusive networking events, mentorship opportunities, or special sessions designed for students.</p>
      <p>c. Grant recipients will be recognized as E3

 Scholars or similar designation, highlighting their achievement and contribution to the conference.</p>
   </li>
</ol>

<h3>5. Obligations of Grant Recipients:</h3>
<ol>
   <li>
      <p>a. Grant recipients are expected to actively participate in E3 events, engage with industry professionals, attend relevant sessions, and represent themselves and their universities professionally.</p>
      <p>b. Grant recipients may be required to submit a post-conference report or reflection on their experiences at E3, sharing insights gained and lessons learned.</p>
   </li>
</ol>

<h3>6. Application Review and Selection:</h3>
<ol>
   <li>
      <p>a. The grant selection committee, comprising representatives from E3 and relevant industry stakeholders, will review and evaluate all applications based on the specified criteria.</p>
      <p>b. The committee's decision regarding grant recipients will be final and binding.</p>
      <p>c. Grant recipients will be notified of their selection and provided with further instructions regarding grant disbursement and conference registration.</p>
   </li>
</ol>

<p><strong>Conclusion:</strong><br>
This grant criteria document provides an overview of the specific criteria and process for university students seeking grants to attend E3. It is essential for interested applicants to carefully review the requirements and submit a well-prepared application to enhance their chances of being selected as a grant recipient.</p>",
                'created_at' => Carbon::today()->addDays(rand(0, 365))
            ],
            [
                'name' => 'RSA Conference',
                'location' => 'San Francisco, USA',
                'description' => 'RSA Conference is a leading cybersecurity conference that brings together experts, professionals, and organizations to discuss and address the latest trends, challenges, and innovations in the field.',
                'full_description' => "<h2>Grant Criteria Document for RSA Conference (Meant for University Students):</h2>

<p><strong>Introduction:</strong><br>
The RSA Conference is a leading global cybersecurity conference that brings together industry professionals, experts, and researchers to discuss the latest trends, technologies, and challenges in cybersecurity. As a conference focused on fostering innovation and knowledge sharing, RSA offers grant opportunities to university students who demonstrate exceptional potential and a passion for cybersecurity. This document outlines the grant criteria for university students interested in attending the RSA Conference.</p>

<h3>1. Eligibility:</h3>
<ul>
   <li>
      <p>To be eligible for the RSA Conference grant as a university student, applicants must meet the following criteria:</p>
      <ul>
         <li>- Currently enrolled in an accredited university program.</li>
         <li>- Pursuing a degree or specialization related to cybersecurity, computer science, information technology, or a relevant field.</li>
         <li>- Must be in good academic standing.</li>
      </ul>
   </li>
</ul>

<h3>2. Application Requirements:</h3>
<ul>
   <li>
      <p>To apply for the RSA Conference grant, students are required to submit the following documents:</p>
      <ul>
         <li>- Personal Statement: A well-written personal statement highlighting the applicant's interest in cybersecurity, career aspirations, and the reasons for attending the RSA Conference. The statement should also mention how the conference aligns with their educational and professional goals.</li>
         <li>- Resume/CV: A comprehensive resume or curriculum vitae outlining the applicant's educational background, relevant coursework, research projects, internships, certifications, and any other cybersecurity-related experiences.</li>
         <li>- Academic Transcripts: Official or unofficial transcripts demonstrating the applicant's academic performance and coursework in cybersecurity or related fields.</li>
         <li>- Letter of Recommendation: A letter of recommendation from a professor, academic advisor, or industry professional who can speak to the applicant's academic abilities, passion for cybersecurity, and potential contribution to the conference.</li>
      </ul>
   </li>
</ul>

<h3>3. Grant Criteria:</h3>
<ul>
   <li>
      <p>The RSA Conference grant selection committee will evaluate applications based on the following criteria:</p>
      <ul>
         <li>- Academic Excellence: Applicants with a strong academic record, including high GPA and relevant coursework, will be given preference.</li>
         <li>- Demonstrated Interest: The applicant's personal statement should showcase a genuine interest in cybersecurity, emphasizing their engagement with the field through projects, research, competitions, or extracurricular activities.</li>
         <li>- Potential Impact: The committee will assess the applicant's potential to contribute to the cybersecurity community and the conference through their knowledge, ideas, and unique perspectives.</li>
         <li>- Career Aspirations: Applicants who demonstrate a clear vision for their future career in cybersecurity and articulate how attending the RSA Conference will benefit their professional development will be prioritized.</li>
         <li>- Diversity and Inclusion: The selection committee values diversity and encourages applications from individuals with diverse backgrounds, experiences, and perspectives.</li>
      </ul>
   </li>
</ul>

<h3>4. Grant Benefits:</h3>
<ul>
   <li>
      <p>Selected university students will receive the following benefits as part of the RSA Conference grant:</p>
      <ul>
         <li>- Full or partial conference registration fee coverage, depending on the availability of funds and the strength of the application.</li>
         <li>- Access to all conference sessions, keynote presentations, panel discussions, and networking events.</li>
         <li>- Opportunities to connect with

 industry professionals, researchers, and experts in the field of cybersecurity.</li>
         <li>- Participation in special student-focused programs, workshops, and career development sessions.</li>
         <li>- A certificate of attendance acknowledging the recipient's participation in the RSA Conference.</li>
      </ul>
   </li>
</ul>

<h3>5. Application Process:</h3>
<ul>
   <li>
      <p>To apply for the RSA Conference grant, students should follow the outlined application process on the conference website. The process may include submitting the required documents online, completing an application form, and adhering to specified deadlines. It is important to review and follow the instructions provided on the official RSA Conference grant application portal.</p>
   </li>
</ul>

<h3>6. Selection and Notification:</h3>
<ul>
   <li>
      <p>The RSA Conference grant selection committee will review all applications and make their selection based on the outlined criteria. Selected applicants will be notified via email or phone within the specified timeframe. It is essential for applicants to provide accurate contact information and regularly check their communication channels for updates.</p>
   </li>
</ul>

<p><strong>Note:</strong> The grant criteria document provided above is a general guideline for university students applying to the RSA Conference. The actual grant application process and criteria may vary. Applicants should refer to the official RSA Conference website for the most up-to-date information.</p>",
                'created_at' => Carbon::today()->addDays(rand(0, 365))
            ],
            [
                'name' => 'TEDx',
                'location' => 'Various Locations Worldwide',
                'description' => 'TEDx events are independently organized TED-like conferences held worldwide, showcasing inspiring talks and ideas from local communities on a wide range of topics.',
                'full_description' => "<h2>Grant Criteria Document for TEDx Conference:</h2>

<p>TEDx conferences are independently organized events licensed by TED. They provide a platform for sharing innovative and inspiring ideas within local communities. Grant opportunities for TEDx conferences aimed at university students may have specific criteria to ensure the selection of impactful and engaging speakers. Here is a suggested grant criteria document for a TEDx conference targeting university students:</p>

<h3>1. Theme Alignment:</h3>
<ul>
   <li>
      <p>The speaker's proposed talk should align with the overarching theme of the TEDx conference.</p>
      <ul>
         <li>- The talk should be relevant to university students, addressing their interests, challenges, and aspirations.</li>
      </ul>
   </li>
</ul>

<h3>2. Novelty and Originality:</h3>
<ul>
   <li>
      <p>The proposed talk should present a fresh perspective, unique idea, or innovative approach.</p>
      <ul>
         <li>- The speaker should introduce new concepts, research findings, or solutions to existing problems.</li>
      </ul>
   </li>
</ul>

<h3>3. Inspiring and Thought-Provoking:</h3>
<ul>
   <li>
      <p>The talk should have the potential to inspire and ignite curiosity among university students.</p>
      <ul>
         <li>- It should encourage critical thinking, reflection, and intellectual engagement.</li>
      </ul>
   </li>
</ul>

<h3>4. Expertise and Credibility:</h3>
<ul>
   <li>
      <p>The speaker should demonstrate expertise, knowledge, or experience in the subject matter they wish to present.</p>
      <ul>
         <li>- Academic qualifications, professional achievements, or practical expertise related to the talk's topic should be considered.</li>
      </ul>
   </li>
</ul>

<h3>5. Clarity and Coherence:</h3>
<ul>
   <li>
      <p>The speaker should demonstrate the ability to communicate complex ideas effectively.</p>
      <ul>
         <li>- The talk should be well-structured, logical, and coherent, ensuring clear delivery of the intended message.</li>
      </ul>
   </li>
</ul>

<h3>6. Impact and Relevance:</h3>
<ul>
   <li>
      <p>The proposed talk should have the potential to make a significant impact on the university community.</p>
      <ul>
         <li>- It should address relevant issues, challenges, or opportunities that resonate with university students.</li>
      </ul>
   </li>
</ul>

<h3>7. Engagement and Interaction:</h3>
<ul>
   <li>
      <p>The speaker should propose interactive elements or strategies to engage the audience.</p>
      <ul>
         <li>- The talk should foster dialogue, participation, and audience involvement.</li>
      </ul>
   </li>
</ul>

<h3>8. Diversity and Inclusivity:</h3>
<ul>
   <li>
      <p>The grant criteria should consider diversity in speaker selection, including representation from various disciplines, backgrounds, or perspectives.</p>
      <ul>
         <li>- The talk should promote inclusivity and respect for all attendees, regardless of their backgrounds or identities.</li>
      </ul>
   </li>
</ul>

<h3>9. Delivery and Presentation Skills:</h3>
<ul>
   <li>
      <p>The speaker should exhibit strong public speaking abilities, captivating presence, and effective storytelling techniques.</p>
      <ul>
         <li>- Previous speaking engagements, presentation skills,

 or relevant experiences should be considered.</li>
      </ul>
   </li>
</ul>

<h3>10. Potential for Knowledge Sharing:</h3>
<ul>
   <li>
      <p>The speaker should demonstrate an interest in sharing their talk beyond the conference.</p>
      <ul>
         <li>- They may propose ideas for extending the reach of their message through online platforms, social media, or other channels.</li>
      </ul>
   </li>
</ul>

<h3>11. Time and Logistics:</h3>
<ul>
   <li>
      <p>The proposed talk should fit within the allocated time frame for TEDx conference presentations.</p>
      <ul>
         <li>- The speaker should be available and committed to attending the event on the specified date and time.</li>
      </ul>
   </li>
</ul>

<p>It's important to note that the actual grant criteria may vary depending on the specific TEDx conference and its organizers. It's recommended to consult the TEDx conference website or reach out to the organizers for detailed information on their grant application process and criteria.</p>",
                'created_at' => Carbon::today()->addDays(rand(0, 365))
            ],
            [
                'name' => 'Strata Data Conference',
                'location' => 'Various Locations Worldwide',
                'description' => 'Strata Data Conference is a conference that focuses on big data, data science, and machine learning. It provides insights, case studies, and best practices for handling and analyzing data.',
                'full_description' => "<h2>Grant Criteria Document for Strata Data Conference (Meant for University Students):</h2>

<h3>Introduction:</h3>
<p>The Strata Data Conference is a premier event focused on big data, data science, and analytics. It provides a platform for industry professionals, researchers, and students to share knowledge, insights, and innovations in the field of data. This grant criteria document outlines the specific criteria for university students applying for grants to attend the Strata Data Conference.</p>

<h3>Grant Criteria:</h3>
<ol>
   <li>
      <h4>Academic Enrollment:</h4>
      <p>Applicants must be currently enrolled as full-time university students in an accredited institution. Proof of enrollment, such as a valid student ID card or an official enrollment letter, must be provided.</p>
   </li>
   <li>
      <h4>Relevance to Data Science and Analytics:</h4>
      <p>Applicants must demonstrate a strong interest and involvement in the field of data science and analytics. This can be evidenced through academic coursework, research projects, internships, or personal projects related to data analysis, machine learning, big data processing, data visualization, or any other relevant area.</p>
   </li>
   <li>
      <h4>Potential for Contribution:</h4>
      <p>Applicants should showcase their potential to contribute to the conference and engage with the data community. This can include presenting a research paper, poster, or demo related to their work in data science, participating in panel discussions or workshops, or actively engaging with other conference attendees through networking and knowledge-sharing activities.</p>
   </li>
   <li>
      <h4>Impact and Innovation:</h4>
      <p>Applicants should highlight the potential impact and innovation of their work in data science. This can involve demonstrating how their research, projects, or ideas contribute to solving real-world problems, advancing the field of data science, or introducing novel approaches or methodologies.</p>
   </li>
   <li>
      <h4>Motivation and Learning Objectives:</h4>
      <p>Applicants must articulate their motivation for attending the Strata Data Conference and outline their specific learning objectives. They should describe how attending the conference will enhance their knowledge, skills, and career prospects in the field of data science. This can include specific topics, sessions, or workshops they plan to attend and how those align with their academic or professional goals.</p>
   </li>
   <li>
      <h4>Financial Need:</h4>
      <p>Applicants should provide information about their financial need for the grant. This can include details about their current financial situation, such as tuition fees, living expenses, or travel costs, and how receiving the grant would alleviate their financial burden and enable their participation in the conference.</p>
   </li>
   <li>
      <h4>Letter of Recommendation:</h4>
      <p>Applicants must include a letter of recommendation from a faculty member or academic advisor who can attest to their academic performance, dedication to data science, and potential to benefit from attending the Strata Data Conference. The letter should be on official letterhead and provide contact information for verification purposes.</p>
   </li>
</ol>

<h3>Application Process:</h3>
<p>Interested university students can apply for the grant by completing the official application form provided by the Strata Data Conference organizers. The form should include sections to capture the applicant's personal information, academic background, research or project details, motivation for attending the conference, learning objectives, financial need, and the contact information of the faculty member providing the letter of recommendation.</p>



<h3>Review and Selection:</h3>
<p>The grant applications will be reviewed by a committee appointed by the Strata Data Conference organizers. The selection process will consider the adherence to the grant criteria outlined above and the overall quality and potential impact of the applicants' work in data science. The committee may also consider diversity and representation across universities and research areas when making their final selection.</p>

<h3>Notification and Grant Benefits:</h3>
<p>Successful applicants will be notified of their selection and awarded a grant to attend the Strata Data Conference. The grant benefits may include waived or discounted conference registration fees, travel assistance, accommodation arrangements, or a combination thereof. The specific details of the grant benefits will be communicated to the recipients individually.</p>

<h3>Conclusion:</h3>
<p>Attending the Strata Data Conference can be a valuable opportunity for university students to expand their knowledge, connect with industry professionals, and contribute to the field of data science. The grant criteria outlined in this document aim to identify passionate and deserving students who will benefit from the conference experience and contribute meaningfully to the data community.</p>

<p>Note: The above grant criteria document is a general suggestion based on the context of university students attending the Strata Data Conference. The actual grant criteria may vary, and it is recommended to refer to the official Strata Data Conference website or contact the organizers for the most accurate and up-to-date information on grant applications and criteria.</p>",
                'created_at' => Carbon::today()->addDays(rand(0, 365))
            ],
            [
                'name' => 'Collision',
                'location' => 'Various Locations Worldwide',
                'description' => 'Collision is a technology conference that brings together startups, investors, and industry leaders to discuss emerging technologies, innovation, and entrepreneurship.',
                'full_description' => "<h2>Grant Criteria Document for Collision Conference:</h2>

<p>The Collision Conference is specifically focused on bringing together startups, investors, and technology enthusiasts. To provide grant opportunities for university students attending the conference, the following grant criteria document can be considered:</p>

<h3>1. Purpose of the Grant:</h3>
<p>The purpose of the grant is to support university students who demonstrate exceptional potential, innovation, and a strong interest in the startup ecosystem. The grant aims to provide financial assistance to deserving students, enabling them to attend the Collision Conference and actively participate in its activities.</p>

<h3>2. Eligibility Criteria:</h3>
<p>To be eligible for the grant, applicants must meet the following criteria:</p>
<ul>
   <li>Be currently enrolled as a full-time university student.</li>
   <li>Possess a passion for entrepreneurship, startups, and technology.</li>
   <li>Demonstrate a strong interest in networking, learning, and contributing to the startup community.</li>
   <li>Provide proof of enrollment or student identification.</li>
</ul>

<h3>3. Application Process:</h3>
<p>The application process for the grant will involve the following steps:</p>
<ol>
   <li>
      <p>Submission: Applicants will be required to submit an online application form, which includes personal information, educational background, and a statement of interest.</p>
   </li>
   <li>
      <p>Statement of Interest: The statement of interest should outline why the applicant wishes to attend the Collision Conference, their goals, and how they intend to contribute to the event.</p>
   </li>
   <li>
      <p>Supporting Documents: Applicants may be asked to provide additional documents such as a resume, academic transcripts, or recommendation letters.</p>
   </li>
   <li>
      <p>Deadline: The deadline for submitting grant applications will be specified in the application process guidelines.</p>
   </li>
</ol>

<h3>4. Evaluation Criteria:</h3>
<p>The evaluation of grant applications will be based on the following criteria:</p>
<ul>
   <li>Demonstrated Passion: Applicants should showcase a genuine passion for startups, entrepreneurship, and technology.</li>
   <li>Academic Merit: The applicant's academic achievements and performance will be considered.</li>
   <li>Leadership Potential: The applicant's potential for leadership, innovation, and making a positive impact in the startup community will be evaluated.</li>
   <li>Statement of Interest: The clarity, coherence, and persuasiveness of the applicant's statement of interest will be assessed.</li>
   <li>Financial Need: Consideration may be given to applicants who demonstrate financial need and would greatly benefit from the grant.</li>
</ul>

<h3>5. Grant Benefits:</h3>
<p>The selected grant recipients will receive the following benefits:</p>
<ul>
   <li>Complimentary Conference Pass: Grant recipients will receive a complimentary pass to attend the Collision Conference, granting them access to keynote sessions, panel discussions, workshops, and networking events.</li>
   <li>Travel and Accommodation Support: In addition to the conference pass, selected recipients may receive financial support to cover travel expenses and accommodation during the conference.</li>
   <li>Mentoring Opportunities: Grant recipients may have the opportunity to engage in mentoring sessions or connect with experienced entrepreneurs, investors, or industry professionals.</li>
</ul>

<h3>6. Grant Obligations:</h3>
<p>Grant recipients will be expected to fulfill the following obligations:</p>
<ul>
   <li>Active Participation: Recipients should actively participate in the Collision Conference

 by attending sessions, engaging in networking opportunities, and contributing to the overall event experience.</li>
   <li>Report or Presentation: Upon completion of the conference, grant recipients may be required to submit a report or give a presentation summarizing their key takeaways, learnings, and any impactful experiences from the event.</li>
   <li>Acknowledgment: Grant recipients may be requested to acknowledge the grant and the support received in their social media posts, blog articles, or other forms of public acknowledgment.</li>
</ul>

<h3>7. Selection and Notification:</h3>
<p>The grant selection process will involve a review panel that assesses all applications based on the established criteria. Successful applicants will be notified via email or other means of communication specified in the application guidelines. Unsuccessful applicants will also be notified accordingly.</p>

<p>Please note that the grant criteria document provided here is a general guideline and should be adapted and customized as per the specific requirements and policies of the Collision Conference. It is recommended to refer to the official Collision Conference website or reach out to their organizers for the most up-to-date and accurate information on grant opportunities and criteria.</p>",
                'created_at' => Carbon::today()->addDays(rand(0, 365))
            ]
        ];

        foreach($conferences as $index=>$conference){
            DB::table('conferences')->insert($conference);
            DB::table('conference_grantstatus')->insert([
                'conference_id' => $index+1,
                'grantstatus_id' => 1
            ]);
        }
    }
}
