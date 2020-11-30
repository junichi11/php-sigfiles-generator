<?php



namespace {

	/**
	 * Vector Trigonometric ACos
	 * <p>Calculates the arc cosine for each value in <code>real</code> and returns the resulting array.</p>
	 * @param array $real <p>Array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-acos.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_acos(array $real): array {}

	/**
	 * Chaikin A/D Line
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @param array $volume <p>Volume traded, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-ad.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_ad(array $high, array $low, array $close, array $volume): array {}

	/**
	 * Vector Arithmetic Add
	 * <p>Calculates the vector addition of <code>real0</code> to <code>real1</code> and returns the resulting vector.</p>
	 * @param array $real0 <p>Array of real values.</p>
	 * @param array $real1 <p>Array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-add.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_add(array $real0, array $real1): array {}

	/**
	 * Chaikin A/D Oscillator
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @param array $volume <p>Volume traded, array of real values.</p>
	 * @param int $fastPeriod <p>Number of period for the fast MA. Valid range from 2 to 100000.</p>
	 * @param int $slowPeriod <p>Number of period for the slow MA. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-adosc.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_adosc(array $high, array $low, array $close, array $volume, int $fastPeriod = NULL, int $slowPeriod = NULL): array {}

	/**
	 * Average Directional Movement Index
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-adx.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_adx(array $high, array $low, array $close, int $timePeriod = NULL): array {}

	/**
	 * Average Directional Movement Index Rating
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-adxr.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_adxr(array $high, array $low, array $close, int $timePeriod = NULL): array {}

	/**
	 * Absolute Price Oscillator
	 * @param array $real <p>Array of real values.</p>
	 * @param int $fastPeriod <p>Number of period for the fast MA. Valid range from 2 to 100000.</p>
	 * @param int $slowPeriod <p>Number of period for the slow MA. Valid range from 2 to 100000.</p>
	 * @param int $mAType <p>Type of Moving Average. TRADER_MA_TYPE_&#42; series of constants should be used.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-apo.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_apo(array $real, int $fastPeriod = NULL, int $slowPeriod = NULL, int $mAType = NULL): array {}

	/**
	 * Aroon
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-aroon.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_aroon(array $high, array $low, int $timePeriod = NULL): array {}

	/**
	 * Aroon Oscillator
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-aroonosc.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_aroonosc(array $high, array $low, int $timePeriod = NULL): array {}

	/**
	 * Vector Trigonometric ASin
	 * <p>Calculates the arc sine for each value in <code>real</code> and returns the resulting array.</p>
	 * @param array $real <p>Array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-asin.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_asin(array $real): array {}

	/**
	 * Vector Trigonometric ATan
	 * <p>Calculates the arc tangent for each value in <code>real</code> and returns the resulting array.</p>
	 * @param array $real <p>Array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-atan.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_atan(array $real): array {}

	/**
	 * Average True Range
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-atr.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_atr(array $high, array $low, array $close, int $timePeriod = NULL): array {}

	/**
	 * Average Price
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-avgprice.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_avgprice(array $open, array $high, array $low, array $close): array {}

	/**
	 * Bollinger Bands
	 * @param array $real <p>Array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @param float $nbDevUp <p>Deviation multiplier for upper band. Valid range from TRADER_REAL_MIN to TRADER_REAL_MAX.</p>
	 * @param float $nbDevDn <p>Deviation multiplier for lower band. Valid range from TRADER_REAL_MIN to TRADER_REAL_MAX.</p>
	 * @param int $mAType <p>Type of Moving Average. TRADER_MA_TYPE_&#42; series of constants should be used.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-bbands.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_bbands(array $real, int $timePeriod = NULL, float $nbDevUp = NULL, float $nbDevDn = NULL, int $mAType = NULL): array {}

	/**
	 * Beta
	 * @param array $real0 <p>Array of real values.</p>
	 * @param array $real1 <p>Array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-beta.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_beta(array $real0, array $real1, int $timePeriod = NULL): array {}

	/**
	 * Balance Of Power
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-bop.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_bop(array $open, array $high, array $low, array $close): array {}

	/**
	 * Commodity Channel Index
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cci.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cci(array $high, array $low, array $close, int $timePeriod = NULL): array {}

	/**
	 * Two Crows
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdl2crows.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdl2crows(array $open, array $high, array $low, array $close): array {}

	/**
	 * Three Black Crows
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdl3blackcrows.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdl3blackcrows(array $open, array $high, array $low, array $close): array {}

	/**
	 * Three Inside Up/Down
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdl3inside.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdl3inside(array $open, array $high, array $low, array $close): array {}

	/**
	 * Three-Line Strike
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdl3linestrike.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdl3linestrike(array $open, array $high, array $low, array $close): array {}

	/**
	 * Three Outside Up/Down
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdl3outside.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdl3outside(array $open, array $high, array $low, array $close): array {}

	/**
	 * Three Stars In The South
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdl3starsinsouth.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdl3starsinsouth(array $open, array $high, array $low, array $close): array {}

	/**
	 * Three Advancing White Soldiers
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdl3whitesoldiers.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdl3whitesoldiers(array $open, array $high, array $low, array $close): array {}

	/**
	 * Abandoned Baby
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @param float $penetration <p>Percentage of penetration of a candle within another candle.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdlabandonedbaby.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdlabandonedbaby(array $open, array $high, array $low, array $close, float $penetration = NULL): array {}

	/**
	 * Advance Block
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdladvanceblock.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdladvanceblock(array $open, array $high, array $low, array $close): array {}

	/**
	 * Belt-hold
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdlbelthold.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdlbelthold(array $open, array $high, array $low, array $close): array {}

	/**
	 * Breakaway
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdlbreakaway.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdlbreakaway(array $open, array $high, array $low, array $close): array {}

	/**
	 * Closing Marubozu
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdlclosingmarubozu.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdlclosingmarubozu(array $open, array $high, array $low, array $close): array {}

	/**
	 * Concealing Baby Swallow
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdlconcealbabyswall.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdlconcealbabyswall(array $open, array $high, array $low, array $close): array {}

	/**
	 * Counterattack
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdlcounterattack.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdlcounterattack(array $open, array $high, array $low, array $close): array {}

	/**
	 * Dark Cloud Cover
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @param float $penetration <p>Percentage of penetration of a candle within another candle.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdldarkcloudcover.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdldarkcloudcover(array $open, array $high, array $low, array $close, float $penetration = NULL): array {}

	/**
	 * Doji
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdldoji.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdldoji(array $open, array $high, array $low, array $close): array {}

	/**
	 * Doji Star
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdldojistar.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdldojistar(array $open, array $high, array $low, array $close): array {}

	/**
	 * Dragonfly Doji
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdldragonflydoji.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdldragonflydoji(array $open, array $high, array $low, array $close): array {}

	/**
	 * Engulfing Pattern
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdlengulfing.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdlengulfing(array $open, array $high, array $low, array $close): array {}

	/**
	 * Evening Doji Star
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @param float $penetration <p>Percentage of penetration of a candle within another candle.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdleveningdojistar.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdleveningdojistar(array $open, array $high, array $low, array $close, float $penetration = NULL): array {}

	/**
	 * Evening Star
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @param float $penetration <p>Percentage of penetration of a candle within another candle.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdleveningstar.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdleveningstar(array $open, array $high, array $low, array $close, float $penetration = NULL): array {}

	/**
	 * Up/Down-gap side-by-side white lines
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdlgapsidesidewhite.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdlgapsidesidewhite(array $open, array $high, array $low, array $close): array {}

	/**
	 * Gravestone Doji
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdlgravestonedoji.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdlgravestonedoji(array $open, array $high, array $low, array $close): array {}

	/**
	 * Hammer
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdlhammer.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdlhammer(array $open, array $high, array $low, array $close): array {}

	/**
	 * Hanging Man
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdlhangingman.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdlhangingman(array $open, array $high, array $low, array $close): array {}

	/**
	 * Harami Pattern
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdlharami.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdlharami(array $open, array $high, array $low, array $close): array {}

	/**
	 * Harami Cross Pattern
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdlharamicross.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdlharamicross(array $open, array $high, array $low, array $close): array {}

	/**
	 * High-Wave Candle
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdlhighwave.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdlhighwave(array $open, array $high, array $low, array $close): array {}

	/**
	 * Hikkake Pattern
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdlhikkake.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdlhikkake(array $open, array $high, array $low, array $close): array {}

	/**
	 * Modified Hikkake Pattern
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdlhikkakemod.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdlhikkakemod(array $open, array $high, array $low, array $close): array {}

	/**
	 * Homing Pigeon
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdlhomingpigeon.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdlhomingpigeon(array $open, array $high, array $low, array $close): array {}

	/**
	 * Identical Three Crows
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdlidentical3crows.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdlidentical3crows(array $open, array $high, array $low, array $close): array {}

	/**
	 * In-Neck Pattern
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdlinneck.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdlinneck(array $open, array $high, array $low, array $close): array {}

	/**
	 * Inverted Hammer
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdlinvertedhammer.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdlinvertedhammer(array $open, array $high, array $low, array $close): array {}

	/**
	 * Kicking
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdlkicking.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdlkicking(array $open, array $high, array $low, array $close): array {}

	/**
	 * Kicking - bull/bear determined by the longer marubozu
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdlkickingbylength.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdlkickingbylength(array $open, array $high, array $low, array $close): array {}

	/**
	 * Ladder Bottom
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdlladderbottom.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdlladderbottom(array $open, array $high, array $low, array $close): array {}

	/**
	 * Long Legged Doji
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdllongleggeddoji.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdllongleggeddoji(array $open, array $high, array $low, array $close): array {}

	/**
	 * Long Line Candle
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdllongline.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdllongline(array $open, array $high, array $low, array $close): array {}

	/**
	 * Marubozu
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdlmarubozu.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdlmarubozu(array $open, array $high, array $low, array $close): array {}

	/**
	 * Matching Low
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdlmatchinglow.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdlmatchinglow(array $open, array $high, array $low, array $close): array {}

	/**
	 * Mat Hold
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @param float $penetration <p>Percentage of penetration of a candle within another candle.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdlmathold.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdlmathold(array $open, array $high, array $low, array $close, float $penetration = NULL): array {}

	/**
	 * Morning Doji Star
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @param float $penetration <p>Percentage of penetration of a candle within another candle.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdlmorningdojistar.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdlmorningdojistar(array $open, array $high, array $low, array $close, float $penetration = NULL): array {}

	/**
	 * Morning Star
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @param float $penetration <p>Percentage of penetration of a candle within another candle.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdlmorningstar.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdlmorningstar(array $open, array $high, array $low, array $close, float $penetration = NULL): array {}

	/**
	 * On-Neck Pattern
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdlonneck.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdlonneck(array $open, array $high, array $low, array $close): array {}

	/**
	 * Piercing Pattern
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdlpiercing.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdlpiercing(array $open, array $high, array $low, array $close): array {}

	/**
	 * Rickshaw Man
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdlrickshawman.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdlrickshawman(array $open, array $high, array $low, array $close): array {}

	/**
	 * Rising/Falling Three Methods
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdlrisefall3methods.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdlrisefall3methods(array $open, array $high, array $low, array $close): array {}

	/**
	 * Separating Lines
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdlseparatinglines.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdlseparatinglines(array $open, array $high, array $low, array $close): array {}

	/**
	 * Shooting Star
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdlshootingstar.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdlshootingstar(array $open, array $high, array $low, array $close): array {}

	/**
	 * Short Line Candle
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdlshortline.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdlshortline(array $open, array $high, array $low, array $close): array {}

	/**
	 * Spinning Top
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdlspinningtop.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdlspinningtop(array $open, array $high, array $low, array $close): array {}

	/**
	 * Stalled Pattern
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdlstalledpattern.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdlstalledpattern(array $open, array $high, array $low, array $close): array {}

	/**
	 * Stick Sandwich
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdlsticksandwich.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdlsticksandwich(array $open, array $high, array $low, array $close): array {}

	/**
	 * Takuri (Dragonfly Doji with very long lower shadow)
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdltakuri.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdltakuri(array $open, array $high, array $low, array $close): array {}

	/**
	 * Tasuki Gap
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdltasukigap.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdltasukigap(array $open, array $high, array $low, array $close): array {}

	/**
	 * Thrusting Pattern
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdlthrusting.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdlthrusting(array $open, array $high, array $low, array $close): array {}

	/**
	 * Tristar Pattern
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdltristar.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdltristar(array $open, array $high, array $low, array $close): array {}

	/**
	 * Unique 3 River
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdlunique3river.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdlunique3river(array $open, array $high, array $low, array $close): array {}

	/**
	 * Upside Gap Two Crows
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdlupsidegap2crows.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdlupsidegap2crows(array $open, array $high, array $low, array $close): array {}

	/**
	 * Upside/Downside Gap Three Methods
	 * @param array $open <p>Opening price, array of real values.</p>
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cdlxsidegap3methods.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cdlxsidegap3methods(array $open, array $high, array $low, array $close): array {}

	/**
	 * Vector Ceil
	 * <p>Calculates the next highest integer for each value in <code>real</code> and returns the resulting array.</p>
	 * @param array $real <p>Array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-ceil.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_ceil(array $real): array {}

	/**
	 * Chande Momentum Oscillator
	 * @param array $real <p>Array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cmo.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cmo(array $real, int $timePeriod = NULL): array {}

	/**
	 * Pearson's Correlation Coefficient (r)
	 * @param array $real0 <p>Array of real values.</p>
	 * @param array $real1 <p>Array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-correl.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_correl(array $real0, array $real1, int $timePeriod = NULL): array {}

	/**
	 * Vector Trigonometric Cos
	 * <p>Calculates the cosine for each value in <code>real</code> and returns the resulting array.</p>
	 * @param array $real <p>Array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cos.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cos(array $real): array {}

	/**
	 * Vector Trigonometric Cosh
	 * <p>Calculates the hyperbolic cosine for each value in <code>real</code> and returns the resulting array.</p>
	 * @param array $real <p>Array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-cosh.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_cosh(array $real): array {}

	/**
	 * Double Exponential Moving Average
	 * @param array $real <p>Array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-dema.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_dema(array $real, int $timePeriod = NULL): array {}

	/**
	 * Vector Arithmetic Div
	 * <p>Divides each value from <code>real0</code> by the corresponding value from <code>real1</code> and returns the resulting array.</p>
	 * @param array $real0 <p>Array of real values.</p>
	 * @param array $real1 <p>Array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-div.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_div(array $real0, array $real1): array {}

	/**
	 * Directional Movement Index
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-dx.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_dx(array $high, array $low, array $close, int $timePeriod = NULL): array {}

	/**
	 * Exponential Moving Average
	 * @param array $real <p>Array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-ema.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_ema(array $real, int $timePeriod = NULL): array {}

	/**
	 * Get error code
	 * <p>Get error code of the last operation.</p>
	 * @return int <p>Returns the error code identified by one of the TRADER_ERR_&#42; constants.</p>
	 * @link http://php.net/manual/en/function.trader-errno.php
	 * @since PECL trader >= 0.3.0
	 */
	function trader_errno(): int {}

