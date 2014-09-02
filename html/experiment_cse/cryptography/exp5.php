<div class="tab-content"  style="margin-left:0px;">
<div class="tab-pane active" id="tab1_lE">

<p>SHA-1 is a popular heuristic hash function that is currently in vogue.&nbsp;</p>

<br>
<br>
<h3> About The Experiment </h3>
<p> In  
                        this experiment, we shall familiarize ourselves with SHA-1 as well as
                        look at one important applaication of hashing, namely, the HMAC
                        algorithm which is currently used in the Internet to achieve data
                        integrity
                    </p>


</div>
<div class="tab-pane" id="tab2_lE">

<p>
                For a very brief overview of the Merkle-Damgard transform and the
                design of HMAC from fixed length collision resistant hash function,
                click <a href="media/Collision%20Resistant%20Hash%20Functions.pdf">here</a><br><br>
                <a href="media/Collision Resistant Hash Functions.pdf"><img src="images/image6.png" alt="here"/></a><br>
                In our experiments, instead of using a full-fledged collsion resistant
                hash function h, we have replaced it with a "dummy" function h. You are
                asked to assume collision resistance about the given function h and use
                it to design HMAC<br>
          </p>


</div>
<div class="tab-pane" id="tab3_lE">

<p>
           To understand the need,design and applications of collision resistant hash functions.
          </p>


</div>
<div class="tab-pane" id="tab4_lE">

          <h1 style="text-align: center; text-decoration: underline;">A simulator for SHA-1</h1>

 <p>Plaintext (string): </p><p><input name="user_input" value="test" id="input" size="40" type="text"> </p>
<p><input onclick="document.getElementById('hash_value').value = hex_sha1(document.getElementById('input').value)" value="SHA-1" type="button"></p><br>

<p>Hash output(hex):</p><p> <input id="hash_value" value="" size="40" readonly="true" type="text"></p><br>
<br>
<br>
<h1 style="text-align: center; font-weight: bold; text-decoration: underline;">HMAC Construction using a "Dummy" Hash Function<br>
</h1>
<br>


                        <h2>HMAC construction</h2>

<pre>   Plaintext: <textarea name="plaintext" cols="50" rows="4" id="plaintext">1100000000111100101010</textarea>   <input name="changePlainText" value="Next Plaintext" onclick="next_plain_text()" type="button"> <br>
length of Initialization Vector (IV), l, <textarea name="l" cols="4" rows="1" id="l">8</textarea> <br>
          IV: <textarea name="iv" cols="50" rows="1" id="iv">11001100</textarea>   <input name="changeIV" value="Next IV" onclick="next_IV()" type="button"><br><br><br>
      Key, k: <textarea name="key" cols="50" rows="1" id="key">10000101</textarea>   <input name="changeKey" value="Next Key" onclick="next_Key()" type="button"><br><br><br>
ipad: 0x5C (01011100)
opad: 0x36 (00110110) <br>
Put your text of size 2l to get the corresponding value of hash of size l.<br>
   Your text: <textarea name="usertext" cols="50" rows="1" id="usertext">11001010</textarea>   <input name="getHash" value="get hash" onclick="get_hash()" type="button">
Hashed value: <textarea name="hashvalue" cols="50" rows="1" readonly="readonly" id="hashvalue">0011</textarea><br><br>
Final Output: <textarea name="output" cols="50" rows="1" id="cipherarea"></textarea>  <input name="checkAnswer" value="Check Answer!" onclick="checkAnswer()" type="button">
<div id="notification" style="width: 300px; height: 10px; padding-top: 20px;"></div>
</pre>


</div>
<div class="tab-pane" id="tab5_lE">

<ol>
                <li>Familiarize yourself with the working of SHA-1. Though we would be
using a dummy hash in the sequel for simplicity, in general, you could
be using SHA-1 instead</li>
<br>
         <li>Select a plaintext for which the HMAC tag is to be computed.(by clicking on NextPalintext Button)</li>
<br>
         <li>For simplicity fix l=8 which is default,but it should be l &lt; (length of plaintext)/4.</li>
<br>
         <li>Select an Initialization Vector, IV of length l.by clicking on "Next IV" button)</li>
<br>
         <li>Use the ipad and opad as described in theory part to compute the ciphertext with the help of the hash function provided to you.</li>
