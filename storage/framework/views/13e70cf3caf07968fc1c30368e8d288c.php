<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['size' => 'base']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['size' => 'base']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<?php
    $class = 'bg-white/10  hover:bg-white/25 rounded-xl font-bold transition-colors duration-500';
    if ($size === 'base'){
        $class .= " px-3 py-1 text-sm";
    }
    if ($size === 'small'){
        $class .=" px-3 py-1 text-2xs";
    }
?>
<a href="#" class="<?php echo e($class); ?>"><?php echo e($slot); ?></a>
<?php /**PATH D:\web sits\PixlePositions\resources\views/components/tag.blade.php ENDPATH**/ ?>