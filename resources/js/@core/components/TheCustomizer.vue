<script setup>
// Importación de colores estáticos y temas de Vuetify
// import {
//   staticPrimaryColor,
//   staticPrimaryDarkenColor,
// } from '@/plugins/vuetify/theme'

// Importación de enumeraciones para dirección, diseño, temas y skins
// import {
//   Direction,
//   Layout,
//   Skins,
//   Theme,
// } from '@core/enums'

// Importación de store para configuración
// import { useConfigStore } from '@core/stores/config'

// Importación de íconos y skins
// import borderSkin from '@images/customizer-icons/border-light.svg'
// import collapsed from '@images/customizer-icons/collapsed-light.svg'
// import compact from '@images/customizer-icons/compact-light.svg'
// import defaultSkin from '@images/customizer-icons/default-light.svg'
// import horizontalLight from '@images/customizer-icons/horizontal-light.svg'
// import ltrSvg from '@images/customizer-icons/ltr-light.svg'
// import rtlSvg from '@images/customizer-icons/rtl-light.svg'
// import wideSvg from '@images/customizer-icons/wide-light.svg'

// Importación de layout y contenido desde layouts
// import {
//   AppContentLayoutNav,
//   ContentWidth,
// } from '@layouts/enums'

// Importación de cookies y configuraciones desde layouts
// import {
//   cookieRef,
//   namespaceConfig,
// } from '@layouts/stores/config'

// Importación de configuración de temas
// import { themeConfig } from '@themeConfig'

// Importación de almacenamiento y otras utilidades
// import { useStorage } from '@vueuse/core'
// import { PerfectScrollbar } from 'vue3-perfect-scrollbar'
// import { useTheme } from 'vuetify'

// Estado de la apertura del menú lateral
// const isNavDrawerOpen = ref(false)
// const configStore = useConfigStore()
// const vuetifyTheme = useTheme()

// Definición de colores principales
// const colors = [
//   {
//     main: staticPrimaryColor,
//     darken: '#28c76f',
//   },
//   {
//     main: '#0D9394',
//     darken: '#0C8485',
//   },
//   {
//     main: '#FFB400',
//     darken: '#E6A200',
//   },
//   {
//     main: '#FF4C51',
//     darken: '#E64449',
//   },
//   {
//     main: '#16B1FF',
//     darken: '#149FE6',
//   },
// ]

// Color personalizado para el primario
// const customPrimaryColor = ref('#f07d42')

// Observador de cambios en el tema
// watch(() => configStore.theme, () => {
//   const cookiePrimaryColor = cookieRef(`${vuetifyTheme.name.value}ThemePrimaryColor`, null).value
//   if (cookiePrimaryColor && !colors.some(color => color.main === cookiePrimaryColor))
//     customPrimaryColor.value = cookiePrimaryColor
// }, { immediate: true })

// Función para actualizar el color primario
// const setPrimaryColor = useDebounceFn(color => {
//   vuetifyTheme.themes.value[vuetifyTheme.name.value].colors.primary = color.main
//   vuetifyTheme.themes.value[vuetifyTheme.name.value].colors['primary-darken-1'] = color.darken
//   cookieRef(`${vuetifyTheme.name.value}ThemePrimaryColor`, null).value = color.main
//   cookieRef(`${vuetifyTheme.name.value}ThemePrimaryDarkenColor`, null).value = color.darken
//   useStorage(namespaceConfig('initial-loader-color'), null).value = color.main
// }, 100)

// Definición de los modos de tema (Claro, Oscuro, Sistema)
// const themeMode = computed(() => {
//   return [
//     {
//       bgImage: 'tabler-sun',
//       value: Theme.Light,
//       label: 'Light',
//     },
//     {
//       bgImage: 'tabler-moon-stars',
//       value: Theme.Dark,
//       label: 'Dark',
//     },
//     {
//       bgImage: 'tabler-device-desktop-analytics',
//       value: Theme.System,
//       label: 'System',
//     },
//   ]
// })

// Definición de los skins disponibles
// const themeSkin = computed(() => {
//   return [
//     {
//       bgImage: defaultSkin,
//       value: Skins.Default,
//       label: 'Default',
//     },
//     {
//       bgImage: borderSkin,
//       value: Skins.Bordered,
//       label: 'Bordered',
//     },
//   ]
// })

