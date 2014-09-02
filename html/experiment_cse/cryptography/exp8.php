<div class="tab-content"  style="margin-left:0px;">
<div class="tab-pane active" id="tab1_lH">

<p> 
            In this experiment, we simulate certain "toy" versions of the popular Diffie-Hellman secure key exchange protocol
            </p>

</div>
<div class="tab-pane" id="tab2_lH">

<p>For a very brief theory of shift ciphers and their analysis, click <a href="media/DHKE1.pdf">here</a><br></p>
                        <p><a href="media/DHKE1.pdf"><img src="images/image9.png" alt="here"/></a></p>


</div>
<div class="tab-pane" id="tab3_lH">

<p>
            To understand the DH-key exchange protocol
          </p>


</div>
<div class="tab-pane" id="tab4_lH">

 <form name="stuff">
                        <p>Public Information:</p> <br>
                        <p>Prime Number: </p>
                        <p><input id="prime" value="" size="20" readonly="readonly" type="text">
                            <input value="Generate Prime" onclick="nextPrime();" type="button"></p> <br>
                        <p>Generator G:</p> <p><input id="generator" value="" size="20" readonly="readonly" type="text">
                            <input value="Another Generator" onclick="nextGenerator();" type="button"></p> <br>
                     <table style="float: left;">
                            <tbody>
                                <tr><td><center><font color="red">Alice</font></center></td>
                              </tr>
                              <tr>
                                <td valign="top">Key: <input id="keyA" value="" size="20" readonly="readonly" type="text">
                                    <input value="Generate A" onclick="nextKeyA();" type="button"></td>
                              </tr>
                              <tr>
                                <td><input id="encryptA" value="" size="20" readonly="readonly" type="text">
                                    <input value="Calculate Ga" onclick="calculateGA();" type="button"></td>
                              </tr>
                              <tr>
                                    <td><input value="Send Ga to B" onclick="sendA();" type="button"></td>
                              </tr>
                              <tr>
                                <td>Received: <input id="receivedA" value="" size="20" readonly="readonly" type="text"></td>
                              </tr>
                              <tr>
                                    <td><input value="Calculate Gab" onclick="calculateGAB();" type="button">
                                    <input id="encryptAB" value="" size="20" readonly="readonly" type="text"></td>
                              </tr>
                            </tbody>
                       </table>


                       <table style="float: right;">
                            <tbody>
                                <tr><td><center><font color="red">Bob</font></center></td>
                              </tr>
                              <tr>
                                <td valign="top">Key: <input id="keyB" value="" size="20" readonly="readonly" type="text">
                                    <input value="Generate B" onclick="nextKeyB();" type="button"></td>
                              </tr>
                              <tr>
                                <td><input id="encryptB" value="" size="20" readonly="readonly" type="text">
                                    <input value="Calculate Gb" onclick="calculateGB();" type="button"></td>
                              </tr>
                              <tr>
                                    <td><input value="Send Gb to A" onclick="sendB();" type="button"></td>
                              </tr>
                              <tr>
                                <td>Received: <input id="receivedB" value="" size="20" readonly="readonly" type="text"></td>
                              </tr>
                              <tr>
                                    <td><input value="Calculate Gba" onclick="calculateGBA();" type="button">
                                    <input id="encryptBA" value="" size="20" readonly="readonly" type="text"></td>
                              </tr>
                            </tbody>
                        </table>
                        <p style="clear:both;">

                </form>


</div>
<div class="tab-pane" id="tab5_lH">

<p>
                                <b>STEP1:</b> Firslty,choose a large prime number <b>p</b> and a generator <b>g</b> for that prime.<br/><br/>
<br>
                                <b>STEP 2:</b> Secondly,both Alice and Bob generate their respective keys <b>A</b> and <b>B</b>.
<br>
                                     And (<b>ga</b>,<b>gb</b>) for their keys respectively.<br/><br/>
                                <b>STEP 3:</b> Both Alice and bob send exchange their  <b>ga</b>,<b>gb</b>.<br/><br/>
<br>
                                <b>STEP 4:</b> Finally,both calculate their public keys <b>gab</b> and <b>gba</b> repectively.<br/><br/>
<br>
                                <b>STEP 5:</b> If both <b>gab</b> and <b>gba</b> are equal then Deffie-Hellman key exchange is verified.
<br>

        </p>


</div>
<div class="tab-pane" id="tab6_lH">

  <ol>
                <li><p>101 <sup>4,800,000,023</sup> mod 35.</p>
                        <ul class="multichoice">
                          <li><input name="quest_647" type="radio" value="36" />36</li>
                          <li><input name="quest_647" type="radio" value="9" />9</li>
                          <li><input name="quest_647" type="radio" value="26" />26</li>
                          <li><input name="quest_647" type="radio" value="17" />17</li>
                        </ul>
                </li>
<br>
                <li><p>Which among these is a generator of Z<sup>*</sup><sub>13</sub></p>
                        <ul class="multichoice">
                          <li><input name="quest_649" type="radio" value="3" />3</li>
                          <li><input name="quest_649" type="radio" value="4" />4</li>
                          <li><input name="quest_649" type="radio" value="7" />7</li>
                          <li><input name="quest_649" type="radio" value="2" />2</li>
                        </ul>
                </li>
<br>
                <li><p>The set of quadratic residues modulo 211 has cardinality of</p>
                        <ul class="multichoice">
                          <li><input name="quest_650" type="radio" value="210" />210</li>
                          <li><input name="quest_650" type="radio" value="106" />106</li>
                          <li><input name="quest_650" type="radio" value="212" />212</li>
                          <li><input name="quest_650" type="radio" value="105" />105</li>
                        </ul>
                </li>
<br>
                <li><p>N=90 then Ø(n) =? Where Ø(n) is the number of elements co-prime to ‘n’ [Ø(n) is also called Euler Totient function]</p>
                        <ul class="multichoice">
                          <li><input name="quest_639" type="radio" value="8" />8</li>
                          <li><input name="quest_639" type="radio" value="24" />24</li>
                          <li><input name="quest_639" type="radio" value="48" />48</li>
                          <li><input name="quest_639" type="radio" value="14" />14</li>
                        </ul>
                </li>
<br>


                          <li>Run experiment with different prime numbers and check whether you can exhange same public key at both ends</li>
<br>
                          <li>Run with different combinations of Primes numbers and generators</li>
<br>
                          <li>Try to understand Discrete log Problem using experiment</li>
<br>

        </ol>



</div>
</div>

