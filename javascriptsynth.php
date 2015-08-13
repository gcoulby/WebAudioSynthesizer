<?php ?>

<div>
    <link rel="stylesheet" href="css/style.css">
    <div id="synth">
        <div id="oscs">
            <div id="osc1" class="osc">
                <h4>Osc 1</h4>
                <div class="waveForm">
                    <h5>Wave Form</h5>
                    <div class="ledLabel">
                        <input type="radio" id="osc1Led0" data-position="0" name="osc1Led" data-waveform="sine" data-osc="1" onclick="setWaveForm(this)">
                        <label for="osc1Led0"><span></span><img src="img/sine.png" alt="sine wave"></label>
                    </div>

                    <div class="ledLabel">
                        <input type="radio" id="osc1Led1" data-position="1" name="osc1Led" data-waveform="square" data-osc="1" onclick="setWaveForm(this)" checked>
                        <label for="osc1Led1"><span></span><img src="img/square.png" alt="square wave"></label>
                    </div>

                    <div class="ledLabel">
                        <input type="radio" id="osc1Led2" data-position="2" name="osc1Led" data-waveform="sawtooth" data-osc="1" onclick="setWaveForm(this)">
                        <label for="osc1Led2"><span></span><img src="img/sawtooth.png" alt="sawtooth wave"></label>
                    </div>

                    <div class="ledLabel">
                        <input type="radio" id="osc1Led3" data-position="3" name="osc1Led" data-waveform="triangle" data-osc="1" onclick="setWaveForm(this)">
                        <label for="osc1Led3"><span></span><img src="img/triangle.png" alt="triangle wave"></label>
                    </div>
                    <div class="ledLabel">
                        <div class="buttonDrop">
                            <button id="switchOsc1Wave" data-osc="1" onclick="setWaveForm(this)"></button>
                        </div>
                    </div>
                </div>

                <div class="gain">
                    <h5>Gain</h5>
                    <input id="osc1Gain" type="range" min="0" max="100" value="100" data-osc="1">
                </div>

                <div class="octave">
                    <h5>Octave</h5>
                    <div class="ledLabel">
                        <input type="radio" id="osc1OctLed0" data-position="0" name="osc1OctLed" data-osc="1" onclick="setOctave(this)" checked>
                        <label for="osc1OctLed0"><span></span>4'</label>
                    </div>
                    <div class="ledLabel">
                        <input type="radio" id="osc1OctLed1" data-position="1" name="osc1OctLed" data-osc="1" onclick="setOctave(this)" >
                        <label for="osc1OctLed1"><span></span>8'</label>
                    </div>
                    <div class="ledLabel">
                        <input type="radio" id="osc1OctLed2" data-position="2" name="osc1OctLed" data-osc="1" onclick="setOctave(this)" >
                        <label for="osc1OctLed2"><span></span>16'</label>
                    </div>

                    <div class="ledLabel">
                        <div class="buttonDrop">
                            <button id="switchOsc1Octave" data-osc="1" onclick="setOctave(this)"></button>
                        </div>
                    </div>
                </div>

                <div class="fineTune">
                    <h5>Fine Tune</h5>
                    <input id="osc1FineTune" type="range" min="-10" max="10" value="0" data-osc="1" step="1" list="range_snap">
                </div>
            </div>


            <div id="osc2" class="osc">
                <h4>Osc 2</h4>
                <div class="waveForm">
                    <h5>Wave Form</h5>
                    <div class="ledLabel">
                        <input type="radio" id="osc2Led0" data-position="0" name="osc2Led" data-waveform="sine" data-osc="2" onclick="setWaveForm(this)">
                        <label for="osc2Led0"><span></span><img src="img/sine.png" alt="sine wave"></label>
                    </div>

                    <div class="ledLabel">
                        <input type="radio" id="osc2Led1" data-position="1" name="osc2Led" data-waveform="square" data-osc="2" onclick="setWaveForm(this)">
                        <label for="osc2Led1"><span></span><img src="img/square.png" alt="square wave"></label>
                    </div>

                    <div class="ledLabel">
                        <input type="radio" id="osc2Led2" data-position="2" name="osc2Led" data-waveform="sawtooth" data-osc="2" onclick="setWaveForm(this)" checked>
                        <label for="osc2Led2"><span></span><img src="img/sawtooth.png" alt="sawtooth wave"></label>
                    </div>

                    <div class="ledLabel">
                        <input type="radio" id="osc2Led3" data-position="3" name="osc2Led" data-waveform="triangle" data-osc="2" onclick="setWaveForm(this)">
                        <label for="osc2Led3"><span></span><img src="img/triangle.png" alt="triangle wave"></label>
                    </div>
                    <div class="ledLabel">
                        <div class="buttonDrop">
                            <button id="switchOsc2Wave" data-osc="2" onclick="setWaveForm(this)"></button>
                        </div>
                    </div>
                </div>

                <div class="gain">
                    <h5>Gain</h5>
                    <input id="osc2Gain" type="range" min="0" max="100" value="100" data-osc="2">
                </div>

                <div class="octave">
                    <h5>Octave</h5>
                    <div class="ledLabel">
                        <input type="radio" id="osc2OctLed0" data-position="0" name="osc2OctLed" data-osc="2" onclick="setOctave(this)">
                        <label for="osc2OctLed0"><span></span>4'</label>
                    </div>
                    <div class="ledLabel">
                        <input type="radio" id="osc2OctLed1" data-position="1" name="osc2OctLed" data-osc="2" onclick="setOctave(this)">
                        <label for="osc2OctLed1"><span></span>8'</label>
                    </div>
                    <div class="ledLabel">
                        <input type="radio" id="osc2OctLed2" data-position="2" name="osc2OctLed" data-osc="2" onclick="setOctave(this)" checked>
                        <label for="osc2OctLed2"><span></span>16'</label>
                    </div>

                    <div class="ledLabel">
                        <div class="buttonDrop">
                            <button id="switchOsc2Octave" data-osc="2" onclick="setOctave(this)"></button>
                        </div>
                    </div>
                </div>

                <div class="fineTune">
                    <h5>Fine Tune</h5>
                    <input id="osc2FineTune" type="range" min="-10" max="10" value="0" data-osc="2" step="1" list="range_snap">
                </div>


            </div>

            <datalist id="range_snap">
                <option value="0">
            </datalist>
        </div>

        <br>

        <div id="pianoKeys"></div>
    </div>

    <script src="js/AddKeys.js"></script>
    <script src="js/Context.js"></script>
    <script src="js/Oscillator.js"></script>
    <script src="js/Tones.js"></script>
</div>
