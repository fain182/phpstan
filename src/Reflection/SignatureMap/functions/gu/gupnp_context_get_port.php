<?php declare(strict_types = 1);

return new \PHPStan\Reflection\Native\NativeFunctionReflection(
	'gupnp_context_get_port',
	[
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'context',
			false,
			PHPStan\Type\MixedType::__set_state(array(    'isExplicitMixed' => false, )),
			false,
			false
		),

	],
	false,
	PHPStan\Type\IntegerType::__set_state(array())
);
