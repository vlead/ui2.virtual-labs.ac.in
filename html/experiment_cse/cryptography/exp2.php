<div class="tab-content" style="margin-left:0px;">
<div class="tab-pane active" id="tab1_lB">
<p> 
                We are able to break the shift cipher because of it's small key space.
                In general, we learnt that the large key space is necesary for secrecy.
                However, we will now see that <span style="font-style: italic;">large key space is not always sufficient </span>either.<br>
             </p>
                                    <br>
    
                <h3>About the experiment:</h3>
            <p> 
                In this experiment, we work with another well-known historical
                encryption scheme, namely the mono-alphabetic substitution cipher, that
                has a very large key space.
                However, it is quite easily broken using "Frequency analysis" methods.
                Your task is to break this cipher. Specifically, given (only) the 
                ciphertext in some instance of a mono alphabetic substitution cipher,
                you need to find the plaintext and the secret key. 
            </p>

	    </div>
	    <div class="tab-pane" id="tab2_lB">
	    <p>Consider we have the plain text "cryptography".<br> By using the substitution table below, we can encrypt our plain text as follows:

	    <table cellspacing="8">
	    <tbody><tr>
	    <td>a</td> <td>b</td> <td>c</td> <td>d</td>
	    <td>e</td> <td>f</td> <td>g</td> <td>h</td>
	    <td>i</td> <td>j</td> <td>k</td> <td>l</td>
	    <td>m</td> <td>n</td> <td>o</td> <td>p</td>
	    <td>q</td> <td>r</td> <td>s</td> <td>t</td>
	    <td>u</td> <td>v</td> <td>w</td> <td>x</td>
	    <td>y</td> <td>z</td>
	    </tr>
	    <tr>
	    <td>J</td> <td>I</td> <td>B</td> <td>R</td>
	    <td>K</td> <td>T</td> <td>C</td> <td>N</td>
	    <td>O</td> <td>F</td> <td>Q</td> <td>Y</td>
	    <td>G</td> <td>A</td> <td>U</td> <td>Z</td>
	    <td>H</td> <td>S</td> <td>V</td> <td>W</td>
	    <td>M</td> <td>X</td> <td>L</td> <td>D</td>
	    <td>E</td> <td>P</td>
	    </tr>
	    </tbody></table>
	    <p>&nbsp;&nbsp;plain text: c r y p t o g r a p h y</p>
	    <br>
	    <p>cipher text: B S E Z W U C S J Z N E</p><br><br>
	    <p>Hence we obtain the cipher text as "BSEZWUCSJZNE".</p>
	    </p>

	    <h3>Cryptanalysis</h3><p>Note
	    that the frequency of occurrence of characters in the plaintext is
	    "preserved" in the ciphertext. For instance, the most frequent
	    character in the ciphertext is likely to be the encryption of the
	    plaintext character "e" which is the most frequently occurring
	    charecter in English. For a very brief theory of&nbsp; the
	    mono-alphabetic substitution cipher and its cryptanalysis, click <a href="media/monoalphacipher.pdf">here</a><br>
	    <br>
	    <br>
	    <a href="media/monoalphacipher.pdf"><img src="images/image2.png" alt="here"/></a><p/>


</div>
<div class="tab-pane" id="tab3_lB">
  <p>To understand that just having a large keyspace is not enough to achieve secure encryption.</p>
</p>
</div>
<div class="tab-pane" id="tab4_lB">
                        <h2>Breaking the Mono Alphabetic Substitution Cipher</h2>
<br/><hr/><br/>
                        <p>PART I</p>
