<?php



namespace {

	/**
	 * Generate OpenAL buffer
	 * @return resource <p>Returns an Open AL(Buffer) resource on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openal-buffer-create.php
	 * @see openal_buffer_loadwav(), openal_buffer_data()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_buffer_create() {}

	/**
	 * Load a buffer with data
	 * @param resource $buffer <p>An Open AL(Buffer) resource (previously created by <code>openal_buffer_create()</code>).</p>
	 * @param int $format <p>Format of <code>data</code>, one of: <b><code>AL_FORMAT_MONO8</code></b>, <b><code>AL_FORMAT_MONO16</code></b>, <b><code>AL_FORMAT_STEREO8</code></b> and <b><code>AL_FORMAT_STEREO16</code></b></p>
	 * @param string $data <p>Block of binary audio data in the <code>format</code> and <code>freq</code> specified.</p>
	 * @param int $freq <p>Frequency of <code>data</code> given in Hz.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openal-buffer-data.php
	 * @see openal_buffer_loadwav(), openal_stream()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_buffer_data($buffer, int $format, string $data, int $freq): bool {}

	/**
	 * Destroys an OpenAL buffer
	 * @param resource $buffer <p>An Open AL(Buffer) resource (previously created by <code>openal_buffer_create()</code>).</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openal-buffer-destroy.php
	 * @see openal_buffer_create()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_buffer_destroy($buffer): bool {}

	/**
	 * Retrieve an OpenAL buffer property
	 * @param resource $buffer <p>An Open AL(Buffer) resource (previously created by <code>openal_buffer_create()</code>).</p>
	 * @param int $property <p>Specific property, one of: <b><code>AL_FREQUENCY</code></b>, <b><code>AL_BITS</code></b>, <b><code>AL_CHANNELS</code></b> and <b><code>AL_SIZE</code></b>.</p>
	 * @return int|false <p>Returns an integer value appropriate to the <code>property</code> requested or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openal-buffer-get.php
	 * @see openal_buffer_create()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_buffer_get($buffer, int $property) {}

	/**
	 * Load a .wav file into a buffer
	 * @param resource $buffer <p>An Open AL(Buffer) resource (previously created by <code>openal_buffer_create()</code>).</p>
	 * @param string $wavfile <p>Path to .wav file on <i>local</i> file system.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openal-buffer-loadwav.php
	 * @see openal_buffer_data(), openal_stream()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_buffer_loadwav($buffer, string $wavfile): bool {}

	/**
	 * Create an audio processing context
	 * @param resource $device <p>An Open AL(Device) resource (previously created by <code>openal_device_open()</code>).</p>
	 * @return resource <p>Returns an Open AL(Context) resource on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openal-context-create.php
	 * @see openal_device_open(), openal_context_destroy()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_context_create($device) {}

	/**
	 * Make the specified context current
	 * @param resource $context <p>An Open AL(Context) resource (previously created by <code>openal_context_create()</code>).</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openal-context-current.php
	 * @see openal_context_create()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_context_current($context): bool {}

	/**
	 * Destroys a context
	 * @param resource $context <p>An Open AL(Context) resource (previously created by <code>openal_context_create()</code>).</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openal-context-destroy.php
	 * @see openal_context_create()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_context_destroy($context): bool {}

	/**
	 * Process the specified context
	 * @param resource $context <p>An Open AL(Context) resource (previously created by <code>openal_context_create()</code>).</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openal-context-process.php
	 * @see openal_context_create(), openal_context_current(), openal_context_suspend()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_context_process($context): bool {}

	/**
	 * Suspend the specified context
	 * @param resource $context <p>An Open AL(Context) resource (previously created by <code>openal_context_create()</code>).</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openal-context-suspend.php
	 * @see openal_context_create(), openal_context_current(), openal_context_process()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_context_suspend($context): bool {}

	/**
	 * Close an OpenAL device
	 * @param resource $device <p>An Open AL(Device) resource (previously created by <code>openal_device_open()</code>) to be closed.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openal-device-close.php
	 * @see openal_device_open()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_device_close($device): bool {}

	/**
	 * Initialize the OpenAL audio layer
	 * @param string $device_desc <p>Open an audio device optionally specified by <code>device_desc</code>. If <code>device_desc</code> is not specified the first available audio device will be used.</p>
	 * @return resource <p>Returns an Open AL(Device) resource on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openal-device-open.php
	 * @see openal_device_close(), openal_context_create()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_device_open(string $device_desc = NULL) {}

	/**
	 * Retrieve a listener property
	 * @param int $property <p>Property to retrieve, one of: <b><code>AL_GAIN</code></b> (float), <b><code>AL_POSITION</code></b> (array(float,float,float)), <b><code>AL_VELOCITY</code></b> (array(float,float,float)) and <b><code>AL_ORIENTATION</code></b> (array(float,float,float)).</p>
	 * @return mixed <p>Returns a float or array of floats (as appropriate) or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openal-listener-get.php
	 * @see openal_listener_set()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_listener_get(int $property) {}

	/**
	 * Set a listener property
	 * @param int $property <p>Property to set, one of: <b><code>AL_GAIN</code></b> (float), <b><code>AL_POSITION</code></b> (array(float,float,float)), <b><code>AL_VELOCITY</code></b> (array(float,float,float)) and <b><code>AL_ORIENTATION</code></b> (array(float,float,float)).</p>
	 * @param mixed $setting <p>Value to set, either float, or an array of floats as appropriate.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openal-listener-set.php
	 * @see openal_listener_get()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_listener_set(int $property, $setting): bool {}

	/**
	 * Generate a source resource
	 * @return resource <p>Returns an Open AL(Source) resource on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openal-source-create.php
	 * @see openal_source_set(), openal_source_play(), openal_source_destroy()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_source_create() {}

	/**
	 * Destroy a source resource
	 * @param resource $source <p>An Open AL(Source) resource (previously created by <code>openal_source_create()</code>).</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openal-source-destroy.php
	 * @see openal_source_create()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_source_destroy($source): bool {}

	/**
	 * Retrieve an OpenAL source property
	 * @param resource $source <p>An Open AL(Source) resource (previously created by <code>openal_source_create()</code>).</p>
	 * @param int $property <p>Property to get, one of: <b><code>AL_SOURCE_RELATIVE</code></b> (int), <b><code>AL_SOURCE_STATE</code></b> (int), <b><code>AL_PITCH</code></b> (float), <b><code>AL_GAIN</code></b> (float), <b><code>AL_MIN_GAIN</code></b> (float), <b><code>AL_MAX_GAIN</code></b> (float), <b><code>AL_MAX_DISTANCE</code></b> (float), <b><code>AL_ROLLOFF_FACTOR</code></b> (float), <b><code>AL_CONE_OUTER_GAIN</code></b> (float), <b><code>AL_CONE_INNER_ANGLE</code></b> (float), <b><code>AL_CONE_OUTER_ANGLE</code></b> (float), <b><code>AL_REFERENCE_DISTANCE</code></b> (float), <b><code>AL_POSITION</code></b> (array(float,float,float)), <b><code>AL_VELOCITY</code></b> (array(float,float,float)), <b><code>AL_DIRECTION</code></b> (array(float,float,float)).</p>
	 * @return mixed <p>Returns the type associated with the property being retrieved or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openal-source-get.php
	 * @see openal_source_create(), openal_source_set(), openal_source_play()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_source_get($source, int $property) {}

	/**
	 * Pause the source
	 * @param resource $source <p>An Open AL(Source) resource (previously created by <code>openal_source_create()</code>).</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openal-source-pause.php
	 * @see openal_source_stop(), openal_source_play(), openal_source_rewind()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_source_pause($source): bool {}

	/**
	 * Start playing the source
	 * @param resource $source <p>An Open AL(Source) resource (previously created by <code>openal_source_create()</code>).</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openal-source-play.php
	 * @see openal_source_stop(), openal_source_pause(), openal_source_rewind()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_source_play($source): bool {}

	/**
	 * Rewind the source
	 * @param resource $source <p>An Open AL(Source) resource (previously created by <code>openal_source_create()</code>).</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openal-source-rewind.php
	 * @see openal_source_stop(), openal_source_pause(), openal_source_play()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_source_rewind($source): bool {}

	/**
	 * Set source property
	 * @param resource $source <p>An Open AL(Source) resource (previously created by <code>openal_source_create()</code>).</p>
	 * @param int $property <p>Property to set, one of: <b><code>AL_BUFFER</code></b> (OpenAL(Source)), <b><code>AL_LOOPING</code></b> (bool), <b><code>AL_SOURCE_RELATIVE</code></b> (int), <b><code>AL_SOURCE_STATE</code></b> (int), <b><code>AL_PITCH</code></b> (float), <b><code>AL_GAIN</code></b> (float), <b><code>AL_MIN_GAIN</code></b> (float), <b><code>AL_MAX_GAIN</code></b> (float), <b><code>AL_MAX_DISTANCE</code></b> (float), <b><code>AL_ROLLOFF_FACTOR</code></b> (float), <b><code>AL_CONE_OUTER_GAIN</code></b> (float), <b><code>AL_CONE_INNER_ANGLE</code></b> (float), <b><code>AL_CONE_OUTER_ANGLE</code></b> (float), <b><code>AL_REFERENCE_DISTANCE</code></b> (float), <b><code>AL_POSITION</code></b> (array(float,float,float)), <b><code>AL_VELOCITY</code></b> (array(float,float,float)), <b><code>AL_DIRECTION</code></b> (array(float,float,float)).</p>
	 * @param mixed $setting <p>Value to assign to specified <code>property</code>. Refer to the description of <code>property</code> for a description of the value(s) expected.</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openal-source-set.php
	 * @see openal_source_create(), openal_source_get(), openal_source_play()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_source_set($source, int $property, $setting): bool {}

	/**
	 * Stop playing the source
	 * @param resource $source <p>An Open AL(Source) resource (previously created by <code>openal_source_create()</code>).</p>
	 * @return bool <p>Returns <b><code>TRUE</code></b> on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openal-source-stop.php
	 * @see openal_source_play(), openal_source_pause(), openal_source_rewind()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_source_stop($source): bool {}

	/**
	 * Begin streaming on a source
	 * @param resource $source <p>An Open AL(Source) resource (previously created by <code>openal_source_create()</code>).</p>
	 * @param int $format <p>Format of <code>data</code>, one of: <b><code>AL_FORMAT_MONO8</code></b>, <b><code>AL_FORMAT_MONO16</code></b>, <b><code>AL_FORMAT_STEREO8</code></b> and <b><code>AL_FORMAT_STEREO16</code></b></p>
	 * @param int $rate <p>Frequency of data to stream given in Hz.</p>
	 * @return resource|false <p>Returns a stream resource on success or <b><code>FALSE</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.openal-stream.php
	 * @see openal_source_create(), fwrite()
	 * @since PECL openal >= 0.1.0
	 */
	function openal_stream($source, int $format, int $rate) {}

