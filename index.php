
<?php  echo " Hi this test " ; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Secure Checkout — Mediterra</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300;400;500;600;700;800;900&family=Inter:wght@900&family=Inter+Tight:wght@800;900&family=Oranienbaum&family=Playfair+Display:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
<style>
:root {
  --bg: #FAF8F4;
  --card: #FFFFFF;
  --ink: #1A2E1F;
  --ink-soft: #4A5550;
  --muted: #8B8F8B;
  --border: #E8E2D5;
  --border-strong: #D4CCB8;
  --gold: #B8862B;
  --gold-soft: #FAF3E1;
  --green: #1F6B3A;
  --green-soft: #E8F1EA;
  --cta: #E87722;
  --cta-hover: #D26515;
  --paypal: #FFC439;
  --paypal-text: #003087;
  --error: #C73E1D;
  --strikethrough: #B5392E;
}

* { margin: 0; padding: 0; box-sizing: border-box; }

html {
  max-width: 100vw;
  overflow-x: clip;
}
body {
  font-family: 'Figtree', -apple-system, sans-serif;
  background: var(--bg);
  color: var(--ink);
  font-size: 16px;
  line-height: 1.5;
  -webkit-font-smoothing: antialiased;
  overflow-x: clip;
  max-width: 100vw;
}

/* ============ TOP TRUST BAR ============ */
.trust-bar {
  background: #FFFFFF;
  border-bottom: 1px solid var(--border);
  padding: 12px 20px;
  width: 100vw;
  position: relative;
  margin-left: calc(-50vw + 50%);
}
.trust-bar-inner {
  max-width: 1200px;
  margin: 0 auto;
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 16px;
}
.logo {
  font-family: 'Playfair Display', serif;
  font-weight: 700;
  font-size: 22px;
  letter-spacing: 0.5px;
  color: var(--ink);
  display: flex;
  align-items: center;
  gap: 8px;
}
.logo-mark {
  width: 28px;
  height: 28px;
  background: var(--green);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
}
.logo-mark svg { fill: #fff; }
.brand-logo {
  font-family: 'Inter Tight', sans-serif;
  font-weight: 800;
  font-size: 24px;
  letter-spacing: -0.6px;
  color: var(--ink);
}

.trust-right {
  display: flex;
  align-items: center;
  gap: 24px;
}
.phone-link {
  display: flex;
  align-items: center;
  gap: 5px;
  color: var(--ink);
  text-decoration: none;
  font-weight: 600;
  font-size: 14px;
}
.phone-link svg { fill: var(--ink); }
.phone-link .phone-num {
  font-size: 13px;
  font-weight: 700;
}

.secure-badge {
  display: flex;
  align-items: center;
  gap: 6px;
  font-size: 12px;
  color: var(--green);
  font-weight: 600;
  letter-spacing: 0.5px;
  text-transform: uppercase;
}
.secure-badge svg { fill: var(--green); }

@media (max-width: 720px) {
  .secure-badge { display: none; }
  .brand-logo { font-size: 20px; letter-spacing: -0.4px; }
  .trust-logo { height: 52px; max-height: 52px; max-width: 140px; }
}

/* ============ MAIN LAYOUT ============ */
.checkout-wrap {
  max-width: 1200px;
  width: 100%;
  margin: 0 auto;
  padding: 32px 20px 60px;
  display: grid;
  grid-template-columns: minmax(0, 1fr) 420px;
  gap: 40px;
  align-items: start;
}
.summary-col { position: sticky; top: 20px; min-width: 0; }

@media (max-width: 960px) {
  .checkout-wrap {
    grid-template-columns: minmax(0, 1fr);
    grid-template-areas:
      "summary"
      "guarantee"
      "form";
    padding: 16px 5px 40px;
    gap: 16px;
  }
  /* On mobile, "flatten" summary-col so its children become direct grid items */
  .summary-col {
    display: contents;
    position: static;
  }
  .form-col { grid-area: form; min-width: 0; }
  .summary-card { grid-area: summary; min-width: 0; }
  .guarantee { grid-area: guarantee; min-width: 0; }
}

/* ============ FORM CARD ============ */
.form-section {
  background: var(--card);
  border: 1px solid var(--border);
  border-radius: 14px;
  padding: 32px;
}
@media (max-width: 720px) { .form-section { padding: 20px; border-radius: 10px; } }

.form-intro {
  margin-bottom: 24px;
  padding-bottom: 20px;
  border-bottom: 1px solid var(--border);
}
.form-intro h2 {
  font-family: 'Figtree', sans-serif;
  font-size: 22px;
  font-weight: 700;
  color: var(--ink);
  letter-spacing: -0.3px;
  margin-bottom: 4px;
  line-height: 1.2;
}
.form-intro p {
  font-size: 13px;
  color: var(--ink-soft);
  font-weight: 500;
}

.section-heading {
  font-family: 'Figtree', sans-serif;
  font-size: 17px;
  font-weight: 700;
  color: var(--ink);
  margin-bottom: 18px;
  display: flex;
  align-items: center;
  gap: 10px;
}
.section-heading .num {
  width: 26px;
  height: 26px;
  background: var(--ink);
  color: #fff;
  border-radius: 50%;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  font-size: 13px;
  font-weight: 700;
}
.section-heading .card-brands {
  margin-left: auto;
  display: flex;
  align-items: center;
  gap: 4px;
}

.section-divider {
  height: 1px;
  background: var(--border);
  margin: 28px 0;
}

/* Express Checkout */
.express-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 12px;
  margin-bottom: 20px;
}
@media (max-width: 480px) { .express-row { grid-template-columns: 1fr; } }

.express-btn {
  height: 48px;
  border-radius: 8px;
  border: none;
  cursor: pointer;
  font-weight: 700;
  font-size: 15px;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 6px;
  transition: transform 0.1s, box-shadow 0.2s;
}
.express-btn:hover { box-shadow: 0 4px 12px rgba(0,0,0,0.08); }
.express-btn:active { transform: scale(0.98); }

