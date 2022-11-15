<?php
namespace Aws\WorkSpaces;

use Aws\AwsClient;

/**
 * Amazon WorkSpaces client.
 *
 * @method \Aws\Result associateConnectionAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateConnectionAliasAsync(array $args = [])
 * @method \Aws\Result associateIpGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateIpGroupsAsync(array $args = [])
 * @method \Aws\Result authorizeIpRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise authorizeIpRulesAsync(array $args = [])
 * @method \Aws\Result copyWorkspaceImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise copyWorkspaceImageAsync(array $args = [])
 * @method \Aws\Result createConnectClientAddIn(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConnectClientAddInAsync(array $args = [])
 * @method \Aws\Result createConnectionAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConnectionAliasAsync(array $args = [])
 * @method \Aws\Result createIpGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createIpGroupAsync(array $args = [])
 * @method \Aws\Result createTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTagsAsync(array $args = [])
 * @method \Aws\Result createUpdatedWorkspaceImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createUpdatedWorkspaceImageAsync(array $args = [])
 * @method \Aws\Result createWorkspaceBundle(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWorkspaceBundleAsync(array $args = [])
 * @method \Aws\Result createWorkspaceImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWorkspaceImageAsync(array $args = [])
 * @method \Aws\Result createWorkspaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createWorkspacesAsync(array $args = [])
 * @method \Aws\Result deleteClientBranding(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteClientBrandingAsync(array $args = [])
 * @method \Aws\Result deleteConnectClientAddIn(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConnectClientAddInAsync(array $args = [])
 * @method \Aws\Result deleteConnectionAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConnectionAliasAsync(array $args = [])
 * @method \Aws\Result deleteIpGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteIpGroupAsync(array $args = [])
 * @method \Aws\Result deleteTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTagsAsync(array $args = [])
 * @method \Aws\Result deleteWorkspaceBundle(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteWorkspaceBundleAsync(array $args = [])
 * @method \Aws\Result deleteWorkspaceImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteWorkspaceImageAsync(array $args = [])
 * @method \Aws\Result deregisterWorkspaceDirectory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterWorkspaceDirectoryAsync(array $args = [])
 * @method \Aws\Result describeAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccountAsync(array $args = [])
 * @method \Aws\Result describeAccountModifications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccountModificationsAsync(array $args = [])
 * @method \Aws\Result describeClientBranding(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClientBrandingAsync(array $args = [])
 * @method \Aws\Result describeClientProperties(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClientPropertiesAsync(array $args = [])
 * @method \Aws\Result describeConnectClientAddIns(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConnectClientAddInsAsync(array $args = [])
 * @method \Aws\Result describeConnectionAliasPermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConnectionAliasPermissionsAsync(array $args = [])
 * @method \Aws\Result describeConnectionAliases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConnectionAliasesAsync(array $args = [])
 * @method \Aws\Result describeIpGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIpGroupsAsync(array $args = [])
 * @method \Aws\Result describeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTagsAsync(array $args = [])
 * @method \Aws\Result describeWorkspaceBundles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWorkspaceBundlesAsync(array $args = [])
 * @method \Aws\Result describeWorkspaceDirectories(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWorkspaceDirectoriesAsync(array $args = [])
 * @method \Aws\Result describeWorkspaceImagePermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWorkspaceImagePermissionsAsync(array $args = [])
 * @method \Aws\Result describeWorkspaceImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWorkspaceImagesAsync(array $args = [])
 * @method \Aws\Result describeWorkspaceSnapshots(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWorkspaceSnapshotsAsync(array $args = [])
 * @method \Aws\Result describeWorkspaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWorkspacesAsync(array $args = [])
 * @method \Aws\Result describeWorkspacesConnectionStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeWorkspacesConnectionStatusAsync(array $args = [])
 * @method \Aws\Result disassociateConnectionAlias(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateConnectionAliasAsync(array $args = [])
 * @method \Aws\Result disassociateIpGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateIpGroupsAsync(array $args = [])
 * @method \Aws\Result importClientBranding(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importClientBrandingAsync(array $args = [])
 * @method \Aws\Result importWorkspaceImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importWorkspaceImageAsync(array $args = [])
 * @method \Aws\Result listAvailableManagementCidrRanges(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAvailableManagementCidrRangesAsync(array $args = [])
 * @method \Aws\Result migrateWorkspace(array $args = [])
 * @method \GuzzleHttp\Promise\Promise migrateWorkspaceAsync(array $args = [])
 * @method \Aws\Result modifyAccount(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyAccountAsync(array $args = [])
 * @method \Aws\Result modifyCertificateBasedAuthProperties(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyCertificateBasedAuthPropertiesAsync(array $args = [])
 * @method \Aws\Result modifyClientProperties(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyClientPropertiesAsync(array $args = [])
 * @method \Aws\Result modifySamlProperties(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifySamlPropertiesAsync(array $args = [])
 * @method \Aws\Result modifySelfservicePermissions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifySelfservicePermissionsAsync(array $args = [])
 * @method \Aws\Result modifyWorkspaceAccessProperties(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyWorkspaceAccessPropertiesAsync(array $args = [])
 * @method \Aws\Result modifyWorkspaceCreationProperties(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyWorkspaceCreationPropertiesAsync(array $args = [])
 * @method \Aws\Result modifyWorkspaceProperties(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyWorkspacePropertiesAsync(array $args = [])
 * @method \Aws\Result modifyWorkspaceState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyWorkspaceStateAsync(array $args = [])
 * @method \Aws\Result rebootWorkspaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rebootWorkspacesAsync(array $args = [])
 * @method \Aws\Result rebuildWorkspaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rebuildWorkspacesAsync(array $args = [])
 * @method \Aws\Result registerWorkspaceDirectory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerWorkspaceDirectoryAsync(array $args = [])
 * @method \Aws\Result restoreWorkspace(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreWorkspaceAsync(array $args = [])
 * @method \Aws\Result revokeIpRules(array $args = [])
 * @method \GuzzleHttp\Promise\Promise revokeIpRulesAsync(array $args = [])
 * @method \Aws\Result startWorkspaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startWorkspacesAsync(array $args = [])
 * @method \Aws\Result stopWorkspaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopWorkspacesAsync(array $args = [])
 * @method \Aws\Result terminateWorkspaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise terminateWorkspacesAsync(array $args = [])
 * @method \Aws\Result updateConnectClientAddIn(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateConnectClientAddInAsync(array $args = [])
 * @method \Aws\Result updateConnectionAliasPermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateConnectionAliasPermissionAsync(array $args = [])
 * @method \Aws\Result updateRulesOfIpGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRulesOfIpGroupAsync(array $args = [])
 * @method \Aws\Result updateWorkspaceBundle(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateWorkspaceBundleAsync(array $args = [])
 * @method \Aws\Result updateWorkspaceImagePermission(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateWorkspaceImagePermissionAsync(array $args = [])
 */
class WorkSpacesClient extends AwsClient {}