<p>Decrypt the following cipher text. A tool to simulate the
Mono-Alphabetic Subsitution cipher is provided beneath for your
assistance.
</p>
<p>Here is the table of frequencies of English alphabets for your reference:</p>
<div style="text-align: center;">
<table ;="" bgcolor="black" border="0" cellpadding="3" cellspacing="1">
<tbody><tr>
<td ;="" bgcolor="white"><b>a</b></td> <td ;="" bgcolor="white"><b>b</b></td> <td ;="" bgcolor="white"><b>c</b></td> <td ;="" bgcolor="white"><b>d</b></td>
<td ;="" bgcolor="white"><b>e</b></td> <td ;="" bgcolor="white"><b>f</b></td> <td ;="" bgcolor="white"><b>g</b></td> <td ;="" bgcolor="white"><b>h</b></td>
<td ;="" bgcolor="white"><b>i</b></td> <td ;="" bgcolor="white"><b>j</b></td> <td ;="" bgcolor="white"><b>k</b></td> <td ;="" bgcolor="white"><b>l</b></td>
<td ;="" bgcolor="white"><b>m</b></td>
</tr><tr>
<td ;="" bgcolor="white">8.167</td> <td ;="" bgcolor="white">1.49</td> <td ;="" bgcolor="white">2.782</td> <td ;="" bgcolor="white">4.253</td>
<td ;="" bgcolor="white">12.702</td> <td ;="" bgcolor="white">2.228</td> <td ;="" bgcolor="white">2.015</td> <td ;="" bgcolor="white">6.094</td>
<td ;="" bgcolor="white">6.966</td> <td ;="" bgcolor="white">0.153</td> <td ;="" bgcolor="white">0.772</td> <td ;="" bgcolor="white">4.025</td>
<td ;="" bgcolor="white">2.406</td>
</tr>
<tr>
<td ;="" bgcolor="white"><b>n</b></td> <td ;="" bgcolor="white"><b>o</b></td> <td ;="" bgcolor="white"><b>p</b></td>
<td ;="" bgcolor="white"><b>q</b></td> <td ;="" bgcolor="white"><b>r</b></td> <td ;="" bgcolor="white"><b>s</b></td> <td ;="" bgcolor="white"><b>t</b></td>
<td ;="" bgcolor="white"><b>u</b></td> <td ;="" bgcolor="white"><b>v</b></td> <td ;="" bgcolor="white"><b>w</b></td> <td ;="" bgcolor="white"><b>x</b></td>
<td ;="" bgcolor="white"><b>y</b></td> <td ;="" bgcolor="white"><b>z</b></td>
</tr><tr>
<td ;="" bgcolor="white">6.749</td> <td ;="" bgcolor="white">7.507</td> <td ;="" bgcolor="white">1.929</td>
<td ;="" bgcolor="white">0.095</td> <td ;="" bgcolor="white">5.987</td> <td ;="" bgcolor="white">6.327</td> <td ;="" bgcolor="white">9.056</td>
<td ;="" bgcolor="white">2.758</td> <td ;="" bgcolor="white">0.978</td> <td ;="" bgcolor="white">2.360</td> <td ;="" bgcolor="white">0.150</td>
<td ;="" bgcolor="white">1.974</td> <td ;="" bgcolor="white">0.074</td>
</tr></tbody></table> </div>
<p>
                            <textarea name="textarea" cols="70" rows="6" readonly="readonly" id="textarea"></textarea><br/>
                            <input name="btnEn2" value="Next Ciphertext" onclick="Next_Mono_Test()" type="button">
                          </p>
                          <p> <input name="calculateFreq" value="Calculate Frequencies in ciphertext" onclick="CalculateFreq();" type="button">  </p>
                          <p>Ciphertext Frequencies:<br>
                            </p><div id="cipherFreq" style="height: 150px;"></div>
                          <p></p>
<br/><hr/><br/>

                        <p>PART II</p>
                          <p>Note that the <i>cipher text is in lower case</i> and when you replace any character, the final character of replacement, i.e., <i>plaintext is changed to upper case</i> automatically in the following scratchpad.</p>
                          <p>Scratchpad:<br>
                            <textarea id="textarea2" name="textarea" rows="10" cols="70"></textarea>
                          </p>

                          <p>Modify the text above (in scratchpad):</p>
                          <p><font size="1">This is case <i>insensitive</i> function and replaces only cipher text (lower case) by plain text (upper case):</font></p>
                          <p>Replace cipher character &nbsp; <textarea id="char1" rows="1" cols="2" style="display: inline;"></textarea> by plaintext character &nbsp;&nbsp;<textarea id="char2" rows="1" cols="2" style="display: inline;"></textarea> &nbsp;&nbsp; <input name="btnModify" value="Modify" onclick="ModifyUserText()" style="display: inline;" type="button"></p>
                          <p><font size="1">Use the following function to undo any unwanted exchange by giving an