	/**
	 * Vector Arithmetic Exp
	 * <p>Calculates <b><code>e</code></b> raised to the power of each value in <code>real</code>. Returns an array with the calculated data.</p>
	 * @param array $real <p>Array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-exp.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_exp(array $real): array {}

	/**
	 * Vector Floor
	 * <p>Calculates the next lowest integer for each value in <code>real</code> and returns the resulting array.</p>
	 * @param array $real <p>Array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-floor.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_floor(array $real): array {}

	/**
	 * Get compatibility mode
	 * <p>Get compatibility mode which affects the way calculations are done by all the extension functions.</p>
	 * @return int <p>Returns the compatibility mode id which can be identified by TRADER_COMPATIBILITY_&#42; series of constants.</p>
	 * @link http://php.net/manual/en/function.trader-get-compat.php
	 * @since PECL trader >= 0.2.2
	 */
	function trader_get_compat(): int {}

	/**
	 * Get unstable period
	 * <p>Get unstable period factor for a particular function.</p>
	 * @param int $functionId <p>Function ID the factor to be read for. TRADER_FUNC_UNST_&#42; series of constants should be used.</p>
	 * @return int <p>Returns the unstable period factor for the corresponding function.</p>
	 * @link http://php.net/manual/en/function.trader-get-unstable-period.php
	 * @since PECL trader >= 0.2.2
	 */
	function trader_get_unstable_period(int $functionId): int {}

