<?php declare(strict_types=1);
/*
public function testMessengerMergeConfigsTransportOptions()
{
    $processor = new Processor();
    $configuration = new Configuration(true);
    $config = $processor->processConfiguration($configuration, [
        [
            'messenger' => [
                'transports' => [
                    'async' => [
                        'dsn' => 'foo',
                        'options' => [
                            'auto_setup' => true,
                            'option' => 'foo',
                        ],
                    ],
                ],
            ],
        ],
        [
            'messenger' => [
                'transports' => [
                    'async' => [
                        'options' => [
                            'wait_time' => 20,
                            'option' => 'bar',
                            'queue' => [
                                'name' => 'Queue',
                                'option' => 'foo',
                                'queue_options' => [
                                    'option' => 'foo',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ]);

    $this->assertSame(
        [
            'auto_setup' => true,
            'option' => 'bar',
            'wait_time' => 20,
            'queue' => [
                'name' => 'Queue',
                'option' => 'foo',
                'queue_options' => [
                    'option' => 'foo',
                ],
            ],
        ],
        $config['messenger']['transports']['async']['options']
    );
}
