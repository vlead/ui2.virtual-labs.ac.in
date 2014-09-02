<div class="tab-content"  style="margin-left:0px;">
<div class="tab-pane active" id="tab1_lD">

<p> 
                A Cipher Block Chaining Message Authentication Code (CBC-MAC), is a
                technique for constructing a message authentication code from a block
                cipher. 
             </p>
                    <br>
                    <h3>About the experiment:</h3>
             <p>In the experiment we provide a "dummy" block cipher (that is just a
                function and has none of the properties of a real block cipher)&nbsp;
                and&nbsp; ask you to use it to compute the CBC_MAC tag of an arbitrary
                message<br>

             </p>


</div>
<div class="tab-pane" id="tab2_lD">

<p>For a very brief introduction to message authentication codes and secure CBC-MAC, click <a href="media/Message%20Authentication%20Codes.pdf">here</a><br>
                        <a href="media/Message Authentication Codes.pdf"><img src="images/image5.png" alt="here"/></a><br><br>
        </p>


</div>
<div class="tab-pane" id="tab3_lD">

<p>
            To learn how to compute the tag of secure CBC-MAC for an arbitrary message
        assuming that we are provided with a pseudorandom function
          </p>

</div>
<div class="tab-pane" id="tab4_lD">

<pre>   Plaintext: <textarea name="plaintext" cols="50" rows="4" readonly="readonly" id="plaintext">1100000000111100101010</textarea>   <input name="changePlainText" value="Next Plaintext" onclick="next_plain_text()" type="button"> <br>
      Key, k: <textarea name="key" cols="50" rows="1" readonly="readonly" id="key">11100100</textarea>   <input name="changeKey" value="Next Key" onclick="next_key()" type="button"><br>
length of Initialization Vector (IV), l, <textarea name="l" cols="4" rows="1" id="l">4</textarea> where l &lt; (the length of plaintext above)/2 <br>
          IV: <textarea name="iv" cols="50" rows="1" readonly="readonly" id="iv">1100</textarea>   <input name="changeIV" value="Next IV" onclick="next_IV()" type="button"><br><br><br>
Put your text of size l to get the corresponding value of F<sub>k</sub>(text) of size l.<br>
   Your text: <textarea name="usertext" cols="50" rows="1" id="usertext">11001010</textarea>   <input name="applyFunction" value="Apply Function" onclick="apply_function()" type="button">        <input name="nextFunction" value="Choose another Function" onclick="next_function()" type="button">
Function output: <textarea name="functionvalue" cols="50" rows="1" readonly="readonly" id="functionvalue"></textarea><br><br>
Final Output: <textarea name="output" cols="50" rows="1" id="outputarea"></textarea> <input name="checkAnswer" value="Check Answer!" onclick="CheckAnswer()" type="button">
<br><br></pre>
<p style="font-weight: bold; text-decoration: underline; font-style: italic; text-align: center;">SECOND PART OF THE EXPERIMENT</p>

<br>
<pre></pre>


<p>Select the option you would use to make CBC-MAC secure </p><br>
<p>
<select id="secureOptions" onchange="select();">
  <option value="key" selected="selected">Compute and use your key</option>
  <option value="length">Prepend the message with its length</option>
  <option value="keys">Two keys</option>
</select>
</p>
<pre>      Plaintext: <textarea name="plaintext" cols="50" rows="4" readonly="readonly" id="plaintext">1100000000111100101010</textarea>   <input name="changePlainText" value="Next Plaintext" onclick="next_plain_text()" type="button"> <br>
   <div id="user_message" style="color: red;">
 Your Plaintext: <textarea name="plaintext" cols="50" rows="4" id="plaintext"></textarea> <br>
    </div>
            Key: <textarea name="key" cols="50" rows="1" readonly="readonly" id="key">11100100</textarea>   <input name="changeKey" value="Another Key" onclick="next_key()" type="button"><br>
        <div id="userKey" style="color: red;">
 Calculated Key: <textarea name="key" cols="50" rows="1" id="key"></textarea> <br> </div>
        <div id="key_generated2" style="color: red;">
     Second Key: <textarea name="key2" cols="50" rows="1" readonly="readonly" id="key2">11100100</textarea>   <input value="Another Key" onclick="next_key2()" type="button"><br> </div>