.paypal-btn {
  background: var(--paypal);
  color: var(--paypal-text);
}
.paypal-btn .pay { font-style: italic; font-weight: 800; }
.paypal-btn .pal { font-style: italic; font-weight: 400; }

.applepay-btn {
  background: #000;
  color: #fff;
}
.applepay-btn .pay-with { font-weight: 400; font-size: 13px; }
.applepay-btn .apple { display: flex; align-items: center; gap: 4px; font-weight: 600; }

.or-divider {
  display: flex;
  align-items: center;
  gap: 12px;
  margin: 4px 0 22px;
  color: var(--muted);
  font-size: 12px;
  font-weight: 600;
  letter-spacing: 1px;
  text-transform: uppercase;
}
.or-divider::before, .or-divider::after {
  content: '';
  flex: 1;
  height: 1px;
  background: var(--border);
}

/* Form fields */
.field-row {
  display: grid;
  gap: 12px;
  margin-bottom: 12px;
}
.field-row.two { grid-template-columns: 1fr 1fr; }
.field-row.three { grid-template-columns: 2fr 1fr 1fr; }
@media (max-width: 480px) {
  .field-row.two, .field-row.three { grid-template-columns: 1fr; }
}

.form-section .field {
  position: relative !important;
  display: block !important;
  width: 100% !important;
  margin: 0 !important;
  padding: 0 !important;
  box-sizing: border-box !important;
}
.form-section .field label {
  display: block !important;
  font-size: 13px !important;
  font-weight: 600 !important;
  color: var(--ink) !important;
  margin: 0 0 6px !important;
  padding: 0 !important;
  letter-spacing: 0.1px !important;
  line-height: 1.3 !important;
  background: transparent !important;
}
.form-section .field label .optional {
  font-weight: 400 !important;
  color: var(--muted) !important;
  font-size: 12px !important;
  margin-left: 4px !important;
}
.form-section .field input,
.form-section .field select {
  box-sizing: border-box !important;
  display: block !important;
  vertical-align: middle !important;
  width: 100% !important;
  height: 50px !important;
  padding: 0 14px !important;
  line-height: 1 !important;
  border: 1px solid var(--border-strong) !important;
  border-radius: 8px !important;
  font-size: 16px !important;
  font-family: inherit !important;
  color: var(--ink) !important;
  background-color: var(--card) !important;
  margin: 0 !important;
  appearance: none !important;
  -webkit-appearance: none !important;
  -moz-appearance: none !important;
  transition: border-color 0.15s, background-color 0.15s !important;
}
.form-section .field input:focus,
.form-section .field select:focus {
  outline: none !important;
  border-color: var(--ink) !important;
}
.form-section .field input::placeholder {
  color: var(--muted) !important;
  opacity: 1 !important;
  font-weight: 400 !important;
}
.form-section .field select {
  background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8' fill='none'><path d='M1 1L6 6L11 1' stroke='%234A5550' stroke-width='1.8' stroke-linecap='round' stroke-linejoin='round'/></svg>") !important;
  background-repeat: no-repeat !important;
  background-position: right 14px center !important;
  padding-right: 38px !important;
}
/* Valid state: subtle green border + check icon */
.form-section .field.valid input {
  border-color: #2E8B4E !important;
  background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none'><circle cx='12' cy='12' r='10' fill='%232E8B4E'/><path d='M8 12.5l2.5 2.5L16 9' stroke='%23fff' stroke-width='2.2' stroke-linecap='round' stroke-linejoin='round' fill='none'/></svg>") !important;
  background-repeat: no-repeat !important;
  background-position: right 12px center !important;
  background-size: 20px !important;
  padding-right: 40px !important;
}
.form-section .field.valid select {
  border-color: #2E8B4E !important;
}
/* Error state */
.form-section .field.error input,
.form-section .field.error select {
  border-color: var(--strikethrough) !important;
  background-color: #FDF2F0 !important;
}
.form-section .field-error {
  display: none;
  font-size: 11.5px;
  color: var(--strikethrough);
  margin: 6px 0 0;
  font-weight: 500;
  line-height: 1.4;
}
.form-section .field.error .field-error {
  display: block;
}
/* Row spacing for vertical rhythm with taller fields */
.form-section .field-row {
  margin-bottom: 16px !important;
}
.form-section .field-row:last-of-type {
  margin-bottom: 0 !important;
}
.form-section .field-hint {
  display: block !important;
  font-size: 11px !important;
  color: var(--muted) !important;
  margin: -10px 0 14px !important;
  padding-left: 4px !important;
  line-height: 1.4 !important;
  background: transparent !important;
}
.addr2-toggle {
  display: inline-block;
  color: var(--green);
  font-size: 13px;
  font-weight: 600;
  text-decoration: none;
  margin-top: -6px;
  margin-bottom: 14px;
  padding: 4px 0;
  cursor: pointer;
}
.addr2-toggle:hover { text-decoration: underline; }

/* Payment tabs */
.pay-tabs {
  display: flex;
  gap: 8px;
  margin-bottom: 16px;
  border: 1px solid var(--border-strong);
  border-radius: 10px;
  padding: 4px;
  background: var(--bg);
}
.pay-tab {
  flex: 1;
  height: 42px;
  border: none;
  background: transparent;
  border-radius: 7px;
  cursor: pointer;
  font-size: 14px;
  font-weight: 600;
  color: var(--ink-soft);
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  transition: all 0.15s;
}
.pay-tab.active {
  background: var(--card);
  color: var(--ink);
  box-shadow: 0 1px 3px rgba(0,0,0,0.06);
}
.pay-tab .card-icons {
  display: flex;
  gap: 3px;
}
.card-icon {
  width: 26px;
  height: 16px;
  display: block;
  flex-shrink: 0;
}

