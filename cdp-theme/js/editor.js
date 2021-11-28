wp.domReady( () => {
    wp.blocks.registerBlockStyle( 'core/group', [
        {
            name: 'default',
            label: 'Default',
            isDefault: true,
        },
        {
            name: 'highlighted',
            label: 'Mis en avant',
        }
    ]);
} );