<?php include '../nan_helper.php';

printNaNMainHeader();
?>
	
	 <p>
    Eclipse 4diac's components and their related resources can be downloaded from the <a href="../../en_dow.php">Eclipse Project downloads page</a>.
    </p>
	
	<p>Here are some of the more noteworthy items available in this release:</p>

	<ul>
		<li><a href="4diacIDE.php">New features in 4diac IDE</a></li>
    	<li><a href="4diacFORTE.php">New features in 4diac FORTE</a></li>
    </ul>

    <p>
        <b>Windows 10 users:</b> <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=548443">Windows 10 Defender significantly slows down Eclipse and therfore also 4diac IDE</a>. 
        The reason is Windows 10 Defender scanning the JAR files.
        The problem has been reported to Microsoft <a href="https://aka.ms/AA67uk5">here</a>.
        Until then, a workaround to this problem is to add 4diac IDE root directory to Windows 10 Defender's exclusion list, detailed steps are shared <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=548443#c28">here</a>.
    </p>
    <p>Note: This is not just an Eclipse 4diac issue on Windows 10.</p>
	


<?php printNaNfooter()?> 