/* CTA */
.cta-button {
  width: 100%;
  height: 64px;
  margin-top: 24px;
  background: var(--cta);
  color: #fff;
  border: none;
  border-radius: 10px;
  font-size: 19px;
  font-weight: 600;
  letter-spacing: 0;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 14px;
  font-family: 'Figtree', sans-serif;
  transition: all 0.15s;
  box-shadow: 0 4px 12px rgba(232,119,34,0.25);
  position: relative;
}
.cta-button:hover {
  background: var(--cta-hover);
  box-shadow: 0 6px 16px rgba(232,119,34,0.35);
  transform: translateY(-1px);
}
.cta-button:active { transform: translateY(0); }
.cta-arrow-circle {
  width: 30px;
  height: 30px;
  background: #fff;
  border-radius: 50%;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  transition: transform 0.15s;
  flex-shrink: 0;
}
.cta-arrow-circle svg path {
  stroke: var(--cta);
}
.cta-button:hover .cta-arrow-circle { transform: translateX(4px); }

.cta-sub {
  text-align: center;
  margin-top: 12px;
  font-size: 12px;
  color: var(--muted);
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 6px;
}
.cta-sub svg { fill: var(--muted); }

/* Trust microcopy — line between CTA and seals row */
.trust-microcopy {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 8px;
  margin-top: 14px;
  font-family: 'Figtree', sans-serif;
  font-size: 12px;
  font-weight: 500;
  color: var(--muted);
  letter-spacing: 0.1px;
  white-space: nowrap;
}
.trust-item {
  display: inline-flex;
  align-items: center;
  gap: 5px;
}
.trust-icon {
  flex-shrink: 0;
  color: var(--muted);
}
.trust-sep {
  color: var(--muted);
  opacity: 0.7;
}
@media (max-width: 480px) {
  .trust-microcopy { font-size: 11px; gap: 6px; }
  .trust-item { gap: 4px; }
}

/* Trust seals row */
.seals-row {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 22px;
  margin-top: 10px;
  flex-wrap: nowrap;
}
.trust-logo {
  display: block;
  height: 64px;
  max-height: 64px;
  width: auto;
  max-width: 180px;
  object-fit: contain;
}

/* ============ ORDER SUMMARY ============ */
.summary-card {
  background: transparent;
}