	/**
	 * Buffer Setting
	 */
	define('AL_BITS', null);

	/**
	 * Source/Listener Setting (Integer)
	 */
	define('AL_BUFFER', null);

	/**
	 * Buffer Setting
	 */
	define('AL_CHANNELS', null);

	/**
	 * Source/Listener Setting (Float)
	 */
	define('AL_CONE_INNER_ANGLE', null);

	/**
	 * Source/Listener Setting (Float)
	 */
	define('AL_CONE_OUTER_ANGLE', null);

	/**
	 * Source/Listener Setting (Float)
	 */
	define('AL_CONE_OUTER_GAIN', null);

	/**
	 * Source/Listener Setting (Float Vector)
	 */
	define('AL_DIRECTION', null);

	/**
	 * Boolean value recognized by OpenAL
	 */
	define('AL_FALSE', null);

	/**
	 * PCM Format
	 */
	define('AL_FORMAT_MONO16', null);

	/**
	 * PCM Format
	 */
	define('AL_FORMAT_MONO8', null);

	/**
	 * PCM Format
	 */
	define('AL_FORMAT_STEREO16', null);

	/**
	 * PCM Format
	 */
	define('AL_FORMAT_STEREO8', null);

	/**
	 * Buffer Setting
	 */
	define('AL_FREQUENCY', null);

