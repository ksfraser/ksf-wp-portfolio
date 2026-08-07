# FR-005-009 WordpressUI: WordPress Display & Sync of Portfolio Analytics Plan

**Related:** BR-005 Portfolio Analytics, FR-005-001..007

## Description
The WordPress site renders a client's Portfolio Analytics plan and provides a sync bridge to PersonalRecordsOrganizer.

## Primary actor
System (renders on shortcode) / Advisor (initiates sync).

## Main flow
1. Advisor embeds `[ksf_portfolio_plan debtor="123"]`. 2. System loads and renders the plan. 3. Advisor syncs to PRO (fa_record_id linkage).

## Postconditions
Portfolio Analytics plan visible on WordPress; PRO record updated.
