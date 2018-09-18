Nova.booting((Vue, router) => {
    router.addRoutes([
        {
            name: 'horizon-link',
            path: '/horizon-link',
            component: require('./components/Tool'),
        },
    ])
})