.summary-banner {
  background: var(--green);
  color: #fff;
  text-align: center;
  padding: 10px;
  font-size: 12px;
  font-weight: 700;
  letter-spacing: 1.5px;
  text-transform: uppercase;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  border-radius: 8px;
  margin-bottom: 20px;
}
.summary-banner svg { fill: #fff; }

.summary-body { padding: 0; }

.summary-title {
  font-family: 'Figtree', sans-serif;
  font-size: 13px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.2px;
  color: var(--muted);
  margin-bottom: 14px;
}

/* ORDER SUMMARY — FLAT LAYOUT */
.product-name-large {
  font-family: 'Figtree', sans-serif;
  font-weight: 700;
  font-size: 16px;
  color: var(--ink);
  letter-spacing: -0.3px;
  line-height: 1.25;
}

.product-row {
  display: grid;
  grid-template-columns: minmax(0, auto) minmax(0, 1fr) minmax(0, auto);
  gap: 16px;
  align-items: center;
  padding-bottom: 16px;
  border-bottom: 1px solid var(--border);
  margin-bottom: 16px;
}
@media (max-width: 480px) {
  .product-row { gap: 10px; }
  .product-tile { width: 72px; height: 72px; border-radius: 12px; }
  .savings-badge { font-size: 9px; padding: 3px 7px; gap: 4px; }
  .savings-badge svg { width: 9px; height: 9px; }
  .price-label-top { font-size: 12px; }
}

.product-tile {
  width: 100px;
  height: 100px;
  border-radius: 14px;
  flex-shrink: 0;
  background: var(--card);
  border: 1px solid var(--border);
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
}
.product-img {
  width: 100%;
  height: 100%;
  object-fit: contain;
  display: block;
}

.product-content {
  min-width: 0;
  display: flex;
  flex-direction: column;
  gap: 7px;
}
.product-qty {
  font-family: 'Figtree', sans-serif;
  font-size: 14px;
  font-weight: 600;
  color: var(--ink);
}
.badge-stack {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 7px;
}
.savings-badge {
  display: inline-flex;
  align-items: center;
  gap: 5px;
  background: var(--green);
  color: #fff;
  font-size: 10px;
  font-weight: 800;
  padding: 4px 9px;
  border-radius: 3px;
  letter-spacing: 0.5px;
  text-transform: uppercase;
  max-width: 100%;
  overflow-wrap: anywhere;
}
.savings-badge svg {
  fill: #fff;
  flex-shrink: 0;
}
.free-shipping {
  font-family: 'Figtree', sans-serif;
  font-size: 11px;
  font-weight: 700;
  color: var(--ink);
  text-transform: uppercase;
}

.price-column {
  text-align: right;
  display: flex;
  flex-direction: column;
  align-items: flex-end;
  min-width: 0;
}
.price-label-top {
  font-family: 'Figtree', sans-serif;
  font-size: 13px;
  font-weight: 500;
  color: var(--ink);
  margin-bottom: 4px;
}
.price-label-bottom {
  font-family: 'Figtree', sans-serif;
  font-size: 12px;
  font-weight: 500;
  color: var(--muted);
  margin-top: 0;
}
.price-display {
  display: inline-flex;
  align-items: flex-start;
  font-family: 'Figtree', sans-serif;
  font-weight: 700;
  color: var(--ink);
  letter-spacing: -2px;
  line-height: 0.95;
}
.price-display .currency {
  font-size: 15px;
  margin-top: 3px;
  margin-right: 1px;
  letter-spacing: 0;
  font-weight: 700;
}
.price-display .num {
  font-size: 34px;
  font-weight: 700;
}

/* Bonus row — value-stack item (Montevi Beauty Club, free with order).
   Visually subordinate to the main product: smaller tile, smaller type, no competing badge. */
.bonus-name-row {
  display: flex;
  align-items: center;
  gap: 10px;
}
.bonus-remove {
  background: none;
  border: none;
  padding: 0;
  font-family: 'Figtree', sans-serif;
  font-size: 10.5px;
  font-weight: 500;
  color: var(--muted);
  cursor: pointer;
  text-decoration: underline;
  text-underline-offset: 2px;
  letter-spacing: 0.2px;
  transition: color 0.15s;
  flex-shrink: 0;
}
.bonus-remove:hover {
  color: var(--ink-soft);
}
.bonus-tile {
  width: 56px;
  height: 56px;
  border-radius: 10px;
}
@media (max-width: 480px) {
  .bonus-tile { width: 48px; height: 48px; border-radius: 8px; }
}
.bonus-row .product-content {
  gap: 3px;
}
.bonus-name {
  font-family: 'Figtree', sans-serif;
  font-size: 13px;
  font-weight: 600;
  color: var(--ink);
  letter-spacing: 0.1px;
  white-space: nowrap;
}
.bonus-tagline {
  font-family: 'Figtree', sans-serif;
  font-size: 11px;
  color: var(--muted);
  line-height: 1.4;
  max-width: 220px;
}
.bonus-strike {
  font-family: 'Figtree', sans-serif;
  font-size: 12px;
  color: var(--muted);
  text-decoration: line-through;
  text-decoration-thickness: 1px;
  font-weight: 500;
  margin-bottom: 1px;
}
.bonus-free {
  font-family: 'Figtree', sans-serif;
  font-size: 16px;
  font-weight: 700;
  color: var(--green);
  letter-spacing: -0.2px;
  line-height: 1;
}
.bonus-trial-note {
  font-family: 'Figtree', sans-serif;
  font-size: 10px;
  font-weight: 600;
  color: var(--muted);
  text-transform: uppercase;
  letter-spacing: 0.8px;
  margin-top: 4px;
}

/* Collapsed state: shown only after Remove is clicked */
.bonus-add-back {
  display: none;
  padding-bottom: 16px;
  border-bottom: 1px solid var(--border);
  margin-bottom: 16px;
}
.bonus-add-back button {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: none;
  border: 1px dashed var(--border-strong);
  border-radius: 8px;
  width: 100%;
  padding: 12px 14px;
  font-family: 'Figtree', sans-serif;
  font-size: 13px;
  font-weight: 500;
  color: var(--ink-soft);
  cursor: pointer;
  text-align: left;
  transition: all 0.15s;
}
.bonus-add-back button:hover {
  border-color: var(--ink);
  background: var(--bg);
  color: var(--ink);
}
.add-back-icon {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 18px;
  height: 18px;
  border-radius: 50%;
  background: var(--gold);
  color: #fff;
  font-size: 14px;
  font-weight: 700;
  flex-shrink: 0;
  line-height: 1;
}

/* Total row at bottom */
.total-row {
  display: flex;
  justify-content: space-between;
  align-items: baseline;
}
.total-label {
  font-family: 'Figtree', sans-serif;
  font-weight: 600;
  font-size: 14px;
  color: var(--ink-soft);
  letter-spacing: 0.1px;
}
.total-values {
  display: flex;
  gap: 8px;
  align-items: baseline;
}
.total-strike {
  font-family: 'Figtree', sans-serif;
  font-size: 13px;
  text-decoration: line-through;
  text-decoration-thickness: 1px;
  text-decoration-color: var(--muted);
  color: var(--muted);
  font-weight: 500;
}
.total-current {
  font-family: 'Figtree', sans-serif;
  font-size: 15px;
  font-weight: 700;
  color: var(--ink);
}

/* Total breakdown (less emphasized) */
.totals {
  font-size: 13px;
  color: var(--ink-soft);
}
.totals-row {
  display: flex;
  justify-content: space-between;
  padding: 6px 0;
}
.totals-row.shipping span:last-child { color: var(--green); font-weight: 600; }
.totals-divider { height: 1px; background: var(--border); margin: 4px 0; }
.totals-row.total {
  font-size: 14px;
  font-weight: 600;
  color: var(--ink);
  padding-top: 8px;
}
.totals-row.total span:last-child { font-size: 15px; }

/* Guarantee */
.guarantee {
  position: relative;
  margin-top: 4px;
  padding: 14px 4px;
  display: flex;
  gap: 12px;
  align-items: center;
  justify-content: center;
}
.guarantee::before,
.guarantee::after {
  content: '';
  position: absolute;
  left: 0;
  right: 0;
  height: 1px;
  background: linear-gradient(
    to right,
    transparent 0%,
    rgba(0, 0, 0, 0.1) 50%,
    transparent 100%
  );
}
.guarantee::before { top: 0; }
.guarantee::after { bottom: 0; }
@media (max-width: 960px) {
  .guarantee { margin: 4px 0 0; }
}
.guarantee-img {
  width: 40px;
  height: 40px;
  flex-shrink: 0;
}
.guarantee-text {}
.guarantee-text h4 {
  margin: 0 0 2px;
  font-size: 15px;
  font-weight: 700;
  color: var(--ink);
  letter-spacing: 0;
}
.guarantee-text p {
  margin: 0;
  font-size: 13px;
  color: var(--muted);
  line-height: 1.4;
  font-weight: 500;
}

/* Footer fine print */
.fine-print {
  max-width: 1100px;
  margin: 40px auto 0;
  padding: 32px 24px 28px;
  text-align: center;
  border-top: 1px solid var(--border);
}

/* Urgency banner — sticky top countdown */
.urgency-bar {
  position: sticky;
  top: 0;
  z-index: 100;
  width: 100vw;
  margin-left: calc(-50vw + 50%);
  background: #064F3B;
  color: #fff;
  padding: 10px 16px;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  font-family: 'Figtree', sans-serif;
  font-size: 13px;
  font-weight: 500;
  letter-spacing: 0.2px;
  text-align: center;
  white-space: nowrap;
  overflow: hidden;
}
.urgency-icon {
  flex-shrink: 0;
  color: #F4C430;
}
.urgency-text {
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden;
}
.urgency-text strong {
  font-weight: 800;
  letter-spacing: 0.5px;
}
#countdown {
  font-variant-numeric: tabular-nums;
  font-size: 15px;
  font-weight: 700;
  color: #F4C430;
  letter-spacing: 0.3px;
  display: inline-block;
  min-width: 64px;
  text-align: center;
}
@media (max-width: 480px) {
  .urgency-bar { font-size: 12px; padding: 9px 12px; gap: 6px; }
  #countdown { font-size: 14px; min-width: 60px; }
}
.fp-disclaimer {
  max-width: 640px;
  margin: 0 auto;
  font-size: 11px;
  line-height: 1.75;
  color: var(--muted);
  font-style: italic;
}
.fp-copyright {
  font-size: 11px;
  color: var(--muted);
  letter-spacing: 0.4px;
  margin: 20px 0 0;
}
@media (max-width: 480px) {
  .fp-disclaimer { font-size: 10.5px; }
}

