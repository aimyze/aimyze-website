<?php

class HostingerWpConfig {
	private $configPath;
	private $config;
    const DEFAULT_THEME_UPDATE_URI = 'https://hostinger-wp-updates.com?action=get_metadata&slug=hostinger-blog';
    const CANARY_THEME_UPDATE_URI = 'https://hostinger-canary-wp-updates.com?action=get_metadata&slug=hostinger-blog';
	public function __construct( $configPath ) {
		$this->configPath = $configPath;
		$this->decodeConfig();
	}

	private function decodeConfig() {
		if ( file_exists( $this->configPath ) ) {
			$configContent = file_get_contents( $this->configPath );
			$this->config  = json_decode( $configContent, true );
		}
	}

	private function shouldUseCanaryUri(): bool {
		return isset( $_SERVER['H_PLATFORM'] ) && $_SERVER['H_PLATFORM'] === 'Hostinger' && isset( $_SERVER['H_CANARY'] ) && $_SERVER['H_CANARY'] === true;
	}

	public function getThemeUpdaterURI( string $default = self::DEFAULT_THEME_UPDATE_URI ) {
		if ( $this->shouldUseCanaryUri() ) {
			return self::CANARY_THEME_UPDATE_URI;
		}

		return $this->getConfigValue( 'blog_theme_update_uri', $default );
	}

	private function getConfigValue( string $key, $default ) {
		if ( $this->config && isset( $this->config[ $key ] ) ) {
			return $this->config[ $key ];
		}

		return $default;
	}
}

