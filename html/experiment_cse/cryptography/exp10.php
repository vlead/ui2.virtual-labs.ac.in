<div class="tab-content"  style="margin-left:0px;">
<div class="tab-pane active" id="tab1_lJ">

<p>
                A Digital Signature is an authentication mechanism that enables the
                creator of the message to attack a code that acts as a signature. The
                signature is formed by taking the hash of the message and encrypting
                the message with the creator's private key. The signature guarantees
                the source and integrity of the message.
              </p>
               <br>
               <h3>About the experiment:</h3>
               <p>In Public key setting,it becomes difficult to verify for a receiver whether message is originated from claimed source.</p>
                <p> In this experiment, we show how can a receiver verify integrity of the message in public key setting.</p>
                <p> Your task is to verify, whether digital signature scheme really works and why it works?      </p>


</div>
<div class="tab-pane" id="tab2_lJ">

 <p>For a very brief theory of digital signature scheme and their analysis, click <a href="media/dss1.pdf">here</a></p><br>
                        <a href="media/dss1.pdf"><img src="images/image11.png" alt="here"/></a>



</div>
<div class="tab-pane" id="tab3_lJ">

          <p>To understand "How and Why Digital signature schemes?"</p>


</div>
<div class="tab-pane" id="tab4_lJ">

 <p>Digitally sign the plaintext with Hashed RSA.</p>
                        <form name="rsatest" onsubmit="do_encrypt();return false;">
 <p>Plaintext (string):</p>
<p><input name="user_input" value="test" id="input" size="40" type="text">
<input onclick="document.getElementById('hash_value').value = hex_sha1(document.getElementById('input').value)" value="SHA-1" type="button"></p><br>
<p>Hash output(hex):</p> <p><input id="hash_value" value="" size="40" readonly="true" type="text"></p><br><br>

<p>Input to RSA(hex):</p> <p><input name="plaintext" value="" size="40" type="text">
<input value="Apply RSA" onclick="do_encrypt();" type="button"></p><p>
Digital Signature(hex):<br>

<textarea name="ciphertext" rows="4" cols="70"></textarea></p><p>
Digital Signature(base64):<br>
<textarea name="cipherb64" rows="3" cols="70"></textarea></p><p>
Status:<br>
<input name="status" size="40" type="text"></p><p>
</p><hr>
<h2>RSA public key</h2><p>
Public exponent (hex, F4=0x10001):<br>
<input name="e" value="3" size="20" type="text"></p><p>
Modulus (hex):<br>

<textarea name="n" type="text" rows="4" cols="70"></textarea><br>
<input value="1024 bit" onclick="set_1024f4();" type="button">
<input value="1024 bit (e=3)" onclick="set_1024e3();" type="button">
<input value="512 bit" onclick="set_512f4();" type="button">
<input value="512 bit (e=3)" onclick="set_512e3();" type="button">

                </p></form>


</div>
<div class="tab-pane" id="tab5_lJ">

<p>
                                <p><b>Step 1:</b> Enter the input text to be encrypted in the 'Plaintext' area and generate hash value for message by clicking on the <b>SHA-1</b> button</p>
<br>
                                <p><b>Step 2:</b> Copy content of <b>Hash Output(hex)</b> field  and paste it in <b>Input to RSA(hex)</b> field.</p>
<br>
                                <p><b>Step 3:</b> Select keysize of public key from <b>RSA Public key</b> section by clicking on any key button.</p>
<br>
                                <p><b>Step 4:</b> Click on <b>Apply RSA</b> button to generate a digital signature. </p>
<br>
        </p>


</div>
<div class="tab-pane" id="tab6_lJ">

 <ol>
                        <li>Digital signature can’t provide ______ for the message
                                <ol class="d">
                                  <li><input name="quest_644" type="radio" value="Integrity " />Integrity </li>
                                  <li><input name="quest_644" type="radio" value="Confidentiality" />Confidentiality</li>
                                  <li><input name="quest_644" type="radio" value="Non repudiation " />Non repudiation </li>
                                  <li><input name="quest_644" type="radio" value="Authentication " />Authentication </li>
                                </ol>
                        </li>
<br>
                        <li>Digital signature uses ______  for generating valid signature
                                <ol class="d">
                                  <li>Private key </li>
                                  <li>Public key</li>
                                  <li>Secret key</li>
                                  <li>None of the aboove</li>
                                </ol>
                        </li>
<br>
                        <li>Verification Algorithm uses ______  for  validating digital signature
                                <ol class="d">
                                  <li>Private key </li>
                                  <li>Public key</li>
                                  <li>Secret key</li>
                                  <li>None of the aboove</li>
                                </ol>
                        </li>
<br>
                        <li>Is digital signature scheme possible without public key cryptography
                                <ol type="d">
                                  <li>Yes </li>
                                  <li>No</li>
                                  <li>May be exist </li>
                                  <li>None of the aboove</li>
                                </ol>
                        </li>
<br>

                                <li>
                                        Explain importance of Hashing(using experiment)and explain why Hashing is needed ?
                                </li>
<br>
                                <li>
                                        Suggest a scheme that does not use any hashing scheme.
                                <li>
                                        Explain why digital signature schemes works ?
                                </li>
<br>

                </ol>



</div>
</div>