	/**
	 * Source/Listener Setting (Float)
	 */
	define('AL_GAIN', null);

	/**
	 * Source State
	 */
	define('AL_INITIAL', null);

	/**
	 * Source State
	 */
	define('AL_LOOPING', null);

	/**
	 * Source/Listener Setting (Float)
	 */
	define('AL_MAX_DISTANCE', null);

	/**
	 * Source/Listener Setting (Float)
	 */
	define('AL_MAX_GAIN', null);

	/**
	 * Source/Listener Setting (Float)
	 */
	define('AL_MIN_GAIN', null);

	/**
	 * Source/Listener Setting (Float Vector)
	 */
	define('AL_ORIENTATION', null);

	/**
	 * Source State
	 */
	define('AL_PAUSED', null);

	/**
	 * Source/Listener Setting (Float)
	 */
	define('AL_PITCH', null);

	/**
	 * Source State
	 */
	define('AL_PLAYING', null);

	/**
	 * Source/Listener Setting (Float Vector)
	 */
	define('AL_POSITION', null);

	/**
	 * Source/Listener Setting (Float)
	 */
	define('AL_REFERENCE_DISTANCE', null);

	/**
	 * Source/Listener Setting (Float)
	 */
	define('AL_ROLLOFF_FACTOR', null);

	/**
	 * Buffer Setting
	 */
	define('AL_SIZE', null);

	/**
	 * Source/Listener Setting (Integer)
	 */
	define('AL_SOURCE_RELATIVE', null);

	/**
	 * Source/Listener Setting (Integer)
	 */
	define('AL_SOURCE_STATE', null);

	/**
	 * Source State
	 */
	define('AL_STOPPED', null);

	/**
	 * Boolean value recognized by OpenAL
	 */
	define('AL_TRUE', null);

	/**
	 * Source/Listener Setting (Float Vector)
	 */
	define('AL_VELOCITY', null);

	/**
	 * Context Attribute
	 */
	define('ALC_FREQUENCY', null);

	/**
	 * Context Attribute
	 */
	define('ALC_REFRESH', null);

	/**
	 * Context Attribute
	 */
	define('ALC_SYNC', null);

}
