<div class="tab-content" style="margin-left:0px;">
<div class="tab-pane active" id="tab1_lC">

 <p> 
                Here we see a perfectly secure cryptosystem which was developed by
                Gilbert Vernam in 1918. Vernam sees a trade off between security and 
                convenience, and the trade-off has to do with the length of the key 
                tape as its security depends on the fact that the key is used only
                once.
            </p>    

            <br>

            <h3>About the experiment:</h3>
            <p> 
                The main idea is to realize that any perfectly secure encryption scheme
                (and not just the One-Time Pad) requires the keyspace to be at least as
                large as the message space, and is therefore <span style="font-style: italic;">impractical</span>
           </p>



</div>
<div class="tab-pane" id="tab2_lC">

 <p>
        Vernam proposed a bit-wise exclusive or of the message stream with a
        truely random zero-one stream which was shared by sender and receipient.
        </p>
        <pre>
        Example:<br><br>   SENDING<br>   -------<br>   message: 0 0 1 0 1 1 0 1 0 1 1 1 ...<br>   pad:     1 0 0 1 1 1 0 0 1 0 1 1 ...<br>   XOR      ---------------------------<br>   cipher:  1 0 1 1 0 0 0 1 1 1 0 0 ...<br><br>   RECEIVING<br>   ---------<br>   cipher:  1 0 1 1 0 0 0 1 1 1 0 0 ...<br>   pad:     1 0 0 1 1 1 0 0 1 0 1 1 ...<br>   XOR      ---------------------------<br>   message: 0 0 1 0 1 1 0 1 0 1 1 1 ...<br>
        </pre><br><br>
        <p>
        This cipher is unbreakable in a very strong sense. The intuition is
        that any message can be transformed into any cipher (of the same
        length) by a pad, and all transformations are equally likely. Given a
        two letter message, there is a pad which adds to the message to give
        OK, and another pad which adds to the message to give NO. Since either
        of these pads are equally likely, the message is equally likely to be
        OK or NO.
        </p>
        <p>
        For more details on the topic, click <a href="media/lec1.pdf">here</a><br>
        </p>


</div>
<div class="tab-pane" id="tab3_lC">

<p>
                To understand that perfectly secure encrytion is possible (for instance we
                may use the Vernam cipher)&nbsp; but&nbsp; is&nbsp; terribly&nbsp;
                impractical<br>
          </p>


</div>
<div class="tab-pane" id="tab4_lC">

    <h2>Testing Perfect Secrecy using Shannon's Theorem<br>
</h2>
                        <p>
                        Is the following encryption scheme perfectly secure?
                        You can observe as many encrypted text and key pairs as you wish.
                        Press "Next Plaintext" method to get more pairs.</p>
                <pre> Plaintext:
 <textarea name="plainarea" cols="50" rows="1" readonly="readonly" id="plainarea">11101010</textarea>
<input name="changePlainText" value="Next Plaintext" onclick="next_plain_text()" type="button"></pre>

            <pre> Key:
<textarea name="keyarea_gen" cols="50" rows="1" readonly="readonly" id="keyarea_gen">01010100</textarea>
<input name="changeKey" value="Next Keytext" onclick="next_key()" type="button"></pre>
                        <p>
                            <input name="btnEn" value="v Encrypt v" onclick="Encrypt_p()" type="button">
                        </p>
<pre>Ciphertext: <textarea name="cipherarea" cols="50" rows="1" readonly="readonly" id="cipherarea">01010100</textarea><br>
                    <input name="Next_Encryption" value="Next Encryption Scheme" onclick="Next_Encryption()" type="button">
</pre>

                          <p>For all the possible pairs of plaintext of
size 8, and the key given by you, we will provide you with the
encrypted texts with the same encryption scheme. You can observe the
input and try to break it. <br>Put your key here (between size 6 and 12): </p> <form name="user_key"><p><input id="user_key" name="limitedtextfield" cols="12" value="01010100" maxlength="12" type="text"></p></form><br>
                          <p> <input name="generatePairs" value="Encrytion Set" onclick="generate_all_pairs()" type="button"></p><br>

                         <p>   <br>Multiple tuples of &lt;Plaintext, Ciphertext&gt;:<br></p>
                          <p>  <textarea id="textarea2" name="textarea" rows="8" cols="50"></textarea></p>

                          <br>

                        <h2>Is the given encryption scheme secure?</h2>
                        <hr>
<p>Yes/No   </p><form name="yesno"><p><input id="yesno" value="" maxlength="3" type="text"></p></form>
<p>If NO, Give two plaintexts 'm1' and 'm2' for the above key such that Encryption(m1) = Encryption(m2)? </p>
<form name="m"><p>m1: <input id="m1" value="" maxlength="20" type="text"> </p>
<p>m2: <input id="m2" value="" maxlength="20" type="text"></p></form>
<p><input name="checkAnswer" value="Check Answer!!" onclick="checkAnswer()" type="button"> </p><br><br>
<textarea id="notification" name="notification" rows="1" cols="50" style="border: 0pt none ;"></textarea>
<p></p>

                        <h2>Simulator</h2>
                        <hr><br>
                        <p>plaintext<br><textarea id="p" name="p" rows="1" cols="25">10010011000110</textarea>
                          </p><p>key =
                            <input id="key" name="key" size="25" maxchars="25" value="1010110 0110001" type="text">
                              <input name="genKey" value="Generate Random Key" onclick="Vernam_RandKey()" type="button">
                          </p>
                          <p>
                            <input name="btnEn" value="v Encrypt v" onclick="Vernam_Encrypt()" type="button">
                            <input name="btnDe" value="^ Decrypt ^" onclick="Vernam_Decrypt()" type="button">
                          </p>
                          <p>Ciphertext<br>
                              <textarea id="c" name="c" rows="2" cols="50"></textarea>
                        </p>


</div>
<div class="tab-pane" id="tab5_lC">

 <p>
STEP 1: Select a plain text and a key by clicking on the Next buttons
next to the respective fields.<br><br>
                                STEP 2: If the generated key is biased, make it unbiased in 0 and 1, and use it. You can use the idea given in theory part.<br><br>
STEP 3: On clicking on "Encrypt" button, you will get the ciphertext
for the same encryption scheme. You can get the cipher text for as many
plaintext and key pairs as you like for the same encryption scheme. You
can change the encryption scheme too if you want.<br><br>
STEP 4: You can take a look at all the possible 2^(length of plaintext
+ length of key) tuples of plaintext, key and ciphertext in the next
block.<br><br>
STEP 5: By observing the tuples obtained above, you need to tell if the
encryption scheme being used is secure or not. If not, you need to find
the message, m and ciphertext, c such that P(M=m|C=c) = P(M=m). In the
experiment the size of the message space and that of the key space are
equal. Thus from Shannon's theorem, to show that a scheme is not
perfect, it is enough if you locate two distinct plaintexts that are
encrypted to obtain the same ciphertext for the same key&nbsp; </p>


</div>
<div class="tab-pane" id="tab6_lC">

           <ul>
  <li>&nbsp;Prove that if only a single character is encrypted, then the shift cipher is perfectly secret.</li>
  <li>What is the largest plaintext space M you can find for which the
mono-alphabetic substitution cipher provides perfect secrecy? (Note: M
need not contain only valid English words.)<br>
  </li>
  <li>Show how to use the Vigenere cipher to encrypt any word of length
t so that perfect secrecy is obtained (Note: you can choose the length
of the key).</li>
</ul>


</div>
</div>

