<?php
        $page_title="Paper Submission Requirements";
        include("include/header.php");
?>


<h2 class="hcls">Paper Submission Requirements</h2>

<p>The SIGCOMM 2012 conference seeks papers
describing significant research contributions to the field of computer and data
communication networks. Paper submissions typically report novel results firmly
substantiated by experimentation, simulation, or analysis. As an aid to the
community, the SIGCOMM Web site provides <a href="http://www.sigcomm.org/publish/hints-tips-and-guides/" >useful advice</a>

to authors planning to submit to SIGCOMM conferences. Papers published in <a
href="http://www.sigcomm.org/top/learn/sigcomm-conference/sigcomm-conference" >previous SIGCOMM conferences</a> also serve as
excellent examples of anticipated scope, rigor, and length.</p>

<p>To submit papers to the SIGCOMM 2012
conference, first carefully read the following sections on:</p>

<ul>
    <li><a href="#registration" >Paper registration</a>
- what to register, and how to determine TPC conflicts.</li>


    <li><a href="#novelty" >Paper novelty</a> - what is
eligible to be submitted, including policies on prior papers at a workshop.</li>

    <li><a href="#anonymity" >Paper anonymity</a> - how
to prepare for anonymous submission.</li>

    <li><a href="#formatting" >Paper formatting</a> - 
how to format your paper, including LaTeX and Word templates.</li>

    <li><a href="#response" >Author response</a> - a author response process being (re)introduced in 2012.</li>

    <li><a href="#acceptance" >Paper acceptance</a> - what to expect if your paper is accepted.</li>
</ul>

<p>Then use the <b><a href="http://sigcomm12.ucsd.edu/hotcrp/" >paper submission
site</a></b> to:</p>

<ul>

    <li>Register your paper by <b>9:00 pm Pacific Standard Time (PST), January 20, 2012</b>.</li>

    <li>Submit your paper by <b>9:00 pm Pacific Standard Time (PST), January 27, 2012</b>.</li>

</ul>

<p><b>These are <em>hard deadlines</em> and no extensions will be given.</b></p>

<p>The information on this page is intentionally comprehensive.
Veteran authors will likely find it familiar, but
new authors may not. Our goal is to ensure that all authors have consistent
expectations for the submission process, and that everyone observes them
fairly. If you have any questions about submitting papers to SIGCOMM 2012, or
encounter problems with the paper submission site, contact the <a
href="mailto:sigcomm12-pc-chairs@acm.org">PC chairs</a> well before the deadlines.</p>


<h2><a name="registration">Paper Registration</a></h2>

<p>Registration only requires submission of
paper metadata: paper title and abstract, author names, affiliations, contact
email addresses, topics matching the subject matter of the paper, and conflicts with PC members. The paper itself does not need
to be submitted at the registration deadline. However, the paper title and
abstract submitted during registration must be complete - not placeholders - 
and correctly characterize the paper that will be submitted. Authors can change
the wording of their titles and abstracts for submission, but their essence should
not fundamentally change. The PC will use the information provided during
registration as a basis for making review assignments.</p>

<p>Both authors and PC members provide PC
conflict information. The PC will review paper conflicts to ensure the integrity
of the submission process, adding conflicts where necessary. Broadly, we define
conflict of interest with a PC member using the following principles:</p>

<ol>

    <li>You are currently employed at the same institution,
have been previously employed at the same institution within the last 12
months, or are going to begin employment within the next 6 months at the same
institution.</li>

    <li>You have a professional partnership as follows:
    <ul>

        <li>Past or present association as thesis advisor or advisee.</li>

        <li>Collaboration on a project, publication, or grant proposal, or 
   co-editing of a journal or conference proceedings
   within the past 2 years (i.e., 2010 or later).</li>

    </ul>
    </li>

</ol>


<p>If there is no basis for PC conflicts
provided by authors, those conflicts will be removed. In particular, do not
improperly identify PC members as conflicts to avoid an individual who might
review your paper.</p>


<h2><a name="novelty">Paper Novelty</a></h2>

