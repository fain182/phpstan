<?php declare(strict_types = 1);

return new \PHPStan\Reflection\Native\NativeFunctionReflection(
	'pg_end_copy',
	[
       new \PHPStan\Reflection\Native\NativeParameterReflection(
			'connection',
			true,
			PHPStan\Type\ResourceType::__set_state(array()),
			false,
			false
		),

	],
	false,
	PHPStan\Type\BooleanType::__set_state(array())
);