uppercase character and a lower case. This is a case sensitive function:</font></p>
                          <br>&nbsp;&nbsp;&nbsp;<p>Replace character &nbsp; <textarea id="char3" rows="1" cols="2" style="display: inline;"></textarea> by character &nbsp;&nbsp;<textarea id="char4" rows="1" cols="2" style="display: inline;"></textarea> &nbsp;&nbsp; <input name="btnModify" value="Replace these exact characters" onclick="ModifyUserText2()" style="display: inline;" type="button"></p>
                          <p>Your replacement history:
                          </p><div id="replacements" style="height: 350px; width: 350px;"></div>
                          <p></p>

<br/><hr/><br/>
                        <p><b>PART III</b></p>
                          <p>Enter your solution plaintext here:<br>
                            <textarea id="textarea3" name="textarea2" rows="5" cols="70"></textarea>
                          </p>
                        <p>Solution Key =
                          <input id="key2" name="key2" size="26" maxchars="25" type="text">
                        </p><br>
                        <p><input name="Check" value="Check Answer!" onclick="checkAnswer()" type="button"></p><br><br>
                        <textarea id="notification" name="notification" rows="1" cols="50" style="border: 0pt none ;"></textarea>


                        <br/><hr><br/>
                        <p><b>PART IV</b></p>


                        <p>Plaintext<br>
                        <textarea id="p" name="p" rows="2" cols="50">defend the east wall of the castle</textarea>
                          </p><p>key =
                            <input id="key" name="key" size="25" maxchars="25" value="phqgiumeaylnofdxjkrcvstzwb" type="text">
                              <input name="genKey" value="Generate Random Key" onclick="Mono_GenRandKey()" type="button">
                          </p>
                          <p>
                            <input name="btnEn" value="v Encrypt v" onclick="Mono_Encrypt()" type="button">
                            <input name="btnDe" value="^ Decrypt ^" onclick="Mono_Decrypt()" type="button">
                          </p>
                          <p>
                            <input id="punc" name="punc" type="checkbox">
                            Remove Punctuation</p>
                          <p>Ciphertext<br>
                              <textarea id="c" name="c" rows="2" cols="50"></textarea>
                        </p>


</div>
<div class="tab-pane" id="tab5_lB">

   <p><b>STEP 1:</b> For the given ciphertext in the <b>PART I</b> of the experiment
page, the first step is to generate ciphertext by clicking on the "Next CipherText" button.</p>
<p><b>STEP 2:</b>Calculate frequencies of generated ciphertext by clicking on "Calculate Frequencies in Ciphertext" button</p>
<p><b>STEP 3:</b>Copy the generated ciphertext  from <b>PART I</b> and  paste in "Scratchpad" area of <b>PART II</b></p>
<p><b>STEP 4:</b>Analyse similarties between "Calculated Frequencies Table" and "English Alphabet Frequencies Table" </p>
<p><b>STEP 5:</b>Based on similarities,try to make a frequency based estimation for each character of ciphertext</p>
<p><b>STEP 6:</b>Replace characters of CipherText in Scratchpad with a character estimated previously using a <b>Modify</b> function of  <b>PART II</b> </p>
<p><b>STEP 7:</b>Based on Hints from Ciphertext in "Scratchpad" area make more replacement of ciphertext characters</p>
<p><b>STEP 8:</b>Repeat <b>Step 7</b> till you get a meaningful English Text<p>
<b>STEP 9:</b> Finally, observe the deciphered plaintext in Scratchpad Area,if a meaningful English text is formed cut-and-paste it in the text-field named "Solution Plaintext" of <b>PART III</b>. Also enter the final character mapping in the"Solution Key" in <b>PART III</b> and click on "Check Answer" button.</p>
<p><b>STEP 10[OPTIONAL]:</b> Verify that your answer is correct, by encrypting the solution plaintext with your key in <b>PART IV</b>.</p>