	/**
	 * Hilbert Transform - Dominant Cycle Period
	 * @param array $real <p>Array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-ht-dcperiod.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_ht_dcperiod(array $real): array {}

	/**
	 * Hilbert Transform - Dominant Cycle Phase
	 * @param array $real <p>Array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-ht-dcphase.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_ht_dcphase(array $real): array {}

	/**
	 * Hilbert Transform - Phasor Components
	 * @param array $real <p>Array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-ht-phasor.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_ht_phasor(array $real): array {}

	/**
	 * Hilbert Transform - SineWave
	 * @param array $real <p>Array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-ht-sine.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_ht_sine(array $real): array {}

	/**
	 * Hilbert Transform - Instantaneous Trendline
	 * @param array $real <p>Array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-ht-trendline.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_ht_trendline(array $real): array {}

	/**
	 * Hilbert Transform - Trend vs Cycle Mode
	 * @param array $real <p>Array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-ht-trendmode.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_ht_trendmode(array $real): array {}

	/**
	 * Kaufman Adaptive Moving Average
	 * @param array $real <p>Array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-kama.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_kama(array $real, int $timePeriod = NULL): array {}

	/**
	 * Linear Regression
	 * @param array $real <p>Array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-linearreg.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_linearreg(array $real, int $timePeriod = NULL): array {}

	/**
	 * Linear Regression Angle
	 * @param array $real <p>Array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-linearreg-angle.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_linearreg_angle(array $real, int $timePeriod = NULL): array {}

	/**
	 * Linear Regression Intercept
	 * @param array $real <p>Array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-linearreg-intercept.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_linearreg_intercept(array $real, int $timePeriod = NULL): array {}

	/**
	 * Linear Regression Slope
	 * @param array $real <p>Array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-linearreg-slope.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_linearreg_slope(array $real, int $timePeriod = NULL): array {}

	/**
	 * Vector Log Natural
	 * <p>Calculates the natural logarithm for each value in <code>real</code> and returns the resulting array.</p>
	 * @param array $real <p>Array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-ln.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_ln(array $real): array {}

	/**
	 * Vector Log10
	 * <p>Calculates the base-10 logarithm for each value in <code>real</code> and returns the resulting array.</p>
	 * @param array $real <p>Array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-log10.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_log10(array $real): array {}

	/**
	 * Moving average
	 * @param array $real <p>Array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @param int $mAType <p>Type of Moving Average. TRADER_MA_TYPE_&#42; series of constants should be used.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-ma.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_ma(array $real, int $timePeriod = NULL, int $mAType = NULL): array {}

	/**
	 * Moving Average Convergence/Divergence
	 * @param array $real <p>Array of real values.</p>
	 * @param int $fastPeriod <p>Number of period for the fast MA. Valid range from 2 to 100000.</p>
	 * @param int $slowPeriod <p>Number of period for the slow MA. Valid range from 2 to 100000.</p>
	 * @param int $signalPeriod <p>Smoothing for the signal line (nb of period). Valid range from 1 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-macd.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_macd(array $real, int $fastPeriod = NULL, int $slowPeriod = NULL, int $signalPeriod = NULL): array {}

	/**
	 * MACD with controllable MA type
	 * @param array $real <p>Array of real values.</p>
	 * @param int $fastPeriod <p>Number of period for the fast MA. Valid range from 2 to 100000.</p>
	 * @param int $fastMAType <p>Type of Moving Average for fast MA. TRADER_MA_TYPE_&#42; series of constants should be used.</p>
	 * @param int $slowPeriod <p>Number of period for the slow MA. Valid range from 2 to 100000.</p>
	 * @param int $slowMAType <p>Type of Moving Average for slow MA. TRADER_MA_TYPE_&#42; series of constants should be used.</p>
	 * @param int $signalPeriod <p>Smoothing for the signal line (nb of period). Valid range from 1 to 100000.</p>
	 * @param int $signalMAType <p>Type of Moving Average for signal line. TRADER_MA_TYPE_&#42; series of constants should be used.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-macdext.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_macdext(array $real, int $fastPeriod = NULL, int $fastMAType = NULL, int $slowPeriod = NULL, int $slowMAType = NULL, int $signalPeriod = NULL, int $signalMAType = NULL): array {}

	/**
	 * Moving Average Convergence/Divergence Fix 12/26
	 * @param array $real <p>Array of real values.</p>
	 * @param int $signalPeriod <p>Smoothing for the signal line (nb of period). Valid range from 1 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-macdfix.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_macdfix(array $real, int $signalPeriod = NULL): array {}

	/**
	 * MESA Adaptive Moving Average
	 * @param array $real <p>Array of real values.</p>
	 * @param float $fastLimit <p>Upper limit use in the adaptive algorithm. Valid range from 0.01 to 0.99.</p>
	 * @param float $slowLimit <p>Lower limit use in the adaptive algorithm. Valid range from 0.01 to 0.99.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-mama.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_mama(array $real, float $fastLimit = NULL, float $slowLimit = NULL): array {}

	/**
	 * Moving average with variable period
	 * @param array $real <p>Array of real values.</p>
	 * @param array $periods <p>Array of real values.</p>
	 * @param int $minPeriod <p>Value less than minimum will be changed to Minimum period. Valid range from 2 to 100000</p>
	 * @param int $maxPeriod <p>Value higher than minimum will be changed to Maximum period. Valid range from 2 to 100000</p>
	 * @param int $mAType <p>Type of Moving Average. TRADER_MA_TYPE_&#42; series of constants should be used.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-mavp.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_mavp(array $real, array $periods, int $minPeriod = NULL, int $maxPeriod = NULL, int $mAType = NULL): array {}

	/**
	 * Highest value over a specified period
	 * @param array $real <p>Array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-max.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_max(array $real, int $timePeriod = NULL): array {}

	/**
	 * Index of highest value over a specified period
	 * @param array $real <p>Array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-maxindex.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_maxindex(array $real, int $timePeriod = NULL): array {}

	/**
	 * Median Price
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-medprice.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_medprice(array $high, array $low): array {}

	/**
	 * Money Flow Index
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @param array $volume <p>Volume traded, array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-mfi.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_mfi(array $high, array $low, array $close, array $volume, int $timePeriod = NULL): array {}

	/**
	 * MidPoint over period
	 * @param array $real <p>Array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-midpoint.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_midpoint(array $real, int $timePeriod = NULL): array {}

	/**
	 * Midpoint Price over period
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-midprice.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_midprice(array $high, array $low, int $timePeriod = NULL): array {}

	/**
	 * Lowest value over a specified period
	 * @param array $real <p>Array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-min.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_min(array $real, int $timePeriod = NULL): array {}

	/**
	 * Index of lowest value over a specified period
	 * @param array $real <p>Array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-minindex.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_minindex(array $real, int $timePeriod = NULL): array {}

	/**
	 * Lowest and highest values over a specified period
	 * @param array $real <p>Array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-minmax.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_minmax(array $real, int $timePeriod = NULL): array {}

	/**
	 * Indexes of lowest and highest values over a specified period
	 * @param array $real <p>Array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-minmaxindex.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_minmaxindex(array $real, int $timePeriod = NULL): array {}

	/**
	 * Minus Directional Indicator
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-minus-di.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_minus_di(array $high, array $low, array $close, int $timePeriod = NULL): array {}

	/**
	 * Minus Directional Movement
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-minus-dm.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_minus_dm(array $high, array $low, int $timePeriod = NULL): array {}

	/**
	 * Momentum
	 * @param array $real <p>Array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-mom.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_mom(array $real, int $timePeriod = NULL): array {}

	/**
	 * Vector Arithmetic Mult
	 * <p>Calculates the vector dot product of <code>real0</code> with <code>real1</code> and returns the resulting vector.</p>
	 * @param array $real0 <p>Array of real values.</p>
	 * @param array $real1 <p>Array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-mult.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_mult(array $real0, array $real1): array {}

	/**
	 * Normalized Average True Range
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-natr.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_natr(array $high, array $low, array $close, int $timePeriod = NULL): array {}

	/**
	 * On Balance Volume
	 * @param array $real <p>Array of real values.</p>
	 * @param array $volume <p>Volume traded, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-obv.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_obv(array $real, array $volume): array {}

	/**
	 * Plus Directional Indicator
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-plus-di.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_plus_di(array $high, array $low, array $close, int $timePeriod = NULL): array {}

	/**
	 * Plus Directional Movement
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-plus-dm.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_plus_dm(array $high, array $low, int $timePeriod = NULL): array {}

	/**
	 * Percentage Price Oscillator
	 * @param array $real <p>Array of real values.</p>
	 * @param int $fastPeriod <p>Number of period for the fast MA. Valid range from 2 to 100000.</p>
	 * @param int $slowPeriod <p>Number of period for the slow MA. Valid range from 2 to 100000.</p>
	 * @param int $mAType <p>Type of Moving Average. TRADER_MA_TYPE_&#42; series of constants should be used.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-ppo.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_ppo(array $real, int $fastPeriod = NULL, int $slowPeriod = NULL, int $mAType = NULL): array {}

	/**
	 * Rate of change : ((price/prevPrice)-1)&#42;100
	 * @param array $real <p>Array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-roc.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_roc(array $real, int $timePeriod = NULL): array {}

	/**
	 * Rate of change Percentage: (price-prevPrice)/prevPrice
	 * @param array $real <p>Array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-rocp.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_rocp(array $real, int $timePeriod = NULL): array {}

	/**
	 * Rate of change ratio: (price/prevPrice)
	 * @param array $real <p>Array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-rocr.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_rocr(array $real, int $timePeriod = NULL): array {}

	/**
	 * Rate of change ratio 100 scale: (price/prevPrice)&#42;100
	 * @param array $real <p>Array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-rocr100.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_rocr100(array $real, int $timePeriod = NULL): array {}

	/**
	 * Relative Strength Index
	 * @param array $real <p>Array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-rsi.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_rsi(array $real, int $timePeriod = NULL): array {}

	/**
	 * Parabolic SAR
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param float $acceleration <p>Acceleration Factor used up to the Maximum value. Valid range from 0 to TRADER_REAL_MAX.</p>
	 * @param float $maximum <p>Acceleration Factor Maximum value. Valid range from 0 to TRADER_REAL_MAX.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-sar.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_sar(array $high, array $low, float $acceleration = NULL, float $maximum = NULL): array {}

	/**
	 * Parabolic SAR - Extended
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param float $startValue <p>Start value and direction. 0 for Auto, &gt;0 for Long, &lt;0 for Short. Valid range from TRADER_REAL_MIN to TRADER_REAL_MAX.</p>
	 * @param float $offsetOnReverse <p>Percent offset added/removed to initial stop on short/long reversal. Valid range from 0 to TRADER_REAL_MAX.</p>
	 * @param float $accelerationInitLong <p>Acceleration Factor initial value for the Long direction. Valid range from 0 to TRADER_REAL_MAX.</p>
	 * @param float $accelerationLong <p>Acceleration Factor for the Long direction. Valid range from 0 to TRADER_REAL_MAX.</p>
	 * @param float $accelerationMaxLong <p>Acceleration Factor maximum value for the Long direction. Valid range from 0 to TRADER_REAL_MAX.</p>
	 * @param float $accelerationInitShort <p>Acceleration Factor initial value for the Short direction. Valid range from 0 to TRADER_REAL_MAX.</p>
	 * @param float $accelerationShort <p>Acceleration Factor for the Short direction. Valid range from 0 to TRADER_REAL_MAX.</p>
	 * @param float $accelerationMaxShort <p>Acceleration Factor maximum value for the Short direction. Valid range from 0 to TRADER_REAL_MAX.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-sarext.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_sarext(array $high, array $low, float $startValue = NULL, float $offsetOnReverse = NULL, float $accelerationInitLong = NULL, float $accelerationLong = NULL, float $accelerationMaxLong = NULL, float $accelerationInitShort = NULL, float $accelerationShort = NULL, float $accelerationMaxShort = NULL): array {}

	/**
	 * Set compatibility mode
	 * <p>Set compatibility mode which will affect the way calculations are done by all the extension functions.</p>
	 * @param int $compatId <p>Compatibility Id. TRADER_COMPATIBILITY_&#42; series of constants should be used.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.trader-set-compat.php
	 * @since PECL trader >= 0.2.2
	 */
	function trader_set_compat(int $compatId): void {}