/* Subscription elements */
.product-qty .badge.savings-badge {
  background: var(--green);
}

.sub-renewal {
  margin-top: 8px;
  font-size: 11px;
  color: var(--ink-soft);
  font-weight: 600;
  display: flex;
  align-items: center;
  gap: 5px;
  letter-spacing: 0.2px;
}
.sub-renewal svg {
  fill: var(--green);
  flex-shrink: 0;
}

.totals-renewal {
  margin-top: 10px;
  padding-top: 10px;
  border-top: 1px dashed var(--border-strong);
  font-size: 11px;
  color: var(--ink-soft);
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 5px;
  letter-spacing: 0.2px;
}
.totals-renewal svg {
  fill: var(--green);
  flex-shrink: 0;
}

/* Disclosure text — sits outside the form card, below it. Positive tone, covers subscription terms, cancellation, guarantee, and TOS agreement. */
.disclosure {
  margin: 18px 4px 0;
  font-size: 11.5px;
  line-height: 1.65;
  color: var(--muted);
  text-align: left;
  letter-spacing: 0.1px;
}
.disclosure strong {
  color: var(--ink-soft);
  font-weight: 700;
  letter-spacing: 0.2px;
}
.disclosure a {
  color: var(--muted);
  text-decoration: underline;
  text-underline-offset: 2px;
  font-weight: 500;
}
.disclosure a:hover {
  color: var(--ink-soft);
}
</style>
</head>
<body>

<!-- URGENCY BANNER (sticky top, real-time countdown) -->
<div class="urgency-bar" role="status" aria-live="polite">
  <svg class="urgency-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
    <circle cx="12" cy="12" r="10"/>
    <polyline points="12 6 12 12 16 14"/>
  </svg>
  <span class="urgency-text">Order in <span id="countdown">1:47:23</span> — ships <strong>TODAY</strong></span>
</div>

<!-- TOP TRUST BAR -->
<div class="trust-bar">
  <div class="trust-bar-inner">
    <div class="brand-logo">Mediterra</div>
    <div class="trust-right">
      <a href="tel:" class="phone-link">
        <svg width="18" height="18" viewBox="0 0 24 24"><path d="M20 15.5c-1.25 0-2.45-.2-3.57-.57a1 1 0 00-1.02.24l-2.2 2.2a15.04 15.04 0 01-6.59-6.59l2.2-2.21a1 1 0 00.25-1.01A11.36 11.36 0 018.5 4a1 1 0 00-1-1H4a1 1 0 00-1 1c0 9.39 7.61 17 17 17a1 1 0 001-1v-3.5a1 1 0 00-1-1z"/></svg>
        <span class="phone-num">1-800-XXX-XXXX</span>
      </a>
    </div>
  </div>
</div>