</div>
<div class="tab-pane" id="tab6_lB">
 <ul>
                                <li><p>Encrypt the following plain text using the key given:<br>
                                    Plain Text : Lord Rama was a great king.</p>
                                    Key:
                                        <table cellspacing="10">
                                                <tbody><tr>
                                                <td>a</td> <td>b</td> <td>c</td> <td>d</td>
                                                <td>e</td> <td>f</td> <td>g</td> <td>h</td>
                                                <td>i</td> <td>j</td> <td>k</td> <td>l</td>
                                                <td>m</td> <td>n</td> <td>o</td> <td>p</td>
                                                <td>q</td> <td>r</td> <td>s</td> <td>t</td>
                                                <td>u</td> <td>v</td> <td>w</td> <td>x</td>
                                                <td>y</td> <td>z</td>
                                                </tr>
                                                <tr>
                                                <td>Y</td> <td>N</td> <td>L</td> <td>K</td>
                                                <td>X</td> <td>B</td> <td>S</td> <td>H</td>
                                                <td>M</td> <td>I</td> <td>W</td> <td>D</td>
                                                <td>P</td> <td>J</td> <td>R</td> <td>O</td>
                                                <td>Q</td> <td>V</td> <td>F</td> <td>E</td>
                                                <td>A</td> <td>U</td> <td>G</td> <td>T</td>
                                                <td>Z</td> <td>C</td>
                                                </tr>
                                        </tbody></table>
                                </li>
				<br>
				<br>

                                <li><p>What is the key space if we use alphabet = {a,b,c,d,e,f} </p></li>
				<br>
				<br>

                                <li><p>Decrypt the following cipher text with the key given <br>
                                    Cipher Text : libimi wio i rlkif dxmr</p>
                                    Key:
                                        <table cellspacing="10">
                                                <tbody><tr>
                                                <td>a</td> <td>b</td> <td>c</td> <td>d</td>
                                                <td>e</td> <td>f</td> <td>g</td> <td>h</td>
                                                <td>i</td> <td>j</td> <td>k</td> <td>l</td>
                                                <td>m</td> <td>n</td> <td>o</td> <td>p</td>
                                                <td>q</td> <td>r</td> <td>s</td> <td>t</td>
                                                <td>u</td> <td>v</td> <td>w</td> <td>x</td>
                                                <td>y</td> <td>z</td>
                                                </tr>
                                                <tr>
                                                <td>i</td> <td>s</td> <td>y</td> <td>b</td>
                                                <td>k</td> <td>j</td> <td>r</td> <td>u</td>
                                                <td>x</td> <td>e</td> <td>d</td> <td>z</td>
                                                <td>q</td> <td>m</td> <td>c</td> <td>t</td>
                                                <td>p</td> <td>l</td> <td>o</td> <td>f</td>
                                                <td>n</td> <td>b</td> <td>w</td> <td>g</td>
                                                <td>a</td> <td>h</td>
                                                </tr>
                                        </tbody></table>
                                </li>
				<br>
				<br>

                                <li><p>Decipher the following cipher text: <br>
                                </p><pre>LOJUM YLJME PDYVJ QXTDV SVJNL DMTJZ WMJGG YSNDL UYLEO SKDVC</pre>
                                <pre>GEPJS MDIPD NEJSK DNJTJ LSKDL OSVDV DNGYN VSGLL OSCIO LGOYG</pre>
                                <pre>ESNEP CGYSN GUJMJ DGYNK DPPYX PJDGG SVDNT WMSWS GYLYS NGSKJ</pre>
                                <pre>CEPYQ GSGLD MLPYN IUSCP QOYGM JGCPL GDWWJ DMLSL OJCNY NYLYD</pre>
                                <pre>LJQLO DLCNL YPLOJ TPJDM NJQLO JWMSE JGGJG XTUOY EOOJO DQDMM</pre>
                                <pre>YBJQD LLOJV LOJTV YIOLU JPPES NGYQJ MOYVD GDNJE MSVDN EJM</pre>
                                <p></p></li>
                        </ul>

</div>
</div>

