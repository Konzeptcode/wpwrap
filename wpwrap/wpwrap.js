wp.hooks.addFilter(
	'blocks.getSaveElement',
	'slug/modify-get-save-content-extra-props',
	doWpWrap
);

function doWpWrap( element, blockType, attributes  ) {
	var blockName = blockType.name.split("/");
	blockName = blockName[blockName.length-1];
	return el(
		'div',
		{
			className: blockName+'-outer-wrapper',
		},
		el(
			'div',
			{
				className: blockName+'-inner-wrapper',
			},
			element
		)
	);

}