	/**
	 * Set unstable period
	 * <p>Influences unstable period factor for functions, which are sensible to it. More information about unstable periods can be found on the TA-Lib API documentation page.</p>
	 * @param int $functionId <p>Function ID the factor should be set for. TRADER_FUNC_UNST_&#42; constant series can be used to affect the corresponding function.</p>
	 * @param int $timePeriod <p>Unstable period value.</p>
	 * @return void <p>No value is returned.</p>
	 * @link http://php.net/manual/en/function.trader-set-unstable-period.php
	 * @since PECL trader >= 0.2.2
	 */
	function trader_set_unstable_period(int $functionId, int $timePeriod): void {}

	/**
	 * Vector Trigonometric Sin
	 * <p>Calculates the sine for each value in <code>real</code> and returns the resulting array.</p>
	 * @param array $real <p>Array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-sin.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_sin(array $real): array {}

	/**
	 * Vector Trigonometric Sinh
	 * <p>Calculates the hyperbolic sine for each value in <code>real</code> and returns the resulting array.</p>
	 * @param array $real <p>Array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-sinh.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_sinh(array $real): array {}

	/**
	 * Simple Moving Average
	 * @param array $real <p>Array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-sma.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_sma(array $real, int $timePeriod = NULL): array {}

	/**
	 * Vector Square Root
	 * <p>Calculates the square root of each value in <code>real</code> and returns the resulting array.</p>
	 * @param array $real <p>Array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-sqrt.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_sqrt(array $real): array {}

	/**
	 * Standard Deviation
	 * @param array $real <p>Array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @param float $nbDev
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-stddev.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_stddev(array $real, int $timePeriod = NULL, float $nbDev = NULL): array {}

	/**
	 * Stochastic
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @param int $fastK_Period <p>Time period for building the Fast-K line. Valid range from 1 to 100000.</p>
	 * @param int $slowK_Period <p>Smoothing for making the Slow-K line. Valid range from 1 to 100000, usually set to 3.</p>
	 * @param int $slowK_MAType <p>Type of Moving Average for Slow-K. TRADER_MA_TYPE_&#42; series of constants should be used.</p>
	 * @param int $slowD_Period <p>Smoothing for making the Slow-D line. Valid range from 1 to 100000.</p>
	 * @param int $slowD_MAType <p>Type of Moving Average for Slow-D. TRADER_MA_TYPE_&#42; series of constants should be used.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-stoch.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_stoch(array $high, array $low, array $close, int $fastK_Period = NULL, int $slowK_Period = NULL, int $slowK_MAType = NULL, int $slowD_Period = NULL, int $slowD_MAType = NULL): array {}

	/**
	 * Stochastic Fast
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @param int $fastK_Period <p>Time period for building the Fast-K line. Valid range from 1 to 100000.</p>
	 * @param int $fastD_Period <p>Smoothing for making the Fast-D line. Valid range from 1 to 100000, usually set to 3.</p>
	 * @param int $fastD_MAType <p>Type of Moving Average for Fast-D. TRADER_MA_TYPE_&#42; series of constants should be used.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-stochf.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_stochf(array $high, array $low, array $close, int $fastK_Period = NULL, int $fastD_Period = NULL, int $fastD_MAType = NULL): array {}

	/**
	 * Stochastic Relative Strength Index
	 * @param array $real <p>Array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @param int $fastK_Period <p>Time period for building the Fast-K line. Valid range from 1 to 100000.</p>
	 * @param int $fastD_Period <p>Smoothing for making the Fast-D line. Valid range from 1 to 100000, usually set to 3.</p>
	 * @param int $fastD_MAType <p>Type of Moving Average for Fast-D. TRADER_MA_TYPE_&#42; series of constants should be used.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-stochrsi.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_stochrsi(array $real, int $timePeriod = NULL, int $fastK_Period = NULL, int $fastD_Period = NULL, int $fastD_MAType = NULL): array {}

	/**
	 * Vector Arithmetic Subtraction
	 * <p>Calculates the vector subtraction of <code>real1</code> from <code>real0</code> and returns the resulting vector.</p>
	 * @param array $real0 <p>Array of real values.</p>
	 * @param array $real1 <p>Array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-sub.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_sub(array $real0, array $real1): array {}

	/**
	 * Summation
	 * @param array $real <p>Array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-sum.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_sum(array $real, int $timePeriod = NULL): array {}

	/**
	 * Triple Exponential Moving Average (T3)
	 * @param array $real <p>Array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @param float $vFactor <p>Volume Factor. Valid range from 1 to 0.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-t3.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_t3(array $real, int $timePeriod = NULL, float $vFactor = NULL): array {}

	/**
	 * Vector Trigonometric Tan
	 * <p>Calculates the tangent for each value in <code>real</code> and returns the resulting array.</p>
	 * @param array $real <p>Array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-tan.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_tan(array $real): array {}

	/**
	 * Vector Trigonometric Tanh
	 * <p>Calculates the hyperbolic tangent for each value in <code>real</code> and returns the resulting array.</p>
	 * @param array $real <p>Array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-tanh.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_tanh(array $real): array {}

	/**
	 * Triple Exponential Moving Average
	 * @param array $real <p>Array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-tema.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_tema(array $real, int $timePeriod = NULL): array {}

	/**
	 * True Range
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-trange.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_trange(array $high, array $low, array $close): array {}

	/**
	 * Triangular Moving Average
	 * @param array $real <p>Array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-trima.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_trima(array $real, int $timePeriod = NULL): array {}

	/**
	 * 1-day Rate-Of-Change (ROC) of a Triple Smooth EMA
	 * @param array $real <p>Array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-trix.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_trix(array $real, int $timePeriod = NULL): array {}

	/**
	 * Time Series Forecast
	 * @param array $real <p>Array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-tsf.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_tsf(array $real, int $timePeriod = NULL): array {}

	/**
	 * Typical Price
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-typprice.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_typprice(array $high, array $low, array $close): array {}

	/**
	 * Ultimate Oscillator
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @param int $timePeriod1 <p>Number of bars for 1st period. Valid range from 1 to 100000.</p>
	 * @param int $timePeriod2 <p>Number of bars for 2nd period. Valid range from 1 to 100000.</p>
	 * @param int $timePeriod3 <p>Number of bars for 3rd period. Valid range from 1 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-ultosc.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_ultosc(array $high, array $low, array $close, int $timePeriod1 = NULL, int $timePeriod2 = NULL, int $timePeriod3 = NULL): array {}

	/**
	 * Variance
	 * @param array $real <p>Array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @param float $nbDev
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-var.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_var(array $real, int $timePeriod = NULL, float $nbDev = NULL): array {}

	/**
	 * Weighted Close Price
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-wclprice.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_wclprice(array $high, array $low, array $close): array {}

	/**
	 * Williams' %R
	 * @param array $high <p>High price, array of real values.</p>
	 * @param array $low <p>Low price, array of real values.</p>
	 * @param array $close <p>Closing price, array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-willr.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_willr(array $high, array $low, array $close, int $timePeriod = NULL): array {}

	/**
	 * Weighted Moving Average
	 * @param array $real <p>Array of real values.</p>
	 * @param int $timePeriod <p>Number of period. Valid range from 2 to 100000.</p>
	 * @return array <p>Returns an array with calculated data or false on failure.</p>
	 * @link http://php.net/manual/en/function.trader-wma.php
	 * @since PECL trader >= 0.2.0
	 */
	function trader_wma(array $real, int $timePeriod = NULL): array {}