// Definición del layout actual y observador
// const currentLayout = ref(configStore.isVerticalNavCollapsed ? 'collapsed' : configStore.appContentLayoutNav)
// const layouts = computed(() => {
//   return [
//     {
//       bgImage: defaultSkin,
//       value: Layout.Vertical,
//       label: 'Vertical',
//     },
//     {
//       bgImage: collapsed,
//       value: Layout.Collapsed,
//       label: 'Collapsed',
//     },
//     {
//       bgImage: horizontalLight,
//       value: Layout.Horizontal,
//       label: 'Horizontal',
//     },
//   ]
// })

// Observadores para gestionar cambios en el layout y la navegación
// watch(currentLayout, () => {
//   if (currentLayout.value === 'collapsed') {
//     configStore.isVerticalNavCollapsed = true
//     configStore.appContentLayoutNav = AppContentLayoutNav.Vertical
//   } else {
//     configStore.isVerticalNavCollapsed = false
//     configStore.appContentLayoutNav = currentLayout.value
//   }
// })

// Observador para la dirección (LTR/RTL)
// const currentDir = ref(configStore.isAppRTL ? 'rtl' : 'ltr')
// const direction = computed(() => {
//   return [
//     {
//       bgImage: ltrSvg,
//       value: Direction.Ltr,
//       label: 'Left to right',
//     },
//     {
//       bgImage: rtlSvg,
//       value: Direction.Rtl,
//       label: 'Right to left',
//     },
//   ]
// })

// Función para resetear las configuraciones
// const resetCustomizer = async () => {
//   if (isCookieHasAnyValue.value) {
//     vuetifyTheme.themes.value.light.colors.primary = staticPrimaryColor
//     vuetifyTheme.themes.value.dark.colors.primary = staticPrimaryColor
//     vuetifyTheme.themes.value.light.colors['primary-darken-1'] = staticPrimaryDarkenColor
//     vuetifyTheme.themes.value.dark.colors['primary-darken-1'] = staticPrimaryDarkenColor
//     configStore.theme = themeConfig.app.theme
//     configStore.skin = themeConfig.app.skin
//     configStore.isVerticalNavSemiDark = themeConfig.verticalNav.isVerticalNavSemiDark
//     configStore.appContentLayoutNav = themeConfig.app.contentLayoutNav
//     configStore.appContentWidth = themeConfig.app.contentWidth
//     configStore.isAppRTL = isActiveLangRTL.value
//     configStore.isVerticalNavCollapsed = themeConfig.verticalNav.isVerticalNavCollapsed
//     useStorage(namespaceConfig('initial-loader-color'), null).value = staticPrimaryColor
//     currentLayout.value = themeConfig.app.contentLayoutNav
//     cookieRef('lightThemePrimaryColor', null).value = null
//     cookieRef('darkThemePrimaryColor', null).value = null
//     cookieRef('lightThemePrimaryDarkenColor', null).value = null
//     cookieRef('darkThemePrimaryDarkenColor', null).value = null
//     await nextTick()
//     isCookieHasAnyValue.value = false
//     customPrimaryColor.value = '#ffffff'
//   }
// }
</script>

<template>
  <div class="d-lg-block d-none">
    <!-- Botón para abrir el personalizador -->
    <!-- <VBtn icon class="app-customizer-toggler rounded-s-lg rounded-0" style="z-index: 1001;" @click="isNavDrawerOpen = true">
      <VIcon size="22" icon="tabler-settings" />
    </VBtn> -->

    <!-- Navegación lateral para el personalizador -->
    <!-- <VNavigationDrawer v-model="isNavDrawerOpen" temporary touchless border="none" location="end" width="400" elevation="10" class="pa-4 pt-7">
      <div class="d-flex justify-center mb-6">
        <div class="app-customizer-header">
          <h3 class="text-h5 mb-4">Customizer</h3>
          <p>Choose from the settings below to adjust your app.</p>
        </div>
      </div>
      <VDivider></VDivider>
      <div class="app-customizer-wrapper">
        <div class="app-customizer-content pt-5 pb-4">
          <VRow class="mb-4" v-for="(item, index) in themeMode" :key="index">
            <VCol cols="6" md="12">
              <VRadioGroup v-model="configStore.theme" row>
                <VRadio v-for="(theme, index) in item" :key="index" :value="theme.value" class="ml-0" label="Default"/>
              </VRadioGroup>
            </VCol>
          </VRow>
        </div>
      </div>
    </VNavigationDrawer> -->
  </div>
</template>
