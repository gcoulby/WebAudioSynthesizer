function Oscillator()
{
   this.context = getContext();
   this.instance = context.createOscillator();
   this.gainNode = context.createGain();
   this.freq = 440;
   this.gain = 100;
   this.waveForm = "sine";
   this.octave = 0;
   this.fineTune = 0;

   //Methods
   this.createOscillator = function(freq, gain)
   {
      this.instance = this.context.createOscillator();
      this.instance.connect(this.gainNode);
      this.gainNode.connect(context.destination);
      this.instance.type = this.waveForm;
   };

   this.setFreq = function(freq)
   {
      this.freq = freq;
      this.instance.frequency.value = freq;
   };

   this.setGain = function(gain)
   {
      this.gain = gain;
      this.gainNode.gain.value = gain / 100 / 12;
   };

   this.setWaveForm = function(waveForm)
   {
      this.waveForm = waveForm;
   };

   this.setOctave = function(octave)
   {
      this.octave = octave;
   };

   this.setFineTune = function(fineTune)
   {
      this.fineTune = fineTune;
   };

}
