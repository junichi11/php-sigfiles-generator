<?php



namespace {

	/**
	 * Returns the absolute deviation of an array of values
	 * <p>Returns the absolute deviation of the values in <code>a</code>.</p>
	 * @param array $a <p>The input array</p>
	 * @return float <p>Returns the absolute deviation of the values in <code>a</code>, or <b><code>FALSE</code></b> if <code>a</code> is empty or is not an array.</p>
	 * @link http://php.net/manual/en/function.stats-absolute-deviation.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_absolute_deviation(array $a): float {}

	/**
	 * Calculates any one parameter of the beta distribution given values for the others
	 * <p>Returns the cumulative distribution function, its inverse, or one of its parameters, of the beta distribution. The kind of the return value and parameters (<code>par1</code>, <code>par2</code>, and <code>par3</code>) are determined by <code>which</code>.</p><p>The following table lists the return value and parameters by <code>which</code>. CDF, x, alpha, and beta denotes cumurative distribution function, the value of the random variable, and shape parameters of the beta distribution, respectively.</p>
	 * @param float $par1 <p>The first parameter</p>
	 * @param float $par2 <p>The second parameter</p>
	 * @param float $par3 <p>The third parameter</p>
	 * @param int $which <p>The flag to determine what to be calculated</p>
	 * @return float <p>Returns CDF, x, alpha, or beta, determined by <code>which</code>.</p>
	 * @link http://php.net/manual/en/function.stats-cdf-beta.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_cdf_beta(float $par1, float $par2, float $par3, int $which): float {}

	/**
	 * Calculates any one parameter of the binomial distribution given values for the others
	 * <p>Returns the cumulative distribution function, its inverse, or one of its parameters, of the binomial distribution. The kind of the return value and parameters (<code>par1</code>, <code>par2</code>, and <code>par3</code>) are determined by <code>which</code>.</p><p>The following table lists the return value and parameters by <code>which</code>. CDF, x, n, and p denotes cumurative distribution function, the number of successes, the number of trials, and the success rate for each trial, respectively.</p>
	 * @param float $par1 <p>The first parameter</p>
	 * @param float $par2 <p>The second parameter</p>
	 * @param float $par3 <p>The third parameter</p>
	 * @param int $which <p>The flag to determine what to be calculated</p>
	 * @return float <p>Returns CDF, x, n, or p, determined by <code>which</code>.</p>
	 * @link http://php.net/manual/en/function.stats-cdf-binomial.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_cdf_binomial(float $par1, float $par2, float $par3, int $which): float {}

	/**
	 * Calculates any one parameter of the Cauchy distribution given values for the others
	 * <p>Returns the cumulative distribution function, its inverse, or one of its parameters, of the Cauchy distribution. The kind of the return value and parameters (<code>par1</code>, <code>par2</code>, and <code>par3</code>) are determined by <code>which</code>.</p><p>The following table lists the return value and parameters by <code>which</code>. CDF, x, x0, and gamma denotes cumurative distribution function, the value of the random variable, the location and the scale parameter of the Cauchy distribution, respectively.</p>
	 * @param float $par1 <p>The first parameter</p>
	 * @param float $par2 <p>The second parameter</p>
	 * @param float $par3 <p>The third parameter</p>
	 * @param int $which <p>The flag to determine what to be calculated</p>
	 * @return float <p>Returns CDF, x, x0, or gamma, determined by <code>which</code>.</p>
	 * @link http://php.net/manual/en/function.stats-cdf-cauchy.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_cdf_cauchy(float $par1, float $par2, float $par3, int $which): float {}

	/**
	 * Calculates any one parameter of the chi-square distribution given values for the others
	 * <p>Returns the cumulative distribution function, its inverse, or one of its parameters, of the chi-square distribution. The kind of the return value and parameters (<code>par1</code> and <code>par2</code>) are determined by <code>which</code>.</p><p>The following table lists the return value and parameters by <code>which</code>. CDF, x, and k denotes cumurative distribution function, the value of the random variable, and the degree of freedom of the chi-square distribution, respectively.</p>
	 * @param float $par1 <p>The first parameter</p>
	 * @param float $par2 <p>The second parameter</p>
	 * @param int $which <p>The flag to determine what to be calculated</p>
	 * @return float <p>Returns CDF, x, or k, determined by <code>which</code>.</p>
	 * @link http://php.net/manual/en/function.stats-cdf-chisquare.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_cdf_chisquare(float $par1, float $par2, int $which): float {}

	/**
	 * Calculates any one parameter of the exponential distribution given values for the others
	 * <p>Returns the cumulative distribution function, its inverse, or one of its parameters, of the exponential distribution. The kind of the return value and parameters (<code>par1</code> and <code>par2</code>) are determined by <code>which</code>.</p><p>The following table lists the return value and parameters by <code>which</code>. CDF, x, and lambda denotes cumurative distribution function, the value of the random variable, and the rate parameter of the exponential distribution, respectively.</p>
	 * @param float $par1 <p>The first parameter</p>
	 * @param float $par2 <p>The second parameter</p>
	 * @param int $which <p>The flag to determine what to be calculated</p>
	 * @return float <p>Returns CDF, x, or lambda, determined by <code>which</code>.</p>
	 * @link http://php.net/manual/en/function.stats-cdf-exponential.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_cdf_exponential(float $par1, float $par2, int $which): float {}

	/**
	 * Calculates any one parameter of the F distribution given values for the others
	 * <p>Returns the cumulative distribution function, its inverse, or one of its parameters, of the F distribution. The kind of the return value and parameters (<code>par1</code>, <code>par2</code>, and <code>par3</code>) are determined by <code>which</code>.</p><p>The following table lists the return value and parameters by <code>which</code>. CDF, x, d1, and d2 denotes cumurative distribution function, the value of the random variable, and the degree of freedoms of the F distribution, respectively.</p>
	 * @param float $par1 <p>The first parameter</p>
	 * @param float $par2 <p>The second parameter</p>
	 * @param float $par3 <p>The third parameter</p>
	 * @param int $which <p>The flag to determine what to be calculated</p>
	 * @return float <p>Returns CDF, x, d1, or d2, determined by <code>which</code>.</p>
	 * @link http://php.net/manual/en/function.stats-cdf-f.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_cdf_f(float $par1, float $par2, float $par3, int $which): float {}

	/**
	 * Calculates any one parameter of the gamma distribution given values for the others
	 * <p>Returns the cumulative distribution function, its inverse, or one of its parameters, of the gamma distribution. The kind of the return value and parameters (<code>par1</code>, <code>par2</code>, and <code>par3</code>) are determined by <code>which</code>.</p><p>The following table lists the return value and parameters by <code>which</code>. CDF, x, k, and theta denotes cumurative distribution function, the value of the random variable, and the shape and the scale parameter of the gamma distribution, respectively.</p>
	 * @param float $par1 <p>The first parameter</p>
	 * @param float $par2 <p>The second parameter</p>
	 * @param float $par3 <p>The third parameter</p>
	 * @param int $which <p>The flag to determine what to be calculated</p>
	 * @return float <p>Returns CDF, x, k, or theta, determined by <code>which</code>.</p>
	 * @link http://php.net/manual/en/function.stats-cdf-gamma.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_cdf_gamma(float $par1, float $par2, float $par3, int $which): float {}

	/**
	 * Calculates any one parameter of the Laplace distribution given values for the others
	 * <p>Returns the cumulative distribution function, its inverse, or one of its parameters, of the Laplace distribution. The kind of the return value and parameters (<code>par1</code>, <code>par2</code>, and <code>par3</code>) are determined by <code>which</code>.</p><p>The following table lists the return value and parameters by <code>which</code>. CDF, x, mu, and b denotes cumurative distribution function, the value of the random variable, and the location and the scale parameter of the Laplace distribution, respectively.</p>
	 * @param float $par1 <p>The first parameter</p>
	 * @param float $par2 <p>The second parameter</p>
	 * @param float $par3 <p>The third parameter</p>
	 * @param int $which <p>The flag to determine what to be calculated</p>
	 * @return float <p>Returns CDF, x, mu, or b, determined by <code>which</code>.</p>
	 * @link http://php.net/manual/en/function.stats-cdf-laplace.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_cdf_laplace(float $par1, float $par2, float $par3, int $which): float {}

	/**
	 * Calculates any one parameter of the logistic distribution given values for the others
	 * <p>Returns the cumulative distribution function, its inverse, or one of its parameters, of the logistic distribution. The kind of the return value and parameters (<code>par1</code>, <code>par2</code>, and <code>par3</code>) are determined by <code>which</code>.</p><p>The following table lists the return value and parameters by <code>which</code>. CDF, x, mu, and s denotes cumurative distribution function, the value of the random variable, and the location and the scale parameter of the logistic distribution, respectively.</p>
	 * @param float $par1 <p>The first parameter</p>
	 * @param float $par2 <p>The second parameter</p>
	 * @param float $par3 <p>The third parameter</p>
	 * @param int $which <p>The flag to determine what to be calculated</p>
	 * @return float <p>Returns CDF, x, mu, or s, determined by <code>which</code>.</p>
	 * @link http://php.net/manual/en/function.stats-cdf-logistic.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_cdf_logistic(float $par1, float $par2, float $par3, int $which): float {}

	/**
	 * Calculates any one parameter of the negative binomial distribution given values for the others
	 * <p>Returns the cumulative distribution function, its inverse, or one of its parameters, of the negative binomial distribution. The kind of the return value and parameters (<code>par1</code>, <code>par2</code>, and <code>par3</code>) are determined by <code>which</code>.</p><p>The following table lists the return value and parameters by <code>which</code>. CDF, x, r, and p denotes cumurative distribution function, the number of failure, the number of success, and the success rate for each trial, respectively.</p>
	 * @param float $par1 <p>The first parameter</p>
	 * @param float $par2 <p>The second parameter</p>
	 * @param float $par3 <p>The third parameter</p>
	 * @param int $which <p>The flag to determine what to be calculated</p>
	 * @return float <p>Returns CDF, x, r, or p, determined by <code>which</code>.</p>
	 * @link http://php.net/manual/en/function.stats-cdf-negative-binomial.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_cdf_negative_binomial(float $par1, float $par2, float $par3, int $which): float {}

	/**
	 * Calculates any one parameter of the non-central chi-square distribution given values for the others
	 * <p>Returns the cumulative distribution function, its inverse, or one of its parameters, of the non-central chi-square distribution. The kind of the return value and parameters (<code>par1</code>, <code>par2</code>, and <code>par3</code>) are determined by <code>which</code>.</p><p>The following table lists the return value and parameters by <code>which</code>. CDF, x, k, and lambda denotes cumurative distribution function, the value of the random variable, the degree of freedom and the non-centrality parameter of the distribution, respectively.</p>
	 * @param float $par1 <p>The first parameter</p>
	 * @param float $par2 <p>The second parameter</p>
	 * @param float $par3 <p>The third parameter</p>
	 * @param int $which <p>The flag to determine what to be calculated</p>
	 * @return float <p>Returns CDF, x, k, or lambda, determined by <code>which</code>.</p>
	 * @link http://php.net/manual/en/function.stats-cdf-noncentral-chisquare.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_cdf_noncentral_chisquare(float $par1, float $par2, float $par3, int $which): float {}

	/**
	 * Calculates any one parameter of the non-central F distribution given values for the others
	 * <p>Returns the cumulative distribution function, its inverse, or one of its parameters, of the non-central F distribution. The kind of the return value and parameters (<code>par1</code>, <code>par2</code>, <code>par3</code>, and <code>par4</code>) are determined by <code>which</code>.</p><p>The following table lists the return value and parameters by <code>which</code>. CDF, x, nu1, nu2, and lambda denotes cumurative distribution function, the value of the random variable, the degree of freedoms and the non-centrality parameter of the distribution, respectively.</p>
	 * @param float $par1 <p>The first parameter</p>
	 * @param float $par2 <p>The second parameter</p>
	 * @param float $par3 <p>The third parameter</p>
	 * @param float $par4 <p>The fourth parameter</p>
	 * @param int $which <p>The flag to determine what to be calculated</p>
	 * @return float <p>Returns CDF, x, nu1, nu2, or lambda, determined by <code>which</code>.</p>
	 * @link http://php.net/manual/en/function.stats-cdf-noncentral-f.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_cdf_noncentral_f(float $par1, float $par2, float $par3, float $par4, int $which): float {}

	/**
	 * Calculates any one parameter of the non-central t-distribution give values for the others
	 * <p>Returns the cumulative distribution function, its inverse, or one of its parameters, of the non-central t-distribution. The kind of the return value and parameters (<code>par1</code>, <code>par2</code>, and <code>par3</code>) are determined by <code>which</code>.</p><p>The following table lists the return value and parameters by <code>which</code>. CDF, x, nu, and mu denotes cumurative distribution function, the value of the random variable, the degrees of freedom and the non-centrality parameter of the distribution, respectively.</p>
	 * @param float $par1 <p>The first parameter</p>
	 * @param float $par2 <p>The second parameter</p>
	 * @param float $par3 <p>The third parameter</p>
	 * @param int $which <p>The flag to determine what to be calculated</p>
	 * @return float <p>Returns CDF, x, nu, or mu, determined by <code>which</code>.</p>
	 * @link http://php.net/manual/en/function.stats-cdf-noncentral-t.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_cdf_noncentral_t(float $par1, float $par2, float $par3, int $which): float {}

	/**
	 * Calculates any one parameter of the normal distribution given values for the others
	 * <p>Returns the cumulative distribution function, its inverse, or one of its parameters, of the normal distribution. The kind of the return value and parameters (<code>par1</code>, <code>par2</code>, and <code>par3</code>) are determined by <code>which</code>.</p><p>The following table lists the return value and parameters by <code>which</code>. CDF, x, mu, and sigma denotes cumurative distribution function, the value of the random variable, the mean and the standard deviation of the normal distribution, respectively.</p>
	 * @param float $par1 <p>The first parameter</p>
	 * @param float $par2 <p>The second parameter</p>
	 * @param float $par3 <p>The third parameter</p>
	 * @param int $which <p>The flag to determine what to be calculated</p>
	 * @return float <p>Returns CDF, x, mu, or sigma, determined by <code>which</code>.</p>
	 * @link http://php.net/manual/en/function.stats-cdf-normal.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_cdf_normal(float $par1, float $par2, float $par3, int $which): float {}

	/**
	 * Calculates any one parameter of the Poisson distribution given values for the others
	 * <p>Returns the cumulative distribution function, its inverse, or one of its parameters, of the Poisson distribution. The kind of the return value and parameters (<code>par1</code> and <code>par2</code>) are determined by <code>which</code>.</p><p>The following table lists the return value and parameters by <code>which</code>. CDF, x, and lambda denotes cumurative distribution function, the value of the random variable, and the parameter of the Poisson distribution, respectively.</p>
	 * @param float $par1 <p>The first parameter</p>
	 * @param float $par2 <p>The second parameter</p>
	 * @param int $which <p>The flag to determine what to be calculated</p>
	 * @return float <p>Returns CDF, x, or lambda, determined by <code>which</code>.</p>
	 * @link http://php.net/manual/en/function.stats-cdf-poisson.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_cdf_poisson(float $par1, float $par2, int $which): float {}

	/**
	 * Calculates any one parameter of the t-distribution given values for the others
	 * <p>Returns the cumulative distribution function, its inverse, or one of its parameters, of the t-distribution. The kind of the return value and parameters (<code>par1</code> and <code>par2</code>) are determined by <code>which</code>.</p><p>The following table lists the return value and parameters by <code>which</code>. CDF, x, and nu denotes cumurative distribution function, the value of the random variable, and the degrees of freedom of the t-distribution, respectively.</p>
	 * @param float $par1 <p>The first parameter</p>
	 * @param float $par2 <p>The second parameter</p>
	 * @param int $which <p>The flag to determine what to be calculated</p>
	 * @return float <p>Returns CDF, x, or nu, determined by <code>which</code>.</p>
	 * @link http://php.net/manual/en/function.stats-cdf-t.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_cdf_t(float $par1, float $par2, int $which): float {}

	/**
	 * Calculates any one parameter of the uniform distribution given values for the others
	 * <p>Returns the cumulative distribution function, its inverse, or one of its parameters, of the uniform distribution. The kind of the return value and parameters (<code>par1</code>, <code>par2</code>, and <code>par3</code>) are determined by <code>which</code>.</p><p>The following table lists the return value and parameters by <code>which</code>. CDF, x, a, and b denotes cumurative distribution function, the value of the random variable, the lower bound and the higher bound of the uniform distribution, respectively.</p>
	 * @param float $par1 <p>The first parameter</p>
	 * @param float $par2 <p>The second parameter</p>
	 * @param float $par3 <p>The third parameter</p>
	 * @param int $which <p>The flag to determine what to be calculated</p>
	 * @return float <p>Returns CDF, x, a, or b, determined by <code>which</code>.</p>
	 * @link http://php.net/manual/en/function.stats-cdf-uniform.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_cdf_uniform(float $par1, float $par2, float $par3, int $which): float {}

	/**
	 * Calculates any one parameter of the Weibull distribution given values for the others
	 * <p>Returns the cumulative distribution function, its inverse, or one of its parameters, of the binomial distribution. The kind of the return value and parameters (<code>par1</code>, <code>par2</code>, and <code>par3</code>) are determined by <code>which</code>.</p><p>The following table lists the return value and parameters by <code>which</code>. CDF, x, k, and lambda denotes cumurative distribution function, the value of the random variable, the shape and the scale parameter of the Weibull distribution, respectively.</p>
	 * @param float $par1 <p>The first parameter</p>
	 * @param float $par2 <p>The second parameter</p>
	 * @param float $par3 <p>The third parameter</p>
	 * @param int $which <p>The flag to determine what to be calculated</p>
	 * @return float <p>Returns CDF, x, k, or lambda, determined by <code>which</code>.</p>
	 * @link http://php.net/manual/en/function.stats-cdf-weibull.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_cdf_weibull(float $par1, float $par2, float $par3, int $which): float {}

	/**
	 * Computes the covariance of two data sets
	 * <p>Returns the covariance of <code>a</code> and <code>b</code>.</p>
	 * @param array $a <p>The first array</p>
	 * @param array $b <p>The second array</p>
	 * @return float <p>Returns the covariance of <code>a</code> and <code>b</code>, or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.stats-covariance.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_covariance(array $a, array $b): float {}

	/**
	 * Probability density function of the beta distribution
	 * <p>Returns the probability density at <code>x</code>, where the random variable follows the beta distribution of which the shape parameters are <code>a</code> and <code>b</code>.</p>
	 * @param float $x <p>The value at which the probability density is calculated</p>
	 * @param float $a <p>The shape parameter of the distribution</p>
	 * @param float $b <p>The shape parameter of the distribution</p>
	 * @return float <p>The probability density at <code>x</code> or <b><code>FALSE</code></b> for failure.</p>
	 * @link http://php.net/manual/en/function.stats-dens-beta.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_dens_beta(float $x, float $a, float $b): float {}

	/**
	 * Probability density function of the Cauchy distribution
	 * <p>Returns the probability density at <code>x</code>, where the random variable follows the Cauchy distribution whose location and scale are <code>ave</code> and <code>stdev</code>, respectively.</p>
	 * @param float $x <p>The value at which the probability density is calculated</p>
	 * @param float $ave <p>The location parameter of the distribution</p>
	 * @param float $stdev <p>The scale parameter of the distribution</p>
	 * @return float <p>The probability density at <code>x</code> or <b><code>FALSE</code></b> for failure.</p>
	 * @link http://php.net/manual/en/function.stats-dens-cauchy.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_dens_cauchy(float $x, float $ave, float $stdev): float {}

	/**
	 * Probability density function of the chi-square distribution
	 * <p>Returns the probability density at <code>x</code>, where the random variable follows the chi-square distribution of which the degree of freedom is <code>dfr</code>.</p>
	 * @param float $x <p>The value at which the probability density is calculated</p>
	 * @param float $dfr <p>The degree of freedom of the distribution</p>
	 * @return float <p>The probability density at <code>x</code> or <b><code>FALSE</code></b> for failure.</p>
	 * @link http://php.net/manual/en/function.stats-dens-chisquare.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_dens_chisquare(float $x, float $dfr): float {}

	/**
	 * Probability density function of the exponential distribution
	 * <p>Returns the probability density at <code>x</code>, where the random variable follows the exponential distribution of which the scale is <code>scale</code>.</p>
	 * @param float $x <p>The value at which the probability density is calculated</p>
	 * @param float $scale <p>The scale of the distribution</p>
	 * @return float <p>The probability density at <code>x</code> or <b><code>FALSE</code></b> for failure.</p>
	 * @link http://php.net/manual/en/function.stats-dens-exponential.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_dens_exponential(float $x, float $scale): float {}

	/**
	 * Probability density function of the F distribution
	 * <p>Returns the probability density at <code>x</code>, where the random variable follows the F distribution of which the degree of freedoms are <code>dfr1</code> and <code>dfr2</code>.</p>
	 * @param float $x <p>The value at which the probability density is calculated</p>
	 * @param float $dfr1 <p>The degree of freedom of the distribution</p>
	 * @param float $dfr2 <p>The degree of freedom of the distribution</p>
	 * @return float <p>The probability density at <code>x</code> or <b><code>FALSE</code></b> for failure.</p>
	 * @link http://php.net/manual/en/function.stats-dens-f.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_dens_f(float $x, float $dfr1, float $dfr2): float {}

	/**
	 * Probability density function of the gamma distribution
	 * <p>Returns the probability density at <code>x</code>, where the random variable follows the gamma distribution of which the shape parameter is <code>shape</code> and the scale parameter is <code>scale</code>.</p>
	 * @param float $x <p>The value at which the probability density is calculated</p>
	 * @param float $shape <p>The shape parameter of the distribution</p>
	 * @param float $scale <p>The scale parameter of the distribution</p>
	 * @return float <p>The probability density at <code>x</code> or <b><code>FALSE</code></b> for failure.</p>
	 * @link http://php.net/manual/en/function.stats-dens-gamma.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_dens_gamma(float $x, float $shape, float $scale): float {}

	/**
	 * Probability density function of the Laplace distribution
	 * <p>Returns the probability density at <code>x</code>, where the random variable follows the Laplace distribution of which the location parameter is <code>ave</code> and the scale parameter is <code>stdev</code>.</p>
	 * @param float $x <p>The value at which the probability density is calculated</p>
	 * @param float $ave <p>The location parameter of the distribution</p>
	 * @param float $stdev <p>The shape parameter of the distribution</p>
	 * @return float <p>The probability density at <code>x</code> or <b><code>FALSE</code></b> for failure.</p>
	 * @link http://php.net/manual/en/function.stats-dens-laplace.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_dens_laplace(float $x, float $ave, float $stdev): float {}

	/**
	 * Probability density function of the logistic distribution
	 * <p>Returns the probability density at <code>x</code>, where the random variable follows the logistic distribution of which the location parameter is <code>ave</code> and the scale parameter is <code>stdev</code>.</p>
	 * @param float $x <p>The value at which the probability density is calculated</p>
	 * @param float $ave <p>The location parameter of the distribution</p>
	 * @param float $stdev <p>The shape parameter of the distribution</p>
	 * @return float <p>The probability density at <code>x</code> or <b><code>FALSE</code></b> for failure.</p>
	 * @link http://php.net/manual/en/function.stats-dens-logistic.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_dens_logistic(float $x, float $ave, float $stdev): float {}

	/**
	 * Probability density function of the normal distribution
	 * <p>Returns the probability density at <code>x</code>, where the random variable follows the normal distribution of which the mean is <code>ave</code> and the standard deviation is <code>stdev</code>.</p>
	 * @param float $x <p>The value at which the probability density is calculated</p>
	 * @param float $ave <p>The mean of the distribution</p>
	 * @param float $stdev <p>The standard deviation of the distribution</p>
	 * @return float <p>The probability density at <code>x</code> or <b><code>FALSE</code></b> for failure.</p>
	 * @link http://php.net/manual/en/function.stats-dens-normal.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_dens_normal(float $x, float $ave, float $stdev): float {}

	/**
	 * Probability mass function of the binomial distribution
	 * <p>Returns the probability mass at <code>x</code>, where the random variable follows the binomial distribution of which the number of trials is <code>n</code> and the success rate is <code>pi</code>.</p>
	 * @param float $x <p>The value at which the probability mass is calculated</p>
	 * @param float $n <p>The number of trials of the distribution</p>
	 * @param float $pi <p>The success rate of the distribution</p>
	 * @return float <p>The probability mass at <code>x</code> or <b><code>FALSE</code></b> for failure.</p>
	 * @link http://php.net/manual/en/function.stats-dens-pmf-binomial.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_dens_pmf_binomial(float $x, float $n, float $pi): float {}

	/**
	 * Probability mass function of the hypergeometric distribution
	 * <p>Returns the probability mass at <code>n1</code>, where the random variable follows the hypergeometric distribution of which the number of failure is <code>n2</code>, the number of success samples is <code>N1</code>, and the number of failure samples is <code>N2</code>.</p>
	 * @param float $n1 <p>The number of success, at which the probability mass is calculated</p>
	 * @param float $n2 <p>The number of failure of the distribution</p>
	 * @param float $N1 <p>The number of success samples of the distribution</p>
	 * @param float $N2 <p>The number of failure samples of the distribution</p>
	 * @return float <p>The probability mass at <code>n1</code> or <b><code>FALSE</code></b> for failure.</p>
	 * @link http://php.net/manual/en/function.stats-dens-pmf-hypergeometric.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_dens_pmf_hypergeometric(float $n1, float $n2, float $N1, float $N2): float {}

	/**
	 * Probability density function of the negative binomial distribution
	 * <p>Returns the probability density at <code>x</code>, where the random variable follows the negative binomial distribution of which the number of the success is <code>n</code> and the success rate is <code>pi</code>.</p>
	 * @param float $x <p>The value at which the probability density is calculated</p>
	 * @param float $n <p>The number of the success of the distribution</p>
	 * @param float $pi <p>The success rate of the distribution</p>
	 * @return float <p>The probability density at <code>x</code> or <b><code>FALSE</code></b> for failure.</p>
	 * @link http://php.net/manual/en/function.stats-dens-pmf-negative-binomial.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_dens_pmf_negative_binomial(float $x, float $n, float $pi): float {}

	/**
	 * Probability mass function of the Poisson distribution
	 * <p>Returns the probability mass at <code>x</code>, where the random variable follows the Poisson distribution whose parameter is <code>lb</code>.</p>
	 * @param float $x <p>The value at which the probability mass is calculated</p>
	 * @param float $lb <p>The parameter of the Poisson distribution</p>
	 * @return float <p>The probability mass at <code>x</code> or <b><code>FALSE</code></b> for failure.</p>
	 * @link http://php.net/manual/en/function.stats-dens-pmf-poisson.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_dens_pmf_poisson(float $x, float $lb): float {}

	/**
	 * Probability density function of the t-distribution
	 * <p>Returns the probability density at <code>x</code>, where the random variable follows the t-distribution of which the degree of freedom is <code>dfr</code>.</p>
	 * @param float $x <p>The value at which the probability density is calculated</p>
	 * @param float $dfr <p>The degree of freedom of the distribution</p>
	 * @return float <p>The probability density at <code>x</code> or <b><code>FALSE</code></b> for failure.</p>
	 * @link http://php.net/manual/en/function.stats-dens-t.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_dens_t(float $x, float $dfr): float {}

	/**
	 * Probability density function of the uniform distribution
	 * <p>Returns the probability density at <code>x</code>, where the random variable follows the uniform distribution of which the lower bound is <code>a</code> and the upper bound is <code>b</code>.</p>
	 * @param float $x <p>The value at which the probability density is calculated</p>
	 * @param float $a <p>The lower bound of the distribution</p>
	 * @param float $b <p>The upper bound of the distribution</p>
	 * @return float <p>The probability density at <code>x</code> or <b><code>FALSE</code></b> for failure.</p>
	 * @link http://php.net/manual/en/function.stats-dens-uniform.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_dens_uniform(float $x, float $a, float $b): float {}

	/**
	 * Probability density function of the Weibull distribution
	 * <p>Returns the probability density at <code>x</code>, where the random variable follows the Weibull distribution of which the shape parameter is <code>a</code> and the scale parameter is <code>b</code>.</p>
	 * @param float $x <p>The value at which the probability density is calculated</p>
	 * @param float $a <p>The shape parameter of the distribution</p>
	 * @param float $b <p>The scale parameter of the distribution</p>
	 * @return float <p>The probability density at <code>x</code> or <b><code>FALSE</code></b> for failure.</p>
	 * @link http://php.net/manual/en/function.stats-dens-weibull.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_dens_weibull(float $x, float $a, float $b): float {}

	/**
	 * Returns the harmonic mean of an array of values
	 * <p>Returns the harmonic mean of the values in <code>a</code>.</p>
	 * @param array $a <p>The input array</p>
	 * @return number <p>Returns the harmonic mean of the values in <code>a</code>, or <b><code>FALSE</code></b> if <code>a</code> is empty or is not an array.</p>
	 * @link http://php.net/manual/en/function.stats-harmonic-mean.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_harmonic_mean(array $a) {}

	/**
	 * Computes the kurtosis of the data in the array
	 * <p>Returns the kurtosis of the values in <code>a</code>.</p>
	 * @param array $a <p>The input array</p>
	 * @return float <p>Returns the kurtosis of the values in <code>a</code>, or <b><code>FALSE</code></b> if <code>a</code> is empty or is not an array.</p>
	 * @link http://php.net/manual/en/function.stats-kurtosis.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_kurtosis(array $a): float {}

	/**
	 * Generates a random deviate from the beta distribution
	 * <p>Returns a random deviate from the beta distribution with parameters A and B. The density of the beta is x^(a-1) &#42; (1-x)^(b-1) / B(a,b) for 0 &lt; x &lt;. Method R. C. H. Cheng.</p>
	 * @param float $a <p>The shape parameter of the beta distribution</p>
	 * @param float $b <p>The shape parameter of the beta distribution</p>
	 * @return float <p>A random deviate</p>
	 * @link http://php.net/manual/en/function.stats-rand-gen-beta.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_rand_gen_beta(float $a, float $b): float {}

	/**
	 * Generates a random deviate from the chi-square distribution
	 * <p>Returns a random deviate from the chi-square distribution where the degrees of freedom is <code>df</code>.</p>
	 * @param float $df <p>The degrees of freedom</p>
	 * @return float <p>A random deviate</p>
	 * @link http://php.net/manual/en/function.stats-rand-gen-chisquare.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_rand_gen_chisquare(float $df): float {}

	/**
	 * Generates a random deviate from the exponential distribution
	 * <p>Returns a random deviate from the exponential distribution of which the scale is <code>av</code>.</p>
	 * @param float $av <p>The scale parameter</p>
	 * @return float <p>A random deviate</p>
	 * @link http://php.net/manual/en/function.stats-rand-gen-exponential.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_rand_gen_exponential(float $av): float {}

	/**
	 * Generates a random deviate from the F distribution
	 * <p>Generates a random deviate from the F (variance ratio) distribution with "dfn" degrees of freedom in the numerator and "dfd" degrees of freedom in the denominator. Method : directly generates ratio of chisquare variates.</p>
	 * @param float $dfn <p>The degrees of freedom in the numerator</p>
	 * @param float $dfd <p>The degrees of freedom in the denominator</p>
	 * @return float <p>A random deviate</p>
	 * @link http://php.net/manual/en/function.stats-rand-gen-f.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_rand_gen_f(float $dfn, float $dfd): float {}

	/**
	 * Generates uniform float between low (exclusive) and high (exclusive)
	 * <p>Returns a random deviate from the uniform distribution from <code>low</code> to <code>high</code>.</p>
	 * @param float $low <p>The lower bound (inclusive)</p>
	 * @param float $high <p>The upper bound (exclusive)</p>
	 * @return float <p>A random deviate</p>
	 * @link http://php.net/manual/en/function.stats-rand-gen-funiform.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_rand_gen_funiform(float $low, float $high): float {}

	/**
	 * Generates a random deviate from the gamma distribution
	 * <p>Generates a random deviate from the gamma distribution whose density is (A&#42;&#42;R)/Gamma(R) &#42; X&#42;&#42;(R-1) &#42; Exp(-A&#42;X).</p>
	 * @param float $a <p>location parameter of Gamma distribution (<code>a</code> &gt; 0).</p>
	 * @param float $r <p>shape parameter of Gamma distribution (<code>r</code> &gt; 0).</p>
	 * @return float <p>A random deviate</p>
	 * @link http://php.net/manual/en/function.stats-rand-gen-gamma.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_rand_gen_gamma(float $a, float $r): float {}

	/**
	 * Generates a random deviate from the binomial distribution
	 * <p>Returns a random deviate from the binomial distribution whose number of trials is <code>n</code> and whose probability of an event in each trial is <code>pp</code>.</p>
	 * @param int $n <p>The number of trials</p>
	 * @param float $pp <p>The probability of an event in each trial</p>
	 * @return int <p>A random deviate</p>
	 * @link http://php.net/manual/en/function.stats-rand-gen-ibinomial.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_rand_gen_ibinomial(int $n, float $pp): int {}

	/**
	 * Generates a random deviate from the negative binomial distribution
	 * <p>Returns a random deviate from a negative binomial distribution where the number of success is <code>n</code> and the success rate is <code>p</code>.</p>
	 * @param int $n <p>The number of success</p>
	 * @param float $p <p>The success rate</p>
	 * @return int <p>A random deviate, which is the number of failure.</p>
	 * @link http://php.net/manual/en/function.stats-rand-gen-ibinomial-negative.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_rand_gen_ibinomial_negative(int $n, float $p): int {}

	/**
	 * Generates random integer between 1 and 2147483562
	 * <p>Returns a random integer between 1 and 2147483562</p>
	 * @return int <p>A random integer</p>
	 * @link http://php.net/manual/en/function.stats-rand-gen-int.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_rand_gen_int(): int {}

	/**
	 * Generates a single random deviate from a Poisson distribution
	 * <p>Returns a random deviate from the Poisson distribution with parameter <code>mu</code>.</p>
	 * @param float $mu <p>The parameter of the Poisson distribution</p>
	 * @return int <p>A random deviate</p>
	 * @link http://php.net/manual/en/function.stats-rand-gen-ipoisson.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_rand_gen_ipoisson(float $mu): int {}

	/**
	 * Generates integer uniformly distributed between LOW (inclusive) and HIGH (inclusive)
	 * <p>Returns a random integer from the discrete uniform distribution between <code>low</code> (inclusive) and <code>high</code> (inclusive).</p>
	 * @param int $low <p>The lower bound</p>
	 * @param int $high <p>The upper bound</p>
	 * @return int <p>A random integer</p>
	 * @link http://php.net/manual/en/function.stats-rand-gen-iuniform.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_rand_gen_iuniform(int $low, int $high): int {}

	/**
	 * Generates a random deviate from the non-central chi-square distribution
	 * <p>Returns a random deviate from the non-central chi-square distribution with degrees of freedom, <code>df</code>, and non-centrality parameter, <code>xnonc</code>.</p>
	 * @param float $df <p>The degrees of freedom</p>
	 * @param float $xnonc <p>The non-centrality parameter</p>
	 * @return float <p>A random deviate</p>
	 * @link http://php.net/manual/en/function.stats-rand-gen-noncenral-chisquare.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_rand_gen_noncenral_chisquare(float $df, float $xnonc): float {}

	/**
	 * Generates a random deviate from the non-central chi-square distribution
	 * <p>Returns a random deviate from the non-central chi-square distribution with degrees of freedom, <code>df</code>, and non-centrality parameter, <code>xnonc</code>.</p>
	 * @param float $df <p>The degrees of freedom</p>
	 * @param float $xnonc <p>The non-centrality parameter</p>
	 * @return float <p>A random deviate</p>
	 * @link http://php.net/manual/en/function.stats-rand-gen-noncentral-chisquare.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_rand_gen_noncentral_chisquare(float $df, float $xnonc): float {}

	/**
	 * Generates a random deviate from the noncentral F distribution
	 * <p>Returns a random deviate from the non-central F distribution where the degrees of freedoms are <code>dfn</code> (numerator) and <code>dfd</code> (denominator), and the non-centrality parameter is <code>xnonc</code>.</p>
	 * @param float $dfn <p>The degrees of freedom of the numerator</p>
	 * @param float $dfd <p>The degrees of freedom of the denominator</p>
	 * @param float $xnonc <p>The non-centrality parameter</p>
	 * @return float <p>A random deviate</p>
	 * @link http://php.net/manual/en/function.stats-rand-gen-noncentral-f.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_rand_gen_noncentral_f(float $dfn, float $dfd, float $xnonc): float {}

	/**
	 * Generates a single random deviate from a non-central t-distribution
	 * <p>Returns a random deviate from the non-central t-distribution with the degrees of freedom, <code>df</code>, and the non-centrality parameter, <code>xnonc</code>.</p>
	 * @param float $df <p>The degrees of freedom</p>
	 * @param float $xnonc <p>The non-centrality parameter</p>
	 * @return float <p>A random deviate</p>
	 * @link http://php.net/manual/en/function.stats-rand-gen-noncentral-t.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_rand_gen_noncentral_t(float $df, float $xnonc): float {}

	/**
	 * Generates a single random deviate from a normal distribution
	 * <p>Returns a random deviate from the normal distribution with mean, <code>av</code>, and standard deviation, <code>sd</code>.</p>
	 * @param float $av <p>The mean of the normal distribution</p>
	 * @param float $sd <p>The standard deviation of the normal distribution</p>
	 * @return float <p>A random deviate</p>
	 * @link http://php.net/manual/en/function.stats-rand-gen-normal.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_rand_gen_normal(float $av, float $sd): float {}

	/**
	 * Generates a single random deviate from a t-distribution
	 * <p>Returns a random deviate from the t-distribution with the degrees of freedom, <code>df</code>.</p>
	 * @param float $df <p>The degrees of freedom</p>
	 * @return float <p>A random deviate</p>
	 * @link http://php.net/manual/en/function.stats-rand-gen-t.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_rand_gen_t(float $df): float {}

	/**
	 * Get the seed values of the random number generator
	 * <p>Returns the current seed values of the random number generator</p>
	 * @return array <p>Returns an array of two integers.</p>
	 * @link http://php.net/manual/en/function.stats-rand-get-seeds.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_rand_get_seeds(): array {}

	/**
	 * Generate two seeds for the RGN random number generator
	 * <p>Generate two seeds for the random number generator from a <code>phrase</code>.</p>
	 * @param string $phrase <p>The input phrase</p>
	 * @return array <p>Returns an array of two integers.</p>
	 * @link http://php.net/manual/en/function.stats-rand-phrase-to-seeds.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_rand_phrase_to_seeds(string $phrase): array {}

	/**
	 * Generates a random floating point number between 0 and 1
	 * <p>Returns a random floating point number from a uniform distribution between 0 (exclusive) and 1 (exclusive).</p>
	 * @return float <p>A random floating point number</p>
	 * @link http://php.net/manual/en/function.stats-rand-ranf.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_rand_ranf(): float {}

	/**
	 * Set seed values to the random generator
	 * <p>Set <code>iseed1</code> and <code>iseed2</code> as seed values to the random generator used in statistic functions.</p>
	 * @param int $iseed1 <p>The value which is used as the random seed</p>
	 * @param int $iseed2 <p>The value which is used as the random seed</p>
	 * @return void <p>No values are returned.</p>
	 * @link http://php.net/manual/en/function.stats-rand-setall.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_rand_setall(int $iseed1, int $iseed2): void {}

	/**
	 * Computes the skewness of the data in the array
	 * <p>Returns the skewness of the values in <code>a</code>.</p>
	 * @param array $a <p>The input array</p>
	 * @return float <p>Returns the skewness of the values in <code>a</code>, or <b><code>FALSE</code></b> if <code>a</code> is empty or is not an array.</p>
	 * @link http://php.net/manual/en/function.stats-skew.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_skew(array $a): float {}

	/**
	 * Returns the standard deviation
	 * <p>Returns the standard deviation of the values in <code>a</code>.</p>
	 * @param array $a <p>The array of data to find the standard deviation for. Note that all values of the array will be cast to <code>float</code>.</p>
	 * @param bool $sample <p>Indicates if <code>a</code> represents a sample of the population; defaults to <b><code>FALSE</code></b>.</p>
	 * @return float <p>Returns the standard deviation on success; <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.stats-standard-deviation.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_standard_deviation(array $a, bool $sample = FALSE): float {}

	/**
	 * Returns a binomial coefficient
	 * <p>Returns the binomial coefficient of <code>n</code> choose <code>x</code>.</p>
	 * @param int $x <p>The number of chooses from the set</p>
	 * @param int $n <p>The number of elements in the set</p>
	 * @return float <p>Returns the binomial coefficient</p>
	 * @link http://php.net/manual/en/function.stats-stat-binomial-coef.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_stat_binomial_coef(int $x, int $n): float {}

	/**
	 * Returns the Pearson correlation coefficient of two data sets
	 * <p>Returns the Pearson correlation coefficient between <code>arr1</code> and <code>arr2</code>.</p>
	 * @param array $arr1 <p>The first array</p>
	 * @param array $arr2 <p>The second array</p>
	 * @return float <p>Returns the Pearson correlation coefficient between <code>arr1</code> and <code>arr2</code>, or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.stats-stat-correlation.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_stat_correlation(array $arr1, array $arr2): float {}

	/**
	 * Returns the factorial of an integer
	 * <p>Returns the factorial of an integer, <code>n</code>.</p>
	 * @param int $n <p>An integer</p>
	 * @return float <p>The factorial of <code>n</code>.</p>
	 * @link http://php.net/manual/en/function.stats-stat-factorial.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_stat_factorial(int $n): float {}

	/**
	 * Returns the t-value from the independent two-sample t-test
	 * <p>Returns the t-value of the independent two-sample t-test between <code>arr1</code> and <code>arr2</code>.</p><p>This function is currently not documented; only its argument list is available.</p>
	 * @param array $arr1 <p>The first set of values</p>
	 * @param array $arr2 <p>The second set of values</p>
	 * @return float <p>Returns the t-value, or <b><code>FALSE</code></b> if failure.</p>
	 * @link http://php.net/manual/en/function.stats-stat-independent-t.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_stat_independent_t(array $arr1, array $arr2): float {}

	/**
	 * Returns the inner product of two vectors
	 * <p>Returns the inner product of <code>arr1</code> and <code>arr2</code>.</p>
	 * @param array $arr1 <p>The first array</p>
	 * @param array $arr2 <p>The second array</p>
	 * @return float <p>Returns the inner product of <code>arr1</code> and <code>arr2</code>, or <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.stats-stat-innerproduct.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_stat_innerproduct(array $arr1, array $arr2): float {}

	/**
	 * Returns the t-value of the dependent t-test for paired samples
	 * <p>Returns the t-value of the dependent t-test for paired samples <code>arr1</code> and <code>arr2</code>.</p>
	 * @param array $arr1 <p>The first samples</p>
	 * @param array $arr2 <p>The second samples</p>
	 * @return float <p>Returns the t-value, or <b><code>FALSE</code></b> if failure.</p>
	 * @link http://php.net/manual/en/function.stats-stat-paired-t.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_stat_paired_t(array $arr1, array $arr2): float {}

	/**
	 * Returns the percentile value
	 * <p>Returns the <code>perc</code>-th percentile value of the array <code>arr</code>.</p>
	 * @param array $arr <p>The input array</p>
	 * @param float $perc <p>The percentile</p>
	 * @return float <p>Returns the percentile values of the input array.</p>
	 * @link http://php.net/manual/en/function.stats-stat-percentile.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_stat_percentile(array $arr, float $perc): float {}

	/**
	 * Returns the power sum of a vector
	 * <p>Returns the sum of the <code>power</code>-th power of a vector represented as an array <code>arr</code>.</p>
	 * @param array $arr <p>The input array</p>
	 * @param float $power <p>The power</p>
	 * @return float <p>Returns the power sum of the input array.</p>
	 * @link http://php.net/manual/en/function.stats-stat-powersum.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_stat_powersum(array $arr, float $power): float {}

	/**
	 * Returns the variance
	 * <p>Returns the variance of the values in <code>a</code>.</p>
	 * @param array $a <p>The array of data to find the standard deviation for. Note that all values of the array will be cast to <code>float</code>.</p>
	 * @param bool $sample <p>Indicates if <code>a</code> represents a sample of the population; defaults to <b><code>FALSE</code></b>.</p>
	 * @return float <p>Returns the variance on success; <b><code>FALSE</code></b> on failure.</p>
	 * @link http://php.net/manual/en/function.stats-variance.php
	 * @since PECL stats >= 1.0.0
	 */
	function stats_variance(array $a, bool $sample = FALSE): float {}

}
