<div class="tab-content"  style="margin-left:0px;">
<div class="tab-pane active" id="tab1_lG">

 <p> 
                   In this experiment, you are asked to encrypt long messages using various modes of operation wherein a block cipher (in this case, AES) is provided to you
            </p>


</div>
<div class="tab-pane" id="tab2_lG">

<p>For a very brief theory of "Advanced Encryption Standard" and their analysis, click <a href="media/16_AES.pdf">here</a></p>
          <p>For a very brief theory of "Modes of Encryption"  and their analysis, click <a href="media/Modes of operation.pdf">here</a></p>
                        <p><img  id="ecbm_image" src="images/ecbm.png" alt="here"/></p><center><b>Electronic Code Book(ECB) mode</b></center>
                        <p><img id="cdbm_image" src="images/cdbm.png" alt="here"/></p><center><b>Cipher Block Chaining(CBC) mode</b> </center>
                        <p><img id="ctr_image" src="images/ctr.png" alt="here"/></p><center><b>Contur mode</b></center>
                        <p><img id="ofbm_imgae" src="images/ofbm.png" alt="here"/></p><center><b>Output FeedBack mode</b></center>


</div>
<div class="tab-pane" id="tab3_lG">

 <p>
             To understand the need, strenghts and weaknesses of various modes of operation of block ciphers
          </p>


</div>
<div class="tab-pane" id="tab4_lG">

<h2>AES (Rijndael) Encryption</h2>
                        <h3>PART I</h3>
                        <form name="aestest">
                        <p>Choose your mode of operation:
                        <select id="select_mode" name="select_mode" size="1" onchange="selectMode();">
                            <option value="ecb" selected="selected">Electronic Code Book (ECB)</option>
                            <option value="cbc">Cipher Block Chaining</option>
                            <option value="ofb">Output Feedback</option>
                            <option value="ctr">Counter mode</option>
                        </select></p>

                        <hr>
                        <h3>PART II</h3>
                        <p><pre>Key size in bits: <select name="keySize" id="keySize"><option value="128" selected="selected">128</option><option value="192">192</option><option value="256">256</option></select></p>
 </p>Plaintext: <textarea name="plainarea" cols="50" rows="6" readonly="readonly" id="plainarea"></textarea>   <input name="changePlainText" value="Next Plaintext" onclick="nextPlainText()" type="button"></p>
       Key: <textarea name="keyarea" cols="50" rows="1" readonly="readonly" id="keyarea"></textarea>   <input name="changeKey" value="Next Keytext" onclick="nextKey()" type="button"> <div id="ivtext">
        IV: <textarea name="iv" cols="50" rows="1" readonly="readonly" id="iv"></textarea>   <input name="changeIV" value="Next IV" onclick="nextIV()" type="button"> </div> <div id="ctrtext">
       CTR: <textarea name="ctr" cols="50" rows="1" readonly="readonly" id="ctr"></textarea>   <input name="changeCTR" value="Next CTR" onclick="nextCTR()" type="button"> </div> </pre>
<div id="calculateXor">
<hr><h3>PART III</h3>
<p>Calculate XOR:<pre><textarea name="num1" cols="50" rows="1" id="num1"></textarea>
     <textarea name="num2" cols="50" rows="1" id="num2"></textarea> <input name="calculateXOR" value="Calculate XOR" onclick="displayXOR()" type="button">
<p>XOR: <textarea name="xor" cols="50" rows="1" readonly="readonly" id="xor"></textarea></p></p></pre> </div>


<hr><h3>PART IV</h3>
                        <table><tbody>
                        <tr>
                        <td>Key in hex: </td>
                        <td><input size="66" name="key" type="text"></td></tr>
                        <tr><td>Plaintext in hex: </td>
                        <td><input size="66" name="plaintext" type="text"></td>
                        </tr>

                        <tr>
                        <td>Ciphertext in hex: </td>
                        <td><input size="66" name="ciphertext" type="text"></td>
                        </tr>

                        <tr>
                        <td>&nbsp;</td>
                        <td>
                        <input value="Encrypt" onclick="doEncryption()" type="button"> &nbsp; &nbsp;
                        <input value="Decrypt" onclick="doDecryption()" type="button"> &nbsp; &nbsp;
                        <input value="Clear" type="reset"></td>
                        </tr>
                        </tbody></table>
                        </form>
                        <hr><h3>PART V</h3>
                          <p>Enter your answer here:</p>
                         <p><input id="userans" size="65" type="text"> <input value="Check Answer!" onclick="checkAnswer();" type="button"></p>
                          <div id="notification" style="width: 300px; height: 10px; padding-top: 20px;"></div>


</div>
<div class="tab-pane" id="tab5_lG">

  <ul>
                        <li><b>Step I :</b> Choose a mode of operation from <i>PART I</i> </li>
<br>
                        <li><b>Step II :</b> Select KeySize, Plaintext, KeyText, Intialization vector(IV)(for ECB and OFB modes only)
                             and CTR(forctr mode only) in <i>PART II</i></li>
<br>
                        <li><b>Step III :</b> Whenever necessay use XOR opeartion in <i>PART III</i> in accordance with choosen mode of operation</li>
<br>
                        <li><b>Step IV : </b> Use fuction <b>F<sub>K</sub></b> and "Key in hex:" field in <i>PART IV</i> should be filled keytext generated in <b>Step2</b></li>
<br>

                        <li><b>Step V : </b> Fill "Plaintext in hex:" field with approriate value in accordance with choosen mode of operation and click on encrypt button</li>
<br>
                        <li><b>Step VI :</b> Enter your answer in <i>PART V</i> to check your ciphertext</li>
<br>


</div>
<div class="tab-pane" id="tab6_lG">

<ol>

                <li><p>ECB stands for</p>
                <ul class="multichoice">
                  <li><input name="quest_581" type="radio" value="Electronic cipher Block" />Electronic cipher Block</li>
                  <li><input name="quest_581" type="radio" value="Electronic code Block" />Electronic code Block</li>
                  <li><input name="quest_581" type="radio" value="Electronic code Book" />Electronic code Book</li>
                  <li><input name="quest_581" type="radio" value="Electronic cipher Book" />Electronic cipher Book</li>
                </ul></li>
<br>
<br>

                <li><p>Which among the following is not CPA secure?</p>
                <ul class="multichoice">
                  <li><input name="quest_593" type="radio" value="ECB" />ECB</li>
                  <li><input name="quest_593" type="radio" value="CBC" />CBC</li>
                  <li><input name="quest_593" type="radio" value="CFB" />CFB</li>
                  <li><input name="quest_593" type="radio" value="None" />None</li>
                </ul></li>
<br>
<br>

                <li><p>Which of the following are block ciphers?</p>
                <ul class="multichoice">
                  <li><input name="quest_589" type="radio" value="ECB" />ECB</li>
                  <li><input name="quest_589" type="radio" value="CBC" />CBC</li>
                  <li><input name="quest_589" type="radio" value="CFB" />CFB</li>
                  <li><input name="quest_589" type="radio" value="All" />All</li>
                </ul></li>
<br>
<br>


                <li>Which is the fastest mode of operation among four mode of operation?</li>
<br>
                <li>Which mode of operation is more secure?</li>
<br>
                <li>What is importance of Intialiczation Vector(IV) and CTR ?</li>
<br>
                <li>Why ECB is not CPA-secure and Why CBC is CPA-secure?</li>
<br>
                <li>Suppose IV is not random.Then is CBC and OFB mode both secure</li>
<br>

        </ol>



</div>
</div>