	define('TRADER_COMPATIBILITY_DEFAULT', null);

	define('TRADER_COMPATIBILITY_METASTOCK', null);

	define('TRADER_ERR_ALLOC_ERR', null);

	define('TRADER_ERR_BAD_OBJECT', null);

	define('TRADER_ERR_BAD_PARAM', null);

	define('TRADER_ERR_FUNC_NOT_FOUND', null);

	define('TRADER_ERR_GROUP_NOT_FOUND', null);

	define('TRADER_ERR_INPUT_NOT_ALL_INITIALIZE', null);

	define('TRADER_ERR_INTERNAL_ERROR', null);

	define('TRADER_ERR_INVALID_HANDLE', null);

	define('TRADER_ERR_INVALID_LIST_TYPE', null);

	define('TRADER_ERR_INVALID_PARAM_FUNCTION', null);

	define('TRADER_ERR_INVALID_PARAM_HOLDER', null);

	define('TRADER_ERR_INVALID_PARAM_HOLDER_TYPE', null);

	define('TRADER_ERR_LIB_NOT_INITIALIZE', null);

	define('TRADER_ERR_NOT_SUPPORTED', null);

	define('TRADER_ERR_OUT_OF_RANGE_END_INDEX', null);

	define('TRADER_ERR_OUT_OF_RANGE_START_INDEX', null);