<!-- MAIN -->
<div class="checkout-wrap">

  <!-- LEFT: FORM -->
  <div class="form-col">
    <div class="form-section">

      <!-- CONTACT -->
      <div class="section-heading"><span class="num">1</span> Contact</div>
      <div class="field-row">
        <div class="field">
          <label for="email">Email address</label>
          <input type="email" id="email" autocomplete="email" inputmode="email">
          <span class="field-error" id="email-error">Please enter a valid email address</span>
        </div>
      </div>
      <div class="field-hint">For order confirmation & shipping updates</div>
      <div class="field-row">
        <div class="field">
          <label for="fullname">Full name</label>
          <input type="text" id="fullname" autocomplete="name">
          <span class="field-error" id="fullname-error">Please enter your full name</span>
        </div>
      </div>

      <div class="section-divider"></div>

      <!-- SHIPPING -->
      <div class="section-heading"><span class="num">2</span> Shipping Address</div>
      <div class="field-row">
        <div class="field">
          <label for="addr">Address</label>
          <input type="text" id="addr" autocomplete="address-line1">
          <span class="field-error" id="addr-error">Please enter your shipping address</span>
        </div>
      </div>
      <div class="field-row" id="addr2-row" style="display:none;">
        <div class="field">
          <label for="addr2">Apt, suite, unit</label>
          <input type="text" id="addr2" autocomplete="address-line2">
        </div>
      </div>
      <a href="#" class="addr2-toggle" id="addr2-toggle" onclick="toggleAddr2(event)">+ Add apartment, suite, or unit</a>
      <div class="field-row three">
        <div class="field">
          <label for="city">City</label>
          <input type="text" id="city" autocomplete="address-level2">
          <span class="field-error" id="city-error">Required</span>
        </div>
        <div class="field">
          <label for="state">State</label>
          <select id="state" autocomplete="address-level1">
            <option value="">State</option>
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="DC">District of Columbia</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
          </select>
          <span class="field-error" id="state-error">Required</span>
        </div>
        <div class="field">
          <label for="zip">ZIP</label>
          <input type="text" id="zip" autocomplete="postal-code" inputmode="numeric" maxlength="5" placeholder="12345">
          <span class="field-error" id="zip-error">5 digits</span>
        </div>
      </div>
      <div class="field-row">
        <div class="field">
          <label for="phone">Phone <span class="optional">(optional)</span></label>
          <input type="tel" id="phone" autocomplete="tel" inputmode="tel" placeholder="(555) 123-4567">
        </div>
      </div>
      <div class="field-hint">For SMS shipping notifications</div>

      <div class="section-divider"></div>

      <!-- PAYMENT -->
      <div class="section-heading">
        <span class="num">3</span>
        Payment
        <span class="card-brands">
          <svg class="card-icon" viewBox="0 0 750 471" xmlns="http://www.w3.org/2000/svg" aria-label="Visa"><rect width="750" height="471" rx="40" fill="#0E4595"/><polygon points="278.1975 334.2275 311.5585 138.4655 364.9175 138.4655 331.5335 334.2275" fill="#fff"/><path d="M524.3075,142.6875 C513.7355,138.7215 497.1715,134.4655 476.4845,134.4655 C423.7605,134.4655 386.6205,161.0165 386.3045,199.0695 C386.0075,227.1985 412.8185,242.8905 433.0585,252.2545 C453.8275,261.8495 460.8105,267.9695 460.7115,276.5375 C460.5795,289.6595 444.1255,295.6545 428.7885,295.6545 C407.4315,295.6545 396.0855,292.6875 378.5625,285.3785 L371.6865,282.2665 L364.1975,326.0905 C376.6605,331.5545 399.7065,336.2895 423.6355,336.5345 C479.7245,336.5345 516.1365,310.2875 516.5505,269.6525 C516.7515,247.3835 502.5355,230.4355 471.7515,216.4645 C453.1005,207.4085 441.6785,201.3655 441.7995,192.1955 C441.7995,184.0585 451.4675,175.3575 472.3565,175.3575 C489.8055,175.0865 502.4445,178.8915 512.2925,182.8575 L517.0745,185.1165 L524.3075,142.6875" fill="#fff"/><path d="M661.6145,138.4655 L620.3835,138.4655 C607.6105,138.4655 598.0525,141.9515 592.4425,154.6995 L513.1975,334.1025 L569.2285,334.1025 C569.2285,334.1025 578.3905,309.9805 580.4625,304.6845 C586.5855,304.6845 641.0165,304.7685 648.7985,304.7685 C650.3945,311.6215 655.2905,334.1025 655.2905,334.1025 L704.8025,334.1025 L661.6145,138.4655 Z M596.1975,264.8725 C600.6105,253.5935 617.4565,210.1495 617.4565,210.1495 C617.1415,210.6705 621.8365,198.8155 624.5315,191.4655 L628.1385,208.3435 C628.1385,208.3435 638.3555,255.0725 640.4905,264.8715 L596.1975,264.8715 L596.1975,264.8725 Z" fill="#fff"/><path d="M 45.878906 138.46484 L 45.197266 142.53906 C 66.288263 147.64458 85.126465 155.03257 101.61914 164.22461 L 148.96484 333.91602 L 205.41992 333.84961 L 289.42383 138.46484 L 232.90234 138.46484 L 180.66211 271.96094 L 175.0957 244.83203 C 174.83824 244.00408 174.55942 243.17304 174.27344 242.3418 L 156.10742 154.99219 C 152.87742 142.59619 143.50892 138.89684 131.91992 138.46484 L 45.878906 138.46484 z" fill="#fff"/></svg>
          <svg class="card-icon" viewBox="0 0 48 30" xmlns="http://www.w3.org/2000/svg" aria-label="Mastercard"><circle cx="18" cy="15" r="11" fill="#EB001B"/><circle cx="30" cy="15" r="11" fill="#F79E1B"/><path d="M 24 5.78 a 11 11 0 0 1 0 18.44 a 11 11 0 0 1 0 -18.44 Z" fill="#FF5F00"/></svg>
          <svg class="card-icon" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" aria-label="American Express"><rect width="38" height="24" rx="3" fill="#1FB6E0"/><text x="19" y="17.5" font-family="Arial Black, Helvetica, sans-serif" font-size="11" font-weight="900" fill="#fff" text-anchor="middle" letter-spacing="-0.4">AMEX</text></svg>
        </span>
      </div>

      <div class="field-row">
        <div class="field">
          <label for="card">Card number</label>
          <input type="text" id="card" autocomplete="cc-number" inputmode="numeric" maxlength="19" placeholder="1234 5678 9012 3456">
          <span class="field-error" id="card-error">Please enter a valid card number</span>
        </div>
      </div>
      <div class="field-row two">
        <div class="field">
          <label for="exp">Expiration (MM/YY)</label>
          <input type="text" id="exp" autocomplete="cc-exp" inputmode="numeric" maxlength="5" placeholder="MM/YY">
          <span class="field-error" id="exp-error">MM/YY</span>
        </div>
        <div class="field">
          <label for="cvv">CVV</label>
          <input type="text" id="cvv" autocomplete="cc-csc" inputmode="numeric" maxlength="4" placeholder="123">
          <span class="field-error" id="cvv-error">3 or 4 digits</span>
        </div>
      </div>

      <!-- CTA -->
      <button class="cta-button" onclick="handleContinue()">
        Continue
        <span class="cta-arrow-circle">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 6l6 6-6 6" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </span>
      </button>

      <!-- TRUST MICROCOPY -->
      <div class="trust-microcopy">
        <span class="trust-item">
          <svg class="trust-icon" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
            <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
          </svg>
          Secure checkout
        </span>
        <span class="trust-sep">&middot;</span>
        <span class="trust-item">
          <svg class="trust-icon" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            <path d="M9 12l2 2 4-4"/>
          </svg>
          30-day money-back guarantee
        </span>
      </div>

      <!-- SECURITY SEAL -->
      <div class="seals-row">
        <img class="trust-logo" src="https://logowik.com/content/uploads/images/476_norton_logo.jpg" alt="Norton Secured" />
      </div>

    </div>

    <!-- POST-FORM INFO (outside the form card; covers subscription, cancellation, guarantee, terms in a positive frame) -->
    <div class="disclosure">
      <strong>Subscription details:</strong> Your supply ships every 30 days at $89, so your routine never breaks. Each shipment is backed by our 30-day money-back guarantee — full refund, no questions asked. Manage or cancel anytime <a href="/account">online in your account</a>, by email, or at <a href="tel:18005550199">1-800-555-0199</a>. Your 14-day Wellness Club access renews at $77/month after the trial — cancel anytime if it's not for you, through your account, email, or phone. Placing your order confirms agreement to our <a href="#">Terms</a> and <a href="#">Privacy Policy</a>.
    </div>

  </div>

  <!-- RIGHT: SUMMARY + GUARANTEE -->
  <div class="summary-col">
    <div class="summary-card">

      <div class="summary-body">
        <div class="product-row">
          <!-- Replace src with your product image -->
          <div class="product-tile">
            <img class="product-img" alt="Oil Of Oregano" src="https://www.zenpathwaylife.com/Mediterra/assets/pages/vsl8/img/bottles/img-6-bottles.webp" />
          </div>
          <div class="product-content">
            <div class="product-name-large">Oil Of Oregano</div>
            <div class="badge-stack">
              <span class="savings-badge">
                <svg width="10" height="10" viewBox="0 0 24 24" fill="white"><path d="M21.41 11.58l-9-9C12.05 2.22 11.55 2 11 2H4c-1.1 0-2 .9-2 2v7c0 .55.22 1.05.59 1.42l9 9c.36.36.86.58 1.41.58.55 0 1.05-.22 1.41-.59l7-7c.37-.36.59-.86.59-1.41 0-.55-.23-1.06-.59-1.42zM5.5 7C4.67 7 4 6.33 4 5.5S4.67 4 5.5 4 7 4.67 7 5.5 6.33 7 5.5 7z"/></svg>
                Buy 3 Get 2 FREE
              </span>
              <div class="free-shipping">Free Shipping</div>
            </div>
          </div>
          <div class="price-column">
            <div class="price-label-top">5 Pouches</div>
            <div class="price-display">
              <span class="currency">$</span><span class="num">18</span>
            </div>
            <div class="price-label-bottom">each</div>
          </div>
        </div>

        <!-- BONUS PRODUCT: Mediterra Wellness Club (14-day free trial, opt-out via Remove) -->
        <div class="product-row bonus-row" id="bonus-row">
          <div class="product-tile bonus-tile">
            <img class="product-img" alt="Mediterra Wellness Club" src="https://skilledyou.com/wp-content/uploads/2026/05/Wellness-club-logo.jpg" />
          </div>
          <div class="product-content">
            <div class="bonus-name-row">
              <span class="bonus-name">Mediterra Wellness Club</span>
              <button type="button" class="bonus-remove" onclick="removeBonus()" aria-label="Remove Wellness Club bonus">Remove</button>
            </div>
            <div class="bonus-tagline">Expert advice for gut, metabolic &amp; immune health (exclusive app)</div>
          </div>
          <div class="price-column">
            <div class="bonus-strike">$77</div>
            <div class="bonus-free">FREE</div>
            <div class="bonus-trial-note">14-day access</div>
          </div>
        </div>

        <!-- Add-back state: shown only when bonus has been removed -->
        <div class="bonus-add-back" id="bonus-add-back">
          <button type="button" onclick="addBonusBack()">
            <span class="add-back-icon">+</span>
            <span>Add back free 14-day Wellness Club access</span>
          </button>
        </div>

        <div class="total-row">
          <span class="total-label">Total</span>
          <div class="total-values">
            <span class="total-strike">$374</span>
            <span class="total-current">$89</span>
          </div>
        </div>
      </div>
    </div>

    <!-- GUARANTEE -->
    <div class="guarantee">
      <svg class="guarantee-img" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="30-Day Money-Back Guarantee"><g transform="translate(50 50) scale(2.6) translate(-17.5 -17.5)" fill="#1A2E1F"><path d="M17.5,34.44A3.07,3.07,0,0,1,15.89,34L9.82,30.45A14.79,14.79,0,0,1,2.25,17.7V8A3.2,3.2,0,0,1,4.34,5L16.4.57a3.2,3.2,0,0,1,2.2,0L30.66,5a3.2,3.2,0,0,1,2.09,3V17.7a14.79,14.79,0,0,1-7.57,12.75L19.11,34A3.07,3.07,0,0,1,17.5,34.44Zm0-31.56a.67.67,0,0,0-.24,0L5.2,7.33A.69.69,0,0,0,4.75,8V17.7a12.3,12.3,0,0,0,6.33,10.59l6.07,3.56a.73.73,0,0,0,.7,0l6.07-3.56h0A12.3,12.3,0,0,0,30.25,17.7V8a.69.69,0,0,0-.45-.65L17.74,2.92A.67.67,0,0,0,17.5,2.88Z"/><path d="M16.4,22.35a1.3,1.3,0,0,1-.81-.29l-4.27-3.6a1.25,1.25,0,0,1,1.61-1.92l3.35,2.82L22,13.06a1.25,1.25,0,0,1,1.86,1.68l-6.48,7.2A1.27,1.27,0,0,1,16.4,22.35Z"/></g></svg>
      <div class="guarantee-text">
        <h4>100% Money-Back Guarantee</h4>
        <p>Try it for 30 days risk-free.</p>
      </div>
    </div>

  </div>

