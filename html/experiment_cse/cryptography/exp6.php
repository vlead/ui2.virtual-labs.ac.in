<div class="tab-content"  style="margin-left:0px;">
<div class="tab-pane active" id="tab1_lF">

 <p> 
                In this experiment, you are asked to design the triple DES cryptosystem provided that you are given an implementation of DES 
            </p>


</div>
<div class="tab-pane" id="tab2_lF">

<p>For a very brief theory of Digital encryption Standard and their analysis, click <a href="media/DES1.pdf">here</a></p><br>
                        <a href="media/DES1.pdf"><img src="images/image7.png" alt="here"/></a>

</div>
<div class="tab-pane" id="tab3_lF">

<p>
           To understand how to convert a DES implementation to a triple-DES implementation
          </p>


</div>
<div class="tab-pane" id="tab4_lF">


	<p><br/><hr><br/><p><b>PART I</b></p>

        <p>             <form name="stuff">
<table>
    <tbody>
      <tr>
        <td valign="top">Message</td>
        <td><input id="plaintext" value=" 00010100 11010111 01001001 00010010 01111100 10011110 00011011 1000001" size="65" readonly="readonly" type="text">
            <input value="Change plaintext" onclick="changePlaintext();" type="button"><br>
      </td></tr>
      <tr>
        <td>Key Part A</td>
        <td><input id="keya" value="3b3898371520f75e" size="25" readonly="readonly" type="text">
            <input value="Change Key A" onclick="changeKeyA();" type="button"></td>
      </tr>
      <tr>
        <td>Key Part B</td>
        <td><input name="keyb" id="keyb" value="922fb510c71f436e" size="25" readonly="readonly" type="text">
            <input value="Change Key B" onclick="changeKeyB();" type="button"></td>
      </tr>
    </tbody>
  </table>

 <br/><hr><br/><p><b>PART II</b></p>


  <table>
    <tbody>
      <tr>
        <td valign="top">Your text to be encrypted/decrypted:</td>
        <td><input name="indata" id="plaintext" size="65" type="text">
      </td></tr>
      <tr>
        <td>Key to be used:</td>
        <td><input name="key" id="key" size="25" type="text">
      </td></tr>
      <tr>
        <td colspan="2" align="center">
            <input value="DES Encrypt" onclick="do_des(true);" type="button">
            <input value="DES Decrypt" onclick="do_des(false);" type="button"><br>
        </td>
      </tr>
      <tr>
        <td valign="top">Output:</td>
        <td><input name="outdata" size="65" type="text"><br>
        </td>
      </tr>
    </tbody>
  </table>
</form>
<hr><br/><p><b>PART III</b></p>
  <p>Enter your answer here: </p>
  <p><input id="userans" size="65" type="text"></p> <p><input value="Check Answer!" onclick="checkAnswer();" type="button"> </p>
  <div id="notification" style="width: 300px; height: 10px; padding-top: 20px;"></div>



          </p>




</div>
<div class="tab-pane" id="tab5_lF">

<p>
           <b>Step 1:</b> Generate Plaintext <b>m</b>, <b>keyA</b> and <b>keyB</b> by clicking on rexpective buttons <b>PART I</b> of the simulation page.  <br><br>
                                <b>Step 2:</b> Enter generated Plaintext <b>m</b> from <b>PART I</b> to <b>PART II</b> in "Your text to be encrypted/decrypted:" block. <br><br>
                                <b>Step 3:</b> Enter generated <b>keyA</b> from <b>PART I</b> to <b>PART II</b>  "Key to be used:" block and click on DES encrpt button to output ciphertext <b>c1</b>.This is First Encryption. <br><br>
                                <b>Step 4:</b> Enter generated ciphertext <b>c1</b> from <b>PART II</b>  "Output:" Block to <b>PART II</b> in "Your text to be encrypted/decrypted:" block.  <br><br>
                                <b>Step 5:</b> Enter generated <b>keyB</b> from <b>PART I</b> to <b>PART II</b> in "Key to be used:" block and click on DES decrypt button to output ciphertect <b>c2</b>.This is Second Encryption. <br><br>
                                <b>Step 6:</b> Enter generated  ciphertext <b>c2</b> from <b>PART II</b>  "Output:" block to <b>PART II</b> in "Your text to be encrypted/decrypted:" block. <br><br>
                                <b>Step 7:</b> Enter generated <b>keyA</b> from <b>PART I</b> to <b>PART II</b>  "Key to be used:" block and click on DES encrpt button to output ciphertext <b>c3</b>.This is Third Encryption. As Encryption is done thrice.This Scheme is called triple DES.<br><br>
                                <b>Step 7:</b> Enter generated ciphertext <b>c3</b> from <b>PART II</b> "Output:" Block to  <b>PART III</b> "Enter your answer here:" block inorder to verify your Triple DES.<br><br>
            </p>


</div>
<div class="tab-pane" id="tab6_lF">

<ol>
                <li><p>In DES input, key length ___ bits and plaintext length ____ bits.</p>
<ol class="d">
  <li><input name="quest_585" type="radio" value="56 bit key length, 64 bit plaintext " />56 bit key length, 64 bit plaintext </li>
  <li><input name="quest_585" type="radio" value="56 bit key length, 120 bit plaintext " />56 bit key length, 120 bit plaintext </li>
  <li><input name="quest_585" type="radio" value="64 bit key length, 120 bit plaintext " />64 bit key length, 120 bit plaintext </li>
  <li><input name="quest_585" type="radio" value="64 bit key length, 64 bit plaintext " />64 bit key length, 64 bit plaintext </li>
</ol></li>
<br>
<br>

                <li><p>DES stands for _________ and AES stands for __________</p>
<ol class="d">
  <li><input name="quest_586" type="radio" value="Data Encryption software, Advanced Encryption Software" />Data Encryption software, Advanced Encryption Software</li>
  <li><input name="quest_586" type="radio" value="Data Encryption Standard, Advanced Encryption Standard" />Data Encryption Standard, Advanced Encryption Standard</li>
  <li><input name="quest_586" type="radio" value="Data Encryption System, Advanced Encryption System" />Data Encryption System, Advanced Encryption System</li>
  <li><input name="quest_586" type="radio" value="None" />None</li>
</ol></li>
<br>
<br>

                <li><p>DES has an initial and final permutation block and ____ rounds</p>
<ol class="d">
  <li><input name="quest_587" type="radio" value="14" />14</li>
  <li><input name="quest_587" type="radio" value="16" />16</li>
  <li><input name="quest_587" type="radio" value="8" />8</li>
  <li><input name="quest_587" type="radio" value="12" />12</li>
</ol></li>
<br>
<br>

                <li><p>In DES the length of each round key?</p>
<ol class="d">
  <li><input name="quest_588" type="radio" value="16 bit" />16 bit</li>
  <li><input name="quest_588" type="radio" value="32 bit" />32 bit</li>
  <li><input name="quest_588" type="radio" value="54 bit" />54 bit</li>
  <li><input name="quest_588" type="radio" value="48 bit" />48 bit</li>
</ol></li>
<br>
<br>

        </ol>


</div>
</div>

