<div class="tab-content"  style="margin-left:0px;">
<div class="tab-pane active" id="tab1_lI">

<p> 
            In this experiment, we give an implementation of "textbook" RSA and ask you to design a secure system in line with the public-key standard(PKCSv1.5)
            </p>

</div>
<div class="tab-pane" id="tab2_lI">

<p> For a very brief theory of shift ciphers and their analysis, click <a href="media/PKCS1.pdf">here</a><br>

                <a href="media/PKCS1.pdf"><img src="images/image10.png" alt="here"/></a><br>



</div>
<div class="tab-pane" id="tab3_lI">

 <p>
            To understand PKCS v1.5 scheme.
          </p>


</div>
<div class="tab-pane" id="tab4_lI">

 <p>
               <form name="rsatest" onsubmit="do_encrypt();return false;">
                        <p>Plaintext (string):</p><br>
                        <p><input name="plaintext" value="test" size="60" type="text"><br>

                        <input value="encrypt" onclick="do_encrypt();" type="button"></p>
                        <p>
                        Ciphertext (hex):<br>
                        <textarea name="ciphertext" rows="4" cols="70"></textarea><br>
                        <input value="decrypt" onclick="do_decrypt();" type="button"></p><p>
                        Decrypted Plaintext (string):<br>
                        <input name="decrypted" size="60" type="text"></p><p>
                        Status:<br>
                        <input name="status" size="60" type="text"></p><p>
                        </p><hr>
                        <h2>RSA private key</h2><p>
                        <input value="1024 bit" onclick="set_1024f4();" type="button">
                        <input value="1024 bit (e=3)" onclick="set_1024e3();" type="button">

                        <input value="512 bit" onclick="set_512f4();" type="button">
                        <input value="512 bit (e=3)" onclick="set_512e3();" type="button">
                        &nbsp; <input value="Generate" onclick="do_genrsa();" type="button">
                        bits = <input name="bits" value="512" size="10" type="text">
                        </p><p>
                        Modulus (hex):<br>
                        <textarea name="n" type="text" rows="4" cols="70"></textarea></p><p>
                        Public exponent (hex, F4=0x10001):<br>
                        <input name="e" value="3" size="20" type="text"></p><p>
                        Private exponent (hex):<br>
                        <textarea name="d" type="text" rows="4" cols="70"></textarea></p><p>

                        P (hex):<br>
                        <textarea name="p" type="text" rows="2" cols="70"></textarea></p><p>
                        Q (hex):<br>
                        <textarea name="q" type="text" rows="2" cols="70"></textarea></p><p>
                        D mod (P-1) (hex):<br>
                        <textarea name="dmp1" type="text" rows="2" cols="70"></textarea></p><p>
                        D mod (Q-1) (hex):<br>
                        <textarea name="dmq1" type="text" rows="2" cols="70"></textarea></p><p>
                        1/Q mod P (hex):<br>

                        <textarea name="coeff" type="text" rows="2" cols="70"></textarea></p>
                </form>
</p>


</div>
<div class="tab-pane" id="tab5_lI">

<p>
                                <p><b>Step 1:</b> Enter the input text to be encrypted in the 'Plaintext' area </p>
<br>
                                <p><b>Step 2:</b> Select keysize of public key from <b>RSA Private key</b> section by clicking on one of the key button.</p>
<br>
                                <p><b>Step 3:</b> Click on <b>encrypt</b> button to generate a ciphertext. </p>
<br>
        </p>



</div>
<div class="tab-pane" id="tab6_lI">

<ol>
                <li>Let p = 17, q = 11 and N = pq. If (in the public-key) e= 7, then a possible value for the trap-door d (in the private-key) in an RAS cryptosystem is
                        <ol list-style-type ="lower-latin">
                          <li><input name="quest_651" type="radio" value="22" />22</li>
                          <li><input name="quest_651" type="radio" value="153" />153</li>
                          <li><input name="quest_651" type="radio" value="7" />7</li>
                          <li><input name="quest_651" type="radio" value="23" />23</li>
                        </ol>
                </li>
<br>
                <li>Encrypt the message m = 57 with the textbook RSA with the public key pk = N= 253, e = 3
                        <ol list-style-type ="lower-latin">
                          <li><input name="quest_652" type="radio" value="240" />240</li>
                          <li><input name="quest_652" type="radio" value="250" />250</li>
                          <li><input name="quest_652" type="radio" value="257" />257</li>
                          <li><input name="quest_652" type="radio" value="196" />196</li>
                        </ol>
                </li>
<br>
                <li>In Asymmetric-Key cipher, the sender uses the _____ key
                        <ol class="multichoice" type="a">
                          <li><input name="quest_642" type="radio" value="Private" />Private</li>
                          <li><input name="quest_642" type="radio" value="Public" />Public</li>
                          <li><input name="quest_642" type="radio" value="Either Private or Public" />Either Private or Public</li>
                          <li><input name="quest_642" type="radio" value="None" />None</li>
                        </ol>
                </li>
<br>


                        <li>Understand PKCSv1.5 scheme(using experimetn) and try to break above scheme.</li>
<br>
                        <li>Why PKCSv1.5 is more Secure</li>
<br>


           </ol>



</div>
</div>