</div>

<!-- FINE PRINT -->
<div class="fine-print">
  <p class="fp-disclaimer">
    These statements have not been evaluated by the Food and Drug Administration. This product is not intended to diagnose, treat, cure, or prevent any disease. Individual results may vary.
  </p>
  <p class="fp-copyright">© 2026 Mediterra. All rights reserved.</p>
</div>

<script>
/* ============ URGENCY COUNTDOWN ============ */
(function() {
  var countdown = document.getElementById('countdown');
  if (!countdown) return;

  var STORAGE_KEY = 'mtv_ship_cutoff';
  var endTime;

  // Try to resume an existing countdown from this session.
  // Reloads continue the same countdown — feels real because timer keeps ticking.
  try {
    var stored = sessionStorage.getItem(STORAGE_KEY);
    if (stored) {
      var parsed = parseInt(stored, 10);
      if (parsed > Date.now()) endTime = parsed;
    }
  } catch (e) { /* private mode etc. */ }

  // No active countdown → generate a fresh random one.
  // Range: 31–107 minutes + 0–59 random seconds. Never lands on round numbers.
  if (!endTime) {
    var minMinutes = 31;
    var maxMinutes = 107;
    var randomMinutes = minMinutes + Math.floor(Math.random() * (maxMinutes - minMinutes + 1));
    var randomSeconds = Math.floor(Math.random() * 60);
    var totalMs = (randomMinutes * 60 + randomSeconds) * 1000;
    endTime = Date.now() + totalMs;
    try { sessionStorage.setItem(STORAGE_KEY, String(endTime)); } catch (e) {}
  }

  function pad(n) { return n < 10 ? '0' + n : String(n); }

  function tick() {
    var remaining = endTime - Date.now();
    if (remaining <= 0) {
      countdown.textContent = '0:00:00';
      var text = document.querySelector('.urgency-text');
      if (text) text.innerHTML = 'Last call — order now to ship <strong>TODAY</strong>';
      return;
    }
    var h = Math.floor(remaining / 3600000);
    var m = Math.floor((remaining % 3600000) / 60000);
    var s = Math.floor((remaining % 60000) / 1000);
    countdown.textContent = h + ':' + pad(m) + ':' + pad(s);
    setTimeout(tick, 1000);
  }
  tick();
})();