	define('TRADER_ERR_OUTPUT_NOT_ALL_INITIALIZE', null);

	define('TRADER_ERR_SUCCESS', null);

	define('TRADER_ERR_UNKNOWN_ERROR', null);

	define('TRADER_FUNC_UNST_ADX', null);

	define('TRADER_FUNC_UNST_ADXR', null);

	define('TRADER_FUNC_UNST_ALL', null);

	define('TRADER_FUNC_UNST_ATR', null);

	define('TRADER_FUNC_UNST_CMO', null);

	define('TRADER_FUNC_UNST_DX', null);

	define('TRADER_FUNC_UNST_EMA', null);

	define('TRADER_FUNC_UNST_HT_DCPERIOD', null);

	define('TRADER_FUNC_UNST_HT_DCPHASE', null);

	define('TRADER_FUNC_UNST_HT_PHASOR', null);

	define('TRADER_FUNC_UNST_HT_SINE', null);

	define('TRADER_FUNC_UNST_HT_TRENDLINE', null);

	define('TRADER_FUNC_UNST_HT_TRENDMODE', null);

	define('TRADER_FUNC_UNST_KAMA', null);

	define('TRADER_FUNC_UNST_MAMA', null);

	define('TRADER_FUNC_UNST_MFI', null);

	define('TRADER_FUNC_UNST_MINUS_DI', null);

	define('TRADER_FUNC_UNST_MINUS_DM', null);

	define('TRADER_FUNC_UNST_NATR', null);

	define('TRADER_FUNC_UNST_NONE', null);

	define('TRADER_FUNC_UNST_PLUS_DI', null);

	define('TRADER_FUNC_UNST_PLUS_DM', null);

	define('TRADER_FUNC_UNST_RSI', null);

	define('TRADER_FUNC_UNST_STOCHRSI', null);

	define('TRADER_FUNC_UNST_T3', null);

	define('TRADER_MA_TYPE_DEMA', null);

	define('TRADER_MA_TYPE_EMA', null);

	define('TRADER_MA_TYPE_KAMA', null);

	define('TRADER_MA_TYPE_MAMA', null);

	define('TRADER_MA_TYPE_SMA', null);

	define('TRADER_MA_TYPE_T3', null);

	define('TRADER_MA_TYPE_TEMA', null);

	define('TRADER_MA_TYPE_TRIMA', null);

	define('TRADER_MA_TYPE_WMA', null);

	define('TRADER_REAL_MAX', null);

	define('TRADER_REAL_MIN', null);

}
