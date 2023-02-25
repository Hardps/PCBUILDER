<?php include 'welcome.php' ?>
<!DOCTYPE html>
<head>
    <title>Terms & Conditions</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/jpg" href="imgs/www.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Major+Mono+Display&display=swap" rel="stylesheet">

</head>
  <body  style="margin: 0% ; background-image:url('imgs/pcback.jpg') ">
      <header>
          <nav>
              <div class="topnav">
                  <a class="active" href="index.php"><p><b>HoMe</b></p></a>
                  <a href="pcbuilder.php"><p><b>pcbuilder</b></p></a>
                  <a href="guide.php"><p><b>guide</b></p></a>
                  <a href="knowledgebase.php"><p><b>knowledge-base</b></p></a>
                  <a href="about.php"><p><b>about</b></p></a>
                  <?php if(!empty($_SESSION["id"])){
                  if ($row["names"] == "admin"){?>
                  <a href="admin.php"><p><b>admin</b></p></a>
                  <?php }?>
                  <?php }?>
                  <div class="dropdown" style="float:right">
                    <?php if(!empty($_SESSION["id"])){?><a class="active alignright"><p><b>
                    <?php echo "WelcoMe ", $row["names"];?></b></p></a>
                    <div class="dropdown-content">
                      <a href="profile.php"><b>profile</b></a>
                      <a href="logout.php"><b>logout</b></a>
                    </div>
                  </div>
                  <?php } else{ ?>
                  <a href="login.php" class="active alignright"><p><b>login/register</b></p></a>
                  <?php } ?>

          </nav>
        </header>
        <br>
        <div class="bg">
            <div>
                <a class="backtext"><b>terms & conditions</b></a>
            </div>
            <br>
            <br>
            <div class="content">
            <p>last updated: february 24, 2023</p>
        <p>please read these terms and conditions carefully before using our service.</p>
        <h1>interpretation and definitions</h1>
        <h2>interpretation</h2>
        <p>the words of which the initial letter is capitalized have meanings defined under the following conditions.
            the following definitions shall have the same meaning regardless of whether they appear in singular or in
            plural.</p>
        <h2>definitions</h2>
        <p>for the purposes of these terms and conditions:</p>
        <ul>
            <li>
                <p>
                    <strong>affiliate</strong> means an entity that controls, is controlled by or is under common
                    control with a party, where &quot;control&quot; means ownership of 50% or more of the shares, equity
                    interest or other securities entitled
                    to vote for election of directors or other managing authority.
                </p>
            </li>
            <li>
                <p><strong>country</strong> refers to: maharashtra, india</p>
            </li>
            <li>
                <p><strong>company</strong> (referred to as either &quot;the company&quot;, &quot;we&quot;,
                    &quot;us&quot; or &quot;our&quot; in this agreement) refers to forms.</p>
            </li>
            <li>
                <p><strong>device</strong> means any device that can access the service such as a computer, a cellphone
                    or a digital tablet.</p>
            </li>
            <li>
                <p><strong>service</strong> refers to the website.</p>
            </li>
            <li>
                <p>
                    <strong>terms and conditions</strong> (also referred as &quot;terms&quot;) mean these terms and
                    conditions that form the entire agreement between you and the company regarding the use of the
                    service. this terms and conditions agreement
                    has been created with the help of the <a
                        href="https://www.termsfeed.com/terms-conditions-generator/" target="_blank" style="color: white;">terms and
                        conditions generator</a>.
                </p>
            </li>
            <li>
                <p>
                    <strong>third-party social media service</strong> means any services or content (including data,
                    information, products or services) provided by a third-party that may be displayed, included or made
                    available by the service.
                </p>
            </li>
            <li>
                <p><strong>you</strong> means the individual accessing or using the service, or the company, or other
                    legal entity on behalf of which such individual is accessing or using the service, as applicable.
                </p>
            </li>
        </ul>
        <h1>acknowledgment</h1>
        <p>
            these are the terms and conditions governing the use of this service and the agreement that operates between
            you and the company. these terms and conditions set out the rights and obligations of all users regarding
            the use of the service.
        </p>
        <p>your access to and use of the service is conditioned on your acceptance of and compliance with these terms
            and conditions. these terms and conditions apply to all visitors, users and others who access or use the
            service.</p>
        <p>by accessing or using the service you agree to be bound by these terms and conditions. if you disagree with
            any part of these terms and conditions then you may not access the service.</p>
        <p>you represent that you are over the age of 18. the company does not permit those under 18 to use the service.
        </p>
        <p>
            your access to and use of the service is also conditioned on your acceptance of and compliance with the
            privacy policy of the company. our privacy policy describes our policies and procedures on the collection,
            use and disclosure of your personal information
            when you use the application or the website and tells you about your privacy rights and how the law protects
            you. please read our privacy policy carefully before using our service.
        </p>
        <h1>links to other websites</h1>
        <p>our service may contain links to third-party web sites or services that are not owned or controlled by the
            company.</p>
        <p>
            the company has no control over, and assumes no responsibility for, the content, privacy policies, or
            practices of any third party web sites or services. you further acknowledge and agree that the company shall
            not be responsible or liable, directly or
            indirectly, for any damage or loss caused or alleged to be caused by or in connection with the use of or
            reliance on any such content, goods or services available on or through any such web sites or services.
        </p>
        <p>we strongly advise you to read the terms and conditions and privacy policies of any third-party web sites or
            services that you visit.</p>
        <h1>termination</h1>
        <p>we may terminate or suspend your access immediately, without prior notice or liability, for any reason
            whatsoever, including without limitation if you breach these terms and conditions.</p>
        <p>upon termination, your right to use the service will cease immediately.</p>
        <h1>limitation of liability</h1>
        <p>
            notwithstanding any damages that you might incur, the entire liability of the company and any of its
            suppliers under any provision of this terms and your exclusive remedy for all of the foregoing shall be
            limited to the amount actually paid by you through
            the service or 100 usd if you haven't purchased anything through the service.
        </p>
        <p>
            to the maximum extent permitted by applicable law, in no event shall the company or its suppliers be liable
            for any special, incidental, indirect, or consequential damages whatsoever (including, but not limited to,
            damages for loss of profits, loss of
            data or other information, for business interruption, for personal injury, loss of privacy arising out of or
            in any way related to the use of or inability to use the service, third-party software and/or third-party
            hardware used with the service,
            or otherwise in connection with any provision of this terms), even if the company or any supplier has been
            advised of the possibility of such damages and even if the remedy fails of its essential purpose.
        </p>
        <p>
            some states do not allow the exclusion of implied warranties or limitation of liability for incidental or
            consequential damages, which means that some of the above limitations may not apply. in these states, each
            party's liability will be limited to the
            greatest extent permitted by law.
        </p>
        <h1>&quot;as is&quot; and &quot;as available&quot; disclaimer</h1>
        <p>
            the service is provided to you &quot;as is&quot; and &quot;as available&quot; and with all faults and
            defects without warranty of any kind. to the maximum extent permitted under applicable law, the company, on
            its own behalf and on behalf of its affiliates
            and its and their respective licensors and service providers, expressly disclaims all warranties, whether
            express, implied, statutory or otherwise, with respect to the service, including all implied warranties of
            merchantability, fitness for
            a particular purpose, title and non-infringement, and warranties that may arise out of course of dealing,
            course of performance, usage or trade practice. without limitation to the foregoing, the company provides no
            warranty or undertaking,
            and makes no representation of any kind that the service will meet your requirements, achieve any intended
            results, be compatible or work with any other software, applications, systems or services, operate without
            interruption, meet any performance
            or reliability standards or be error free or that any errors or defects can or will be corrected.
        </p>
        <p>
            without limiting the foregoing, neither the company nor any of the company's provider makes any
            representation or warranty of any kind, express or implied: (i) as to the operation or availability of the
            service, or the information, content, and materials
            or products included thereon; (ii) that the service will be uninterrupted or error-free; (iii) as to the
            accuracy, reliability, or currency of any information or content provided through the service; or (iv) that
            the service, its servers,
            the content, or e-mails sent from or on behalf of the company are free of viruses, scripts, trojan horses,
            worms, malware, timebombs or other harmful components.
        </p>
        <p>
            some jurisdictions do not allow the exclusion of certain types of warranties or limitations on applicable
            statutory rights of a consumer, so some or all of the above exclusions and limitations may not apply to you.
            but in such a case the exclusions and
            limitations set forth in this section shall be applied to the greatest extent enforceable under applicable
            law.
        </p>
        <h1>governing law</h1>
        <p>the laws of the country, excluding its conflicts of law rules, shall govern this terms and your use of the
            service. your use of the application may also be subject to other local, state, national, or international
            laws.</p>
        <h1>disputes resolution</h1>
        <p>if you have any concern or dispute about the service, you agree to first try to resolve the dispute
            informally by contacting the company.</p>
        <h1>for european union (eu) users</h1>
        <p>if you are a european union consumer, you will benefit from any mandatory provisions of the law of the
            country in which you are resident in.</p>
        <h1>united states legal compliance</h1>
        <p>
            you represent and warrant that (i) you are not located in a country that is subject to the united states
            government embargo, or that has been designated by the united states government as a &quot;terrorist
            supporting&quot; country, and (ii) you are not
            listed on any united states government list of prohibited or restricted parties.
        </p>
        <h1>severability and waiver</h1>
        <h2>severability</h2>
        <p>
            if any provision of these terms is held to be unenforceable or invalid, such provision will be changed and
            interpreted to accomplish the objectives of such provision to the greatest extent possible under applicable
            law and the remaining provisions will
            continue in full force and effect.
        </p>
        <h2>waiver</h2>
        <p>
            except as provided herein, the failure to exercise a right or to require performance of an obligation under
            these terms shall not effect a party's ability to exercise such right or require such performance at any
            time thereafter nor shall the waiver of
            a breach constitute a waiver of any subsequent breach.
        </p>
        <h1>translation interpretation</h1>
        <p>these terms and conditions may have been translated if we have made them available to you on our service. you
            agree that the original english text shall prevail in the case of a dispute.</p>
        <h1>changes to these terms and conditions</h1>
        <p>
            we reserve the right, at our sole discretion, to modify or replace these terms at any time. if a revision is
            material we will make reasonable efforts to provide at least 30 days' notice prior to any new terms taking
            effect. what constitutes a material
            change will be determined at our sole discretion.
        </p>
        <p>
            by continuing to access or use our service after those revisions become effective, you agree to be bound by
            the revised terms. if you do not agree to the new terms, in whole or in part, please stop using the website
            and the service.
        </p>
        <h1>contact us</h1>
        <p>if you have any questions about these terms and conditions, you can contact us:</p>
        <ul>
            <li>
                <p>by email: ----------</p>
            </li>
            <li>
                <p>by phone number: ----------</p>
            </li>
        </ul>
            </div>
        </div>
  </body>
  <?php include 'footer.php'; ?>
</html>