<p>Under no circumstances should authors submit previously published
work, submit the same work simultaneously to multiple venues, or
submit papers that plagiarize the work of other authors. Like other
conferences and journals, SIGCOMM prohibits these practices and may
take action against authors who have engaged in these. In some cases, the
program committee may share information about submitted papers with
other conference chairs and journal editors to ensure the integrity of
papers under consideration. If the PC discovers a violation of these
principles, sanctions may include, but are not limited to, contacting
the institutions of the authors and publicizing the details of the
case.</p>


<p>SIGCOMM will review extended versions of
previously-published short preliminary papers (such
as workshop papers) in accordance with published <a
href="http://www.sigcomm.org/about/policies/frequently-asked-questions-faq/" >SIGCOMM policy</a> and the <a
href="http://www.acm.org/publications/policies/plagiarism_policy" >ACM
Plagiarism Policy</a>. To preserve author anonymity, authors MUST cite
this related prior work, while making a good-faith effort not to reveal
common authorship. For example, such a submission should not explicitly
point out that specific text has been adopted from the author's own
prior work.</p>

<p>Papers accompanied by nondisclosure agreement requests will not be considered nor ever disclosed.</p>


<h2><a name="anonymity">Paper Anonymity</a></h2>

<p>All submitted papers will be judged based
on their quality and relevance through double-blind reviewing, where the
identities of the authors are withheld from the reviewers. As an author, you
are required to make a good-faith effort to preserve the anonymity of your
submission, while at the same time allowing the reader to fully grasp the
context of related past work, including your own. Common sense and careful
writing will go a long way towards preserving anonymity. Minimally, please take
the following steps when preparing your submission:</p>

<ul>

    <li>Remove the names and affiliations of authors from the title page.</li>

    <li>Remove acknowledgment of identifying names and funding sources.</li>

    <li>Use care in naming your files. Source file names (e.g., &quot;Alice-n-Bob.dvi&quot;) are often embedded in the final output as readily accessible comments.</li>

    <li>Use care in referring to related work, particularly your own. Do not omit references to provide anonymity, as this leaves the reviewer unable to grasp the context. Instead, reference your past work in the third person, just as you would any other piece of related work by another author.</li>

</ul>


<h2><a name="formatting">Paper Formatting</a></h2>

<p>All submissions must obey the following
formatting requirements. Your goal as an author is to produce a clearly
readable submission within these constraints.</p>

<p>Before final submission, you are expected
to make sure that your paper complies with these requirements. Authors are
strongly discouraged from violating the formatting requirements with the aim of
including additional material: <em>submissions that violate the formatting requirements may not be
reviewed</em>. The submission system can report possible formatting violations in
papers that you upload. You can also visually inspect a page-by-page report of
your paper format using the same tool as the submission system via a separate <a
href="http://www.sysnet.ucsd.edu/sigops/banal/index.php" >online form</a>.</p>

<p>After the submission deadline, we will use
the same tool to check the conformance of papers. The format checking tool uses
heuristics and can make mistakes. The PC chairs will manually inspect and
possibly reject those papers with evident format violations. However, no paper
will be rejected due to format violations without first being checked by hand.</p>