length of Initialization Vector (IV), l, <textarea name="l" cols="4" rows="1" id="l">4</textarea> where l &lt; (the length of plaintext above)/2 <br>
             IV: <textarea name="iv" cols="50" rows="1" readonly="readonly" id="iv">1100</textarea>   <input name="changeIV" value="Next IV" onclick="next_IV()" type="button"><br><br><br>
Put your text of size l to get the corresponding value of F<sub>k</sub>(text) of size l.<br>
      Your text: <textarea name="usertext" cols="50" rows="1" id="usertext">11001010</textarea>   <input name="applyFunction" value="Apply Function" onclick="apply_function()" type="button">
                                <input name="nextFunction" value="Next Function" onclick="next_function()" type="button">
Function output: <textarea name="functionvalue" cols="50" rows="1" readonly="readonly" id="functionvalue"></textarea><br><br>
   Final Output: <textarea name="output" cols="50" rows="1" id="outputarea"></textarea>


                </pre>


</div>
<div class="tab-pane" id="tab5_lD">

 <p>
                                STEP 1: Select a plaintext to be encrypted.<br><br>
                                STEP 2: Select 'l' such that l &lt; (length of plaintext)/2.<br><br>
                                STEP 3: Select an Initialization Vector, IV of length l.<br><br>
STEP 4: Get the value of F(x) by providing a string of length l in the
field titled 'Your text' and clicking on 'Apply Function'. Repeat this
for as many times as you need to get the encrypted text for the
plaintext selected in Step 1. You can change the function if you wish
to.<br><br>
                                STEP 5: Write the final cipher text in 'Final Output' field.</p>
<p>STEP 6: Once you have learnt to work with the basic CBC-MAC, you can
make it secure either by prepending the message length or by using
multiple keys (as described in the theory section).&nbsp; You may
accordingly work with the second part of the experiment (this is very
similar to the first part and hence your answer in not checked)<br>

                        </p>


</div>
<div class="tab-pane" id="tab6_lD">

           <p>1. If a MAC tag is K-bits long, how much work is needed to find a collision to that specific value.</p>
<ul class="multichoice">
  <li><input name="quest_592" type="radio" value="$$ 2^{k/2} $$" />$$ 2^{k/2} $$</li>
  <li><input name="quest_592" type="radio" value="$$ K^2$$" />$$ K^2$$</li>
  <li><input name="quest_592" type="radio" value="K!" />K!</li>
  <li><input name="quest_592" type="radio" value="$$ K^K$$" />$$ K^K$$</li>
</ul>

        <p>2. The out put length of SHA – I is _____________ bits</p>
<ul class="multichoice">
  <li><input name="quest_583" type="radio" value="128" />128</li>
  <li><input name="quest_583" type="radio" value="160" />160</li>
  <li><input name="quest_583" type="radio" value="64" />64</li>
  <li><input name="quest_583" type="radio" value="256" />256</li>
</ul>

        <p>3. Best way to achieve both privacy and message integrity</p>
<ul class="multichoice">
  <li><input name="quest_584" type="radio" value="Encrypt and Authenticate" />Encrypt and Authenticate</li>
  <li><input name="quest_584" type="radio" value="Authenticate then Encrypt" />Authenticate then Encrypt</li>
  <li><input name="quest_584" type="radio" value="Encrypt then Authenticate" />Encrypt then Authenticate</li>
  <li><input name="quest_584" type="radio" value="All " />All </li>
</ul>


</div>
</div>