<br>
         <li>Divide generated plaintext 'm' into say 'k' chunks of 8 bits and kth chunk will have bits less than 8,to make it 8-bits by padding zeros at end</li>
<br>
         <li>Compute z0="IV||(k XOR ipad)" manually where || impies concatenation and enter z0 in "Your text" field to get z1</li>
<br>
         <li>Compute z1="z0||m1" manually where || impies concatenation and enter z1 in "Your text" field to get z2</li>
<br>
         <li>Repeat above step and finally compute z(k+1)="zk||L" where L=|m|,make L 8-bits by padding zeros to left of it</li>
<br>
         <li>Compute p="IV||(k XOR opad)" manually where || impies concatenation and enter p in "Your text" field to get q</li>
<br>
         <li>Compute r="q||z(k+1)" manually where || impies concatenation and enter 'r' in "Your text" field to get final HMAC tag 't'</li>
<br>
         <li>Notice that z0,z1,z2,.............zk,z(k+1),p,r are all of size '2l'(=16 in our case as l=8).</li>                                          <li>Write the final cipher text 't' in 'Final Output' field and check your answer</li>
<br>

        </ol>


</div>
<div class="tab-pane" id="tab6_lE">

 <ol>            <li><p>Which criterion ensures that we can’t find two messages that hash to the same digest?</p>
                <ol class="d" >
                  <li><input name="quest_590" type="radio" value="One-wayness" />One-wayness</li>
                  <li><input name="quest_590" type="radio" value="Weak-collision-resistance" />Weak-collision-resistance</li>
                  <li><input name="quest_590" type="radio" value="Strong-collision-resistance " />Strong-collision-resistance </li>
                  <li><input name="quest_590" type="radio" value="None" />None</li>
                </ol></li>
<br>
<br>


                        <li><p>Which criterion Ensures that it must be extremely difficult or impossible to create the message if the message digest is given.</p>
                <ol class="d">
                  <li><input name="quest_591" type="radio" value="One-wayness" />One-wayness</li>
                  <li><input name="quest_591" type="radio" value="Weak-collision-resistance" />Weak-collision-resistance</li>
                  <li><input name="quest_591" type="radio" value="Strong-collision resistance" />Strong-collision resistance</li>
                  <li><input name="quest_591" type="radio" value="None" />None</li>
                </ol></li>
<br>
<br>

                                <li><p>Consider the function h: {0,1}<sup>8</sup> -&gt; {0,1}<sup>4</sup>. Suppose h(x) = x <sup>xmod 5</sup> mod 16, x in [0, 255]. The collision in h occurs for.</p>
                <ol class="d">
                  <li><input name="quest_594" type="radio" value="(1, 17)" />(1, 17)</li>
                  <li><input name="quest_594" type="radio" value="(2, 16)" />(2, 16)</li>
                  <li><input name="quest_594" type="radio" value="(1, 16)" />(1, 16)</li>
                  <li><input name="quest_594" type="radio" value="(2, 17)" />(2, 17)</li>
                </ol></li>
<br>
<br>

                                <li><p>The Merkle-Damgard Transform is mainly useful for</p>
                <ol class="d">
                  <li><input name="quest_582" type="radio" value="Converting any fixed-length collision resistant hash function to an arbitrary length collision resistant hash function " />Converting any fixed-length collision resistant hash function to an arbitrary length collision resistant hash function </li>
                  <li><input name="quest_582" type="radio" value="Converting arbitrary length hash function to a fixed length hash function " />Converting arbitrary length hash function to a fixed length hash function </li>
                  <li><input name="quest_582" type="radio" value="Constructing hash function from random function " />Constructing hash function from random function </li>
                  <li><input name="quest_582" type="radio" value="None" />None</li>
                </ol></li>

<br>
<br>

                                <li>Understand HMAC scheme and find a break it using availble source code</li>
<br>
                                <li>Understand Merkel-Damgard transform and Explain,how we are using it for HMAC? </li>
<br>
                                <li>Understand and explain analogy between SHA1 and our dummy HMAC function</li>
<br>
                                <li>Explain why HMAC is secure and on what assumptions this security is based?</li>
<br>

                </ol>



</div>
</div>