<ul>

    <li>Submit papers of no more than fourteen (14) single-spaced pages, including figures, tables, references, appendices, etc. Papers longer than 14 pages will not be reviewed.</li>

    <li>Submit papers using a 10pt font on 12pt leading formatted for printing on Letter-sized (8.5&quot; by 11&quot;) paper. Paper text blocks must follow ACM guidelines: double-column, with each column 9.25&quot; by 3.33&quot;, 0.33&quot; space between columns. Each column must contain no more than 55 lines of text. For submission, use the following <a href="sig-alternate-10pt.cls" rel="external">LaTeX template</a> or <a href="word-acm-10pt-on-12pt-7.0x9.25.doc" rel="external">Word template</a> to ensure compliance. Please do NOT use copies of these templates that you might find elsewhere since we cannot be sure that those are compliant.
   </li>
    <li>Note that the final copy will be 12 pages using the SIGCOMM standard 9pt format. This style may result in less text than what you might be able to fit in 14 pages at 10pt, so there is no value in pushing the envelope.</li>

    <li>List the submission number and the number of pages in your paper in the author block, e.g., &quot;Paper #N, 14 pages&quot;, beneath your title. Registering your title, abstract, etc., will provide a paper submission number. Per the anonymity guidelines, remember to remove any author names.</li>

    <li>Provide an abstract of no more than 200 words.</li>

    <li>Number the pages.</li>

    <li>Submit papers in PDF (Portable Document Format) and ensure that they are compatible with Adobe Acrobat (English version). Other formats, including Postscript, will not be accepted. Avoid using non-standard fonts. The PC must be able to display and print your submission exactly as we receive it using only standard tools and printers, so we strongly suggest that you use only standard fonts that are embedded in the PDF file.</li>

    <li>Ensure that the paper prints well on black-and-white printers, not color printers. Pay particular attention to figures and graphs in the paper to ensure that they are legible without color. Explicitly using grayscale colors will provide best control over how graphs and figures will print on black-and-white printers.</li>

    <li>Ensure that labels and symbols used in graphs and figures are legible, including the font sizes of tick marks, axis labels, legends, etc.</li>

    <li>Limit the file size to less than 15 MB. Contact the <a href="mailto:sigcomm12-pc-chairs@acm.org">PC chairs</a> if you have a file larger than 15 MB.</li>

</ul>


<h2><a name="response">Author Response</a></h2>

<p> This year SIGCOMM will allow authors to provide brief feedack after first round reviews.
This feedback, or author response, will be limited to being no more than 400 words <u>and</u> 2600 characters long, and can be used by authors to clarify
possible misperceptions and to respond to specific questions, if any, raised by the reviewers.  
<em>We have provided a set of guidelines <a class="lnkcls" href="AuthorResponseGuidelines.htm" >HTML</a> &nbsp; <a class="lnkcls" href="AuthorResponseGuidelines.pdf" rel="external">PDF</a> to enable authors to maximize the effectiveness of this mechanism.</em>
The relevant
dates are as follows. The first round reviews will be available on the submission
web site by <b>March 23, 2012</b>. Authors who wish to provide a response to the reviews of their paper can do so by logging in after the
above date to read the reviews and then submitting a rebuttal by <b>9:00 PM PDT March 30, 2012</b>. <em>We ask authors to mark the above dates in 
their calendar and to NOT depend on or wait for a notification from the system.</em> 

<h2><a name="acceptance">Paper Acceptance</a></h2>
<p>The SIGCOMM 2012 PC will notify authors
of review decisions by April 30, 2012. All accepted papers may be shepherded by
members of the PC. Authors of accepted papers should plan to interact with
their shepherds immediately after notification, and to budget sufficient time
between acceptance notification and the camera-ready deadline of June 10,
 2012 to
coordinate with their shepherd. It is a requirement that the paper be
considered acceptable to the assigned shepherd so that the updates to the paper
reflect the issues raised by the PC (conflicts will be mediated by the PC
chairs) before the paper is considered &quot;accepted&quot; to appear in the
conference proceedings. In addition, the publisher of the SIGCOMM proceedings
will review all accepted papers submitted for the camera-ready deadline.
Authors should also budget sufficient time immediately after the June 10
deadline to be available and responsive to any editing changes requested by the
publisher after submitting their camera-ready paper.

</p>

<p>After acceptance, substantive changes to
paper titles require approval by the PC chairs. Only in exceptional
circumstances should authors change their author list,
and only with the approval of the PC chairs.</p>

<p>Authors of accepted papers will also need
to sign an ACM copyright release form. Electronic copies of the camera-ready
papers will be published on the conference Web site before the conference,
unless authors specifically request otherwise. All rejected papers will be
permanently treated as confidential.</p>
<!-- 
<h2 class="hcls">Camera-ready preparation instructions for main conference</h2>
Please follow this <a href="http://www.sheridanprinting.com/typedept/sigcomm.htm">link</a>.
<br>
<br>
-->

<?php
    include ("include/footer.php");
?>