function removeBonus() {
  document.getElementById('bonus-row').style.display = 'none';
  document.getElementById('bonus-add-back').style.display = 'block';
}
function addBonusBack() {
  document.getElementById('bonus-row').style.display = '';
  document.getElementById('bonus-add-back').style.display = 'none';
}

function toggleAddr2(e) {
  e.preventDefault();
  document.getElementById('addr2-row').style.display = 'block';
  document.getElementById('addr2-toggle').style.display = 'none';
  document.getElementById('addr2').focus();
}

/* ============ INPUT MASKS ============ */
const cardEl = document.getElementById('card');
cardEl.addEventListener('input', e => {
  let v = e.target.value.replace(/\D/g, '').slice(0, 16);
  e.target.value = v.replace(/(.{4})/g, '$1 ').trim();
});

const expEl = document.getElementById('exp');
expEl.addEventListener('input', e => {
  let v = e.target.value.replace(/\D/g, '').slice(0, 4);
  if (v.length >= 3) v = v.slice(0, 2) + '/' + v.slice(2);
  else if (v.length >= 1 && parseInt(v[0]) > 1) v = '0' + v;
  e.target.value = v;
});

const cvvEl = document.getElementById('cvv');
cvvEl.addEventListener('input', e => {
  e.target.value = e.target.value.replace(/\D/g, '').slice(0, 4);
});

const zipEl = document.getElementById('zip');
zipEl.addEventListener('input', e => {
  e.target.value = e.target.value.replace(/\D/g, '').slice(0, 5);
});

const phoneEl = document.getElementById('phone');
phoneEl.addEventListener('input', e => {
  let v = e.target.value.replace(/\D/g, '').slice(0, 10);
  if (v.length === 0) e.target.value = '';
  else if (v.length < 4) e.target.value = '(' + v;
  else if (v.length < 7) e.target.value = '(' + v.slice(0, 3) + ') ' + v.slice(3);
  else e.target.value = '(' + v.slice(0, 3) + ') ' + v.slice(3, 6) + '-' + v.slice(6);
});

/* ============ INLINE VALIDATION ============ */
const VALIDATORS = {
  email: v => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v.trim()),
  fullname: v => v.trim().length >= 2 && /\s/.test(v.trim()),
  addr: v => v.trim().length >= 3,
  city: v => v.trim().length >= 2,
  state: v => v.trim().length > 0,
  zip: v => /^\d{5}$/.test(v.trim()),
  card: v => {
    const digits = v.replace(/\s/g, '');
    return /^\d{13,16}$/.test(digits);
  },
  exp: v => {
    if (!/^\d{2}\/\d{2}$/.test(v)) return false;
    const [mm, yy] = v.split('/').map(n => parseInt(n));
    if (mm < 1 || mm > 12) return false;
    const now = new Date();
    const currentYY = now.getFullYear() % 100;
    const currentMM = now.getMonth() + 1;
    if (yy < currentYY) return false;
    if (yy === currentYY && mm < currentMM) return false;
    return true;
  },
  cvv: v => /^\d{3,4}$/.test(v.trim())
};

function validateField(id) {
  const el = document.getElementById(id);
  if (!el) return true;
  const field = el.closest('.field');
  const validator = VALIDATORS[id];
  const isEmpty = !el.value.trim();
  if (isEmpty) {
    field.classList.remove('valid', 'error');
    return false;
  }
  const isValid = validator ? validator(el.value) : true;
  if (isValid) {
    field.classList.add('valid');
    field.classList.remove('error');
  } else {
    field.classList.add('error');
    field.classList.remove('valid');
  }
  return isValid;
}

// Validate on blur (when leaving the field)
Object.keys(VALIDATORS).forEach(id => {
  const el = document.getElementById(id);
  if (!el) return;
  el.addEventListener('blur', () => validateField(id));
  // Clear error state as user types corrected input
  el.addEventListener('input', () => {
    const field = el.closest('.field');
    if (field.classList.contains('error')) {
      const validator = VALIDATORS[id];
      if (validator && validator(el.value)) {
        field.classList.remove('error');
        field.classList.add('valid');
      }
    }
  });
});

// State select: validate on change (no blur on select)
document.getElementById('state').addEventListener('change', () => validateField('state'));

function handleContinue() {
  const required = ['email', 'fullname', 'addr', 'city', 'state', 'zip', 'card', 'exp', 'cvv'];
  let firstError = null;
  required.forEach(id => {
    const el = document.getElementById(id);
    const field = el.closest('.field');
    const validator = VALIDATORS[id];
    const valid = el.value.trim() && (!validator || validator(el.value));
    if (!valid) {
      field.classList.add('error');
      field.classList.remove('valid');
      if (!firstError) firstError = field;
    }
  });
  if (firstError) {
    firstError.scrollIntoView({behavior: 'smooth', block: 'center'});
    firstError.querySelector('input,select')?.focus();
    return;
  }
  alert('[Demo] Continuing to confirmation…');
}
</script>

</body>
</html>